<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\AppointmentType;
use App\Models\Customer;
use App\Models\Inquiry;
use App\Models\Subscriber;
use App\Models\TeamMember;
use Illuminate\Database\Seeder;

/** Local demo data only: a few customers, jobs and quote requests so the admin area has something to show. */
class DemoSeeder extends Seeder
{
    public function run(): void
    {
        if (Customer::count() > 0) {
            return;
        }
        $types = AppointmentType::all();
        $techs = TeamMember::where('is_technician', true)->get();
        $people = [
            ['Maria', 'Gonzalez', 'maria@example.com', '+17145550101', '1420 E Collins Ave, Orange, CA 92867'], ['David', 'Reyes', 'david@example.com', '+17145550102', '2210 Red Hill Ave, Tustin, CA 92780'], ['Jennifer', 'Lee', 'jennifer@example.com', '+19495550103', '45 Harbor Blvd, Costa Mesa, CA 92626'],
            ['Tom', 'Kowalski', 'tom@example.com', '+17145550104', '880 S Euclid St, Anaheim, CA 92802'], ['Priya', 'Shah', 'priya@example.com', '+19495550105', '12 Harvest, Irvine, CA 92602'], ['Carlos', 'Mendez', 'carlos@example.com', '+17145550106', '9100 Bolsa Ave, Westminster, CA 92683'],
        ];
        $customers = collect($people)->map(fn ($p) => Customer::create(['first_name' => $p[0], 'last_name' => $p[1], 'email' => $p[2], 'phone' => $p[3], 'address' => $p[4], 'source' => 'website', 'marketing_opt_in' => true]));

        $slots = [[1, 8, 0, 'pending'], [1, 11, 0, 'confirmed'], [2, 9, 0, 'confirmed'], [3, 13, 0, 'pending'], [-3, 10, 0, 'completed'], [-7, 9, 0, 'completed'], [-1, 14, 0, 'no_show'], [5, 8, 0, 'pending']];
        foreach ($slots as $i => [$days, $h, $m, $status]) {
            $type = $types[$i % $types->count()];
            $start = now()->addDays($days)->setTime($h, $m);
            while ($start->isWeekend()) {
                $start->addDay();
            }
            $customer = $customers[$i % $customers->count()];
            Appointment::create(['customer_id' => $customer->id, 'appointment_type_id' => $type->id, 'team_member_id' => $type->team_member_id ?? $techs[$i % max(1, $techs->count())]->id, 'starts_at' => $start, 'ends_at' => $start->copy()->addMinutes($type->duration_minutes), 'service_address' => $customer->address, 'status' => $status, 'customer_notes' => $i % 3 === 0 ? 'Gate code 4421. Dog is friendly but loud.' : null, 'confirmed_at' => in_array($status, ['confirmed', 'completed']) ? now()->subDay() : null]);
        }
        Inquiry::create(['customer_id' => $customers[0]->id, 'name' => 'Maria Gonzalez', 'email' => 'maria@example.com', 'phone' => '+17145550101', 'service' => 'Repipe', 'address' => '1420 E Collins Ave, Orange', 'message' => 'Third pinhole leak this year in a 1968 house. Would like a repipe estimate, ideally next week.', 'status' => 'new']);
        Inquiry::create(['name' => 'Sam Okafor', 'email' => 'sam@example.com', 'phone' => '+17145550199', 'service' => 'Water heater', 'message' => 'Thinking about going tankless before winter. Garage install, two bathrooms.', 'status' => 'contacted']);
        foreach (['maria@example.com', 'david@example.com', 'tips-fan@example.com'] as $e) {
            Subscriber::firstOrCreate(['email' => $e]);
        }
    }
}
