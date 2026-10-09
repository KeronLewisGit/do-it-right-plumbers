<?php

namespace Tests\Feature;

use App\Models\Appointment;
use App\Models\AppointmentType;
use App\Models\Customer;
use App\Models\Inquiry;
use App\Models\Post;
use App\Models\Service;
use App\Models\Subscriber;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\User;
use App\Notifications\AppointmentMail;
use App\Notifications\InquiryMail;
use Database\Seeders\ContentSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class SiteSmokeTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Notification::fake();
        $this->seed(ContentSeeder::class);
    }

    public function test_every_public_page_renders(): void
    {
        $service = Service::where('slug', 'water-heaters')->first();
        $member = TeamMember::first();
        $post = Post::first();
        foreach ([route('home'), route('about'), route('membership'), route('team'), route('team.show', $member), route('reviews'), route('areas'), route('areas.show', 'santa-ana'), route('contact'), route('privacy'), route('sitemap'), route('services'), route('services.show', $service), route('repipes'), route('services.show', 'repipes'), route('emergency'), route('services.show', 'emergency'), route('blog'), route('blog', ['category' => 'Repipes']), route('blog.show', $post), route('book'), route('book', ['type' => 'free-repipe-estimate'])] as $url) {
            $this->get($url)->assertOk();
        }
        $this->get(route('home'))->assertSee('Plumbing done')->assertSee('(714) 485-8449')->assertSee('Whole-House Repipes')->assertSee('data-scroll-hero', false)->assertSee('images/logo.png');
        $this->get(route('areas.show', 'not-a-city'))->assertNotFound();
    }

    public function test_slots_respect_hours_lead_time_and_capacity(): void
    {
        $type = AppointmentType::where('slug', 'plumbing-repair-visit')->first();
        $sunday = now()->next('Sunday');
        $this->getJson(route('book.slots', ['type' => $type->slug, 'date' => $sunday->toDateString()]))->assertOk()->assertJson(['slots' => []]);
        $monday = now()->addWeek()->next('Monday');
        $json = $this->getJson(route('book.slots', ['type' => $type->slug, 'date' => $monday->toDateString()]))->assertOk()->json();
        $this->assertSame('07:00', $json['slots'][0]['time']);
        $this->assertTrue($json['slots'][0]['available']);
        $this->assertContains($monday->toDateString(), $json['open_days']);
    }

    public function test_customer_can_book_and_cancel_online(): void
    {
        $monday = now()->addWeek()->next('Monday');
        $payload = ['type' => 'plumbing-repair-visit', 'date' => $monday->toDateString(), 'time' => '09:00', 'first_name' => 'Ann', 'last_name' => 'Example', 'email' => 'ann@example.com', 'phone' => '555-0101', 'address' => '12 Main St, Orange', 'notes' => 'Dripping faucet', 'new_customer' => 1];
        $response = $this->post(route('book.store'), $payload)->assertRedirect();
        $appointment = Appointment::first();
        $this->assertSame('pending', $appointment->status);
        // Both the customer and the office are emailed (a constructor mismatch here once failed silently inside the catch).
        Notification::assertSentOnDemand(AppointmentMail::class, fn (AppointmentMail $m, array $channels, AnonymousNotifiable $to) => ! $m->forCompany && isset($to->routes['mail']['ann@example.com']));
        Notification::assertSentOnDemand(AppointmentMail::class, fn (AppointmentMail $m, array $channels, AnonymousNotifiable $to) => $m->forCompany && $to->routes['mail'] === config('company.booking.notify'));
        $this->assertSame('+17145550101', $appointment->customer->phone);
        $this->assertSame('12 Main St, Orange', $appointment->service_address);
        $this->assertSame('12 Main St, Orange', $appointment->customer->address, 'the first booking fills in the customer address');
        $this->assertStringContainsString('First-time customer', $appointment->customer_notes);
        $this->get($response->headers->get('Location'))->assertOk()->assertSee($appointment->reference)->assertSee('12 Main St, Orange');

        // Booking the same window four times fills the four trucks; the fifth is refused.
        foreach (range(1, 3) as $i) {
            $this->post(route('book.store'), $payload)->assertRedirect();
        }
        $this->post(route('book.store'), $payload)->assertSessionHasErrors('time');
        $this->assertSame(4, Appointment::count());
        $this->assertSame(1, Customer::count(), 'the same email never creates duplicate customers');

        // A booking without a service address is refused.
        $this->post(route('book.store'), array_diff_key($payload, ['address' => 1]) + ['time' => '13:00'])->assertSessionHasErrors('address');

        $this->get($appointment->manageUrl())->assertOk()->assertSee('Cancel visit');
        $this->post(route('book.cancel', $appointment->manage_token), ['reason' => 'Fixed it myself'])->assertRedirect();
        $this->assertSame('cancelled', $appointment->fresh()->status);
    }

    public function test_contact_form_creates_a_request_and_customer(): void
    {
        $this->post(route('contact.store'), ['name' => 'Bob Builder', 'email' => 'bob@example.com', 'phone' => '714 555 0199', 'service' => 'Repipe', 'address' => '9 Elm St, Tustin', 'message' => 'Third leak this year.'])->assertRedirect()->assertSessionHas('status');
        $this->assertSame(1, Inquiry::count());
        Notification::assertSentOnDemandTimes(InquiryMail::class, 2);
        $this->assertSame('9 Elm St, Tustin', Inquiry::first()->address);
        $this->assertSame('Bob', Customer::first()->first_name);
        $this->post(route('newsletter.store'), ['email' => 'bob@example.com'])->assertSessionHas('newsletter');
        $this->assertSame(1, Subscriber::count());
    }

    public function test_admin_area_requires_login_and_renders_every_page(): void
    {
        $this->get(route('admin.dashboard'))->assertRedirect(route('admin.login'));
        $admin = User::create(['name' => 'Admin', 'email' => 'admin@example.com', 'password' => 'secret-password', 'role' => 'admin']);
        $customer = Customer::create(['first_name' => 'Ann', 'last_name' => 'Example', 'email' => 'ann@example.com', 'phone' => '+17145550101', 'address' => '12 Main St, Orange']);
        $type = AppointmentType::first();
        $appointment = Appointment::create(['customer_id' => $customer->id, 'appointment_type_id' => $type->id, 'starts_at' => now()->addDay()->setTime(10, 0), 'ends_at' => now()->addDay()->setTime(11, 0), 'status' => 'pending']);
        $inquiry = Inquiry::create(['customer_id' => $customer->id, 'name' => 'Ann Example', 'email' => 'ann@example.com', 'message' => 'Hi']);
        Subscriber::create(['email' => 'ann@example.com']);
        $this->post(route('admin.login.attempt'), ['email' => 'admin@example.com', 'password' => 'secret-password'])->assertRedirect(route('admin.dashboard'));

        foreach ([route('admin.dashboard'), route('admin.calendar'), route('admin.appointments.index'), route('admin.appointments.index', ['range' => 'past', 'q' => 'Ann']), route('admin.appointments.create'), route('admin.appointments.show', $appointment), route('admin.customers.index'), route('admin.customers.create'), route('admin.customers.show', $customer), route('admin.customers.edit', $customer), route('admin.inquiries.index'), route('admin.inquiries.show', $inquiry), route('admin.subscribers.index'), route('admin.team.index'), route('admin.team.create'), route('admin.team.edit', TeamMember::first()), route('admin.services.index'), route('admin.services.create'), route('admin.services.edit', Service::first()), route('admin.testimonials.index'), route('admin.testimonials.create'), route('admin.testimonials.edit', Testimonial::first()), route('admin.posts.index'), route('admin.posts.create'), route('admin.posts.edit', Post::first()), route('admin.appointment-types.index'), route('admin.appointment-types.create'), route('admin.appointment-types.edit', $type), route('admin.settings'), route('admin.users.index')] as $url) {
            $this->actingAs($admin)->get($url)->assertOk();
        }
        $this->actingAs($admin)->get(route('admin.appointments.show', $appointment))->assertSee('12 Main St, Orange');
        $this->actingAs($admin)->get(route('admin.subscribers.export'))->assertOk()->assertHeader('content-type', 'text/csv; charset=UTF-8');

        // Confirm → completed, and a staff user cannot reach admin-only settings.
        $this->actingAs($admin)->patch(route('admin.appointments.status', $appointment), ['status' => 'confirmed'])->assertRedirect();
        $this->assertSame('confirmed', $appointment->fresh()->status);
        $staff = User::create(['name' => 'Staff', 'email' => 'staff@example.com', 'password' => 'secret-password', 'role' => 'staff']);
        $this->actingAs($staff)->get(route('admin.dashboard'))->assertOk();
        $this->actingAs($staff)->get(route('admin.settings'))->assertForbidden();
    }

    public function test_admin_can_book_for_a_new_customer_and_change_settings(): void
    {
        $admin = User::create(['name' => 'Admin', 'email' => 'admin@example.com', 'password' => 'secret-password', 'role' => 'admin']);
        $type = AppointmentType::first();
        $monday = now()->addWeek()->next('Monday');
        $this->actingAs($admin)->post(route('admin.appointments.store'), ['first_name' => 'New', 'last_name' => 'Person', 'phone' => '555-0123', 'appointment_type_id' => $type->id, 'date' => $monday->toDateString(), 'time' => '11:00', 'service_address' => '77 Oak Ave, Anaheim', 'status' => 'confirmed'])->assertRedirect();
        $this->assertSame(1, Appointment::where('source', 'admin')->where('service_address', '77 Oak Ave, Anaheim')->count());
        $this->actingAs($admin)->put(route('admin.settings.update'), ['hours' => ['mon' => ['open' => '09:00', 'close' => '17:00'], 'sun' => ['closed' => 1]], 'slot_minutes' => 30, 'crews' => 2, 'lead_hours' => 1, 'horizon_days' => 30, 'notify' => 'dispatch@example.com'])->assertRedirect();
        $json = $this->getJson(route('book.slots', ['type' => $type->slug, 'date' => $monday->toDateString()]))->json();
        $this->assertSame('09:00', $json['slots'][0]['time']);
    }
}
