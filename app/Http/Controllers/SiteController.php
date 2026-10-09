<?php

namespace App\Http\Controllers;

use App\Models\AppointmentType;
use App\Models\Post;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Services\Availability;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function home(): View
    {
        return view('site.home', [
            'services' => Service::active()->where('featured', true)->get(),
            'team' => TeamMember::active()->take(4)->get(),
            'testimonials' => Testimonial::active()->where('featured', true)->take(4)->get(),
            'posts' => Post::published()->take(3)->get(),
            'hours' => app(Availability::class)->hoursForDisplay(),
            'nextSlot' => ($t = AppointmentType::active()->where('slug', 'plumbing-repair-visit')->first()) ? app(Availability::class)->nextSlot($t) : null,
        ]);
    }

    public function about(): View
    {
        return view('site.about', ['team' => TeamMember::active()->get(), 'testimonials' => Testimonial::active()->where('featured', true)->take(3)->get()]);
    }

    public function team(): View
    {
        return view('site.team', ['technicians' => TeamMember::active()->where('is_technician', true)->get(), 'office' => TeamMember::active()->where('is_technician', false)->get()]);
    }

    public function member(TeamMember $member): View
    {
        abort_unless($member->active, 404);

        return view('site.member', ['member' => $member, 'others' => TeamMember::active()->where('id', '!=', $member->id)->take(4)->get()]);
    }

    public function reviews(): View
    {
        return view('site.reviews', ['written' => Testimonial::active()->whereNull('video_url')->get(), 'videos' => Testimonial::active()->whereNotNull('video_url')->get()]);
    }

    /** Every city we dispatch to, from config('company.areas'). */
    public function areas(): View
    {
        return view('site.areas', ['areas' => config('company.areas'), 'services' => Service::active()->where('featured', true)->get()]);
    }

    public function area(string $city): View
    {
        $areas = collect(config('company.areas'));
        $name = $areas->keys()->first(fn ($c) => Str::slug($c) === $city);
        abort_unless($name, 404);

        return view('site.area', [
            'city' => $name, 'note' => $areas[$name],
            'services' => Service::active()->get(),
            'nearby' => $areas->keys()->reject(fn ($c) => $c === $name)->shuffle()->take(6),
            'testimonials' => Testimonial::active()->where('featured', true)->take(3)->get(),
        ]);
    }

    public function contact(): View
    {
        return view('site.contact', ['hours' => app(Availability::class)->hoursForDisplay()]);
    }

    public function privacy(): View
    {
        return view('site.privacy');
    }

    /** XML sitemap of every public page, for search engines. */
    public function sitemap(): Response
    {
        $urls = collect(['home', 'services', 'repipes', 'emergency', 'team', 'about', 'reviews', 'areas', 'blog', 'contact', 'book', 'privacy'])->map(fn ($r) => ['loc' => route($r), 'lastmod' => null])
            ->concat(Service::active()->get()->map(fn ($s) => ['loc' => route('services.show', $s), 'lastmod' => $s->updated_at]))
            ->concat(collect(array_keys(config('company.areas')))->map(fn ($c) => ['loc' => route('areas.show', Str::slug($c)), 'lastmod' => null]))
            ->concat(TeamMember::active()->get()->map(fn ($m) => ['loc' => route('team.show', $m), 'lastmod' => $m->updated_at]))
            ->concat(Post::published()->get()->map(fn ($p) => ['loc' => route('blog.show', $p), 'lastmod' => $p->updated_at]));

        return response()->view('site.sitemap', ['urls' => $urls])->header('Content-Type', 'application/xml');
    }
}
