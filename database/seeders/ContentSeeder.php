<?php

namespace Database\Seeders;

use App\Models\AppointmentType;
use App\Models\Post;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * All public content of the Do It Right Plumbers site. Everything here is editable in Admin.
 * Company facts come from the company's public profiles (Instagram, Linktree, LinkedIn, BBB, trade press);
 * team bios and review quotes are illustrative placeholders to be replaced with the real ones.
 */
class ContentSeeder extends Seeder
{
    public function run(): void
    {
        $this->team();
        $this->services();
        $this->appointmentTypes();
        $this->testimonials();
        $this->posts();
    }

    private function team(): void
    {
        $team = [
            ['name' => 'Edan Bar-Lev', 'title' => 'Owner & Founder · Licensed Plumber and General Contractor', 'is_technician' => true, 'instagram' => 'https://www.instagram.com/doitrightplumbers/',
                'bio' => "Edan co-founded a remodeling company with his brother in 2007 and opened Do It Right Plumbers in 2014 after a year spent studying how the best service companies in the country treat their customers. He is a licensed general contractor and plumber, and still rides along on repipes and tricky slab leaks.\n\nHis rule for the company fits on a business card: the technician at your door should feel like a neighbor who happens to be great at plumbing."],
            ['name' => 'Aviran Bar-Lev', 'title' => 'Co-Founder · Operations',
                'bio' => 'Aviran runs the side of the business you never see: the trucks, the parts, the schedule and the training. If a technician shows up with the right fitting on the first visit, that is Aviran.'],
            ['name' => 'Anthony Cumpiam', 'title' => 'Lead Plumbing Technician', 'is_technician' => true, 'accepts_bookings' => true,
                'bio' => 'Anthony leads our repipe crews and handles the diagnostics other plumbers give up on. Customers mention his patience: he will explain the problem three different ways until it makes sense.'],
            ['name' => 'Payton White', 'title' => 'Customer Experience & Marketing',
                'bio' => 'Payton looks after reviews, the website and the emails you get from us, and makes sure every piece of feedback, good or bad, reaches the people who did the work.'],
        ];
        foreach ($team as $i => $m) {
            TeamMember::updateOrCreate(['slug' => Str::slug($m['name'])], $m + ['sort' => $i + 1, 'is_technician' => false, 'accepts_bookings' => false, 'active' => true]);
        }
    }

    private function services(): void
    {
        $services = [
            [
                'name' => 'Whole-House Repipes', 'slug' => 'repipes', 'icon' => 'pipe', 'image' => 'images/services/repipes.jpg',
                'tagline' => 'Lifetime warranty. Free estimate.',
                'intro' => 'Pinhole leaks, rusty water and weak pressure mean the original pipes are failing. We replace every supply line in the house, usually in one to two days, patch the walls, and warranty the work for as long as you own the home.',
                'body' => "A repipe is the one plumbing job you should only ever pay for once, so we do it completely: new hot and cold lines to every fixture, new shut-off valves, new supply lines, a full pressure test and a city inspection before the walls are closed.\n\nYou choose PEX or Type L copper and we will tell you honestly which we would put in our own house. Our drywall team patches and textures every opening so the only thing you notice afterwards is the shower.",
                'treatments' => [
                    ['name' => 'Free in-home estimate', 'description' => 'A walk-through, a fixture count and a fixed written price. No fee, no pressure.'],
                    ['name' => 'PEX repipe', 'description' => 'Flexible Uponor PEX routed with fewer wall openings. Quiet, corrosion-proof and the best value for most homes.'],
                    ['name' => 'Copper repipe', 'description' => 'Type L copper with soldered joints for homeowners who prefer the traditional material.'],
                    ['name' => 'Permits and inspection', 'description' => 'We pull the city permit and schedule the inspector. The paperwork is part of the job.'],
                    ['name' => 'Drywall patch and texture', 'description' => 'Every opening patched and textured to match, ready for paint.'],
                    ['name' => 'New shut-off valves', 'description' => 'Quarter-turn valves at every fixture and a new main shut-off, so the next emergency is a ten-second fix.'],
                    ['name' => 'Lifetime warranty', 'description' => 'On every pipe, fitting and valve we install, for as long as you own the home.'],
                ],
                'faqs' => [
                    ['q' => 'How long does a repipe take?', 'a' => 'Most single-family homes take one to two days for the plumbing, with water back on each evening. Drywall patching follows the inspection, usually a day or two later.'],
                    ['q' => 'How much does it cost?', 'a' => 'It depends on the size of the house, the number of fixtures and the material. Every estimate is free and fixed in writing, financing is available, and we offer the same price whether you book today or next month.'],
                    ['q' => 'Do I need to move out?', 'a' => 'No. We shut the water off in the morning and have it back on the same evening. Most families carry on as normal.'],
                    ['q' => 'PEX or copper?', 'a' => 'Both are excellent and both carry our lifetime warranty. PEX needs fewer wall openings and costs less; copper is the traditional choice. We explain the trade-offs at the estimate.'],
                    ['q' => 'Will it be inspected?', 'a' => 'Yes. Every repipe is permitted and signed off by the city inspector before we close the walls.'],
                ],
                'featured' => true,
            ],
            [
                'name' => 'Water Heaters', 'slug' => 'water-heaters', 'icon' => 'heater', 'image' => 'images/services/water-heaters.jpg',
                'tagline' => 'Repair, replace or go tankless, same day.',
                'intro' => 'No hot water, a rumbling tank, or water pooling under the heater. We repair most units the same day you call, and we stock tank and tankless heaters on the trucks so a replacement does not mean a second visit.',
                'body' => "A standard tank heater lasts eight to twelve years in Orange County's hard water; the mineral scale at the bottom is what causes the rumbling. We will tell you honestly whether yours is worth repairing, and if it is not, you will get a written price for a like-for-like tank and for a tankless upgrade, side by side.\n\nTankless heaters give endless hot water, take up a fraction of the space and typically cut gas use by a quarter or more. We install, vent and gas-size them correctly, and we flush them annually so they last.",
                'treatments' => [
                    ['name' => 'Water heater repair', 'description' => 'Thermocouples, gas valves, elements, thermostats and pilot problems. $49 diagnostic, credited toward the repair.'],
                    ['name' => 'Tank replacement', 'description' => '40 and 50 gallon gas and electric units on the truck, installed to code with new flex lines, a drip pan and an expansion tank.'],
                    ['name' => 'Tankless installation', 'description' => 'Navien and Rinnai units sized for your home, with proper venting, gas line upsizing and a condensate drain.'],
                    ['name' => '$89 water heater tune-up', 'description' => 'Flushes the sediment out of tanks and descales tankless units, with a full safety check. The single best thing you can do for a heater.'],
                    ['name' => 'Expansion tanks and PRVs', 'description' => 'Required by code and often missing. Protects the heater and every fixture from pressure spikes.'],
                    ['name' => 'Earthquake strapping', 'description' => 'Two straps, anchored to studs, as California law requires.'],
                ],
                'faqs' => [
                    ['q' => 'Can you replace it today?', 'a' => 'Usually, yes. Our trucks carry the common tank sizes, and tankless units are a next-day install once we confirm the gas and venting.'],
                    ['q' => 'Is tankless worth it?', 'a' => 'If you run out of hot water, have a large family or want the garage space back, yes. If a tank suits you, we will say so. Our plumbers are not paid on commission.'],
                    ['q' => 'Why is my water heater making noise?', 'a' => 'Sediment. Hard water leaves mineral scale at the bottom of the tank that pops and rumbles as it heats. A flush fixes it if the tank is still sound.'],
                ],
                'featured' => true,
            ],
            [
                'name' => 'Drain Cleaning & Sewer', 'slug' => 'drains-and-sewer', 'icon' => 'drain', 'image' => 'images/services/drains-and-sewer.jpg',
                'tagline' => '$93 to clear any drain, or it\'s free.',
                'intro' => 'Slow sinks, gurgling toilets and showers that pool at your feet. We clear the clog, then put a camera down the line so you know why it happened and whether it will happen again.',
                'body' => "A snake clears a clog. A camera tells you the truth. Older Orange County neighborhoods have cast iron and clay sewer lines that crack, sag and fill with roots, and clearing the same drain every six months is money down the pipe.\n\nWhen the camera shows a problem, we show you the footage and the options: hydro jetting, a spot repair, or trenchless lining and replacement that leaves your lawn and driveway intact.",
                'treatments' => [
                    ['name' => 'Drain clearing', 'description' => 'Kitchen, bathroom, laundry and floor drains cleared for a flat $93. If we cannot clear it, you do not pay.'],
                    ['name' => 'Laundry line clearing', 'description' => 'Lint and detergent sludge cleared from the standpipe and the line behind it.'],
                    ['name' => 'Pipe descaling', 'description' => 'Mechanical descaling restores the full bore of scaled cast iron drains without replacing them.'],
                    ['name' => 'Sewer camera inspection', 'description' => 'A high-definition camera down the main line, with the footage shared with you. Free with any drain service.'],
                    ['name' => 'Hydro jetting', 'description' => 'High-pressure water scours grease, scale and roots off the pipe walls, not just a hole through the middle.'],
                    ['name' => 'Root removal', 'description' => 'Cutting heads and jetting for root intrusion, plus honest advice on whether the line needs repair.'],
                    ['name' => 'Sewer line repair', 'description' => 'Spot repairs for cracked or bellied sections, with the dig kept as small as possible.'],
                    ['name' => 'Trenchless sewer replacement', 'description' => 'Pipe bursting and lining that replace the main line through two small access pits. Customer requested we do not tear up the grass? Done.'],
                    ['name' => 'Water line installation and repair', 'description' => 'New or repaired main water lines from the meter to the house.'],
                    ['name' => 'Garbage disposals', 'description' => 'Repair and replacement of jammed, leaking or dead disposals, usually in under an hour.'],
                ],
                'faqs' => [
                    ['q' => 'Why does the same drain keep clogging?', 'a' => 'Usually grease and scale narrowing the pipe, or roots in the sewer line. A camera inspection answers it in ten minutes, and we include it free.'],
                    ['q' => 'Is hydro jetting safe for old pipes?', 'a' => 'We camera the line first. If the pipe is sound, jetting is the most thorough clean there is. If it is cracked, we tell you before we jet.'],
                    ['q' => 'Do you have to dig up the yard?', 'a' => 'Rarely. Trenchless lining and pipe bursting replace most sewer lines through two small pits.'],
                ],
                'featured' => true,
            ],
            [
                'name' => 'Leak Detection & Slab Leaks', 'slug' => 'leak-detection', 'icon' => 'droplet', 'image' => 'images/services/leak-detection.jpg',
                'tagline' => 'Find it without tearing up the house.',
                'intro' => 'A water bill that jumped, a warm spot on the floor, the sound of running water when everything is off. We locate leaks with acoustic and thermal equipment and fix them with the smallest possible opening.',
                'body' => "Slab leaks are common in Orange County because so many homes have copper lines running under the concrete foundation. Left alone they undermine the slab and feed mold. Found early they are a contained repair.\n\nOur technicians pinpoint the leak electronically first, so we open one spot, not three. Depending on the pipe's condition we repair the section, reroute the line overhead, or recommend a repipe if the rest of the system is on its way out.",
                'treatments' => [
                    ['name' => 'Electronic leak detection', 'description' => 'Acoustic listening, thermal imaging and pressure testing to pinpoint the leak before anything is opened.'],
                    ['name' => 'Slab leak repair', 'description' => 'Direct access through the slab for a single bad section, patched and finished.'],
                    ['name' => 'Line reroutes', 'description' => 'Abandon the under-slab line and run a new one through the walls or attic. Often faster and cheaper than breaking concrete.'],
                    ['name' => 'Water main and yard leaks', 'description' => 'Locate and repair the line between the meter and the house.'],
                    ['name' => 'Pinhole and pipe leaks', 'description' => 'Repairs to copper, galvanized and PEX lines inside walls and ceilings.'],
                    ['name' => 'Frozen or burst pipe repair', 'description' => 'Rare in Orange County, but it happens in the canyons. Emergency response and permanent repair.'],
                ],
                'faqs' => [
                    ['q' => 'How do I know if I have a slab leak?', 'a' => 'A water bill that rose for no reason, warm patches on the floor, damp carpet or baseboards, or a water meter that spins with every tap off. Any one of those is worth a $49 diagnostic.'],
                    ['q' => 'Will insurance cover it?', 'a' => 'Many policies cover the damage and the access, though not always the pipe itself. We provide a written report and photos that insurers accept.'],
                ],
                'featured' => true,
            ],
            [
                'name' => 'Water Filtration & Softeners', 'slug' => 'water-filtration', 'icon' => 'filter', 'image' => 'images/services/water-filtration.jpg',
                'tagline' => 'Orange County water, without the scale.',
                'intro' => 'Our water is safe, but it is hard. Mineral scale shortens the life of every heater, faucet and appliance in the house and leaves spots on everything. A whole-home system fixes it at the main.',
                'body' => 'We install and service whole-home softeners, salt-free conditioners and carbon filtration, plus under-sink reverse osmosis for drinking water. We test your water first and size the system to the house and the number of people in it, and we are happy to tell you if you do not need one.',
                'treatments' => [
                    ['name' => 'Free water test', 'description' => 'Hardness, chlorine and TDS measured at the tap so the recommendation is based on your water, not a brochure.'],
                    ['name' => 'Whole-home water softeners', 'description' => 'Removes the calcium and magnesium that cause scale. Softer skin, cleaner glasses, longer-lived appliances.'],
                    ['name' => 'Salt-free conditioners', 'description' => 'Stops scale from sticking without adding sodium or using a drain. A good fit for many OC homes.'],
                    ['name' => 'Whole-home carbon filtration', 'description' => 'Removes chlorine and chloramine taste and smell from every tap and shower.'],
                    ['name' => 'Reverse osmosis drinking water', 'description' => 'Under-sink systems that deliver bottled-quality water from a dedicated faucet.'],
                    ['name' => 'Filter changes and service', 'description' => 'Annual service plans so you never think about it again.'],
                ],
                'faqs' => [
                    ['q' => 'Softener or conditioner?', 'a' => 'A softener removes hardness; a conditioner stops it sticking. Softeners give the biggest difference you can feel; conditioners need no salt and no drain. We explain both at the free water test.'],
                    ['q' => 'Does it need maintenance?', 'a' => 'Softeners need salt every month or two. Filters are changed yearly. We offer a service plan that covers it.'],
                ],
                'featured' => true,
            ],
            [
                'name' => 'Plumbing Repair & Installation', 'slug' => 'plumbing-repair', 'icon' => 'wrench', 'image' => 'images/services/plumbing-repair.jpg',
                'tagline' => 'Faucets, toilets, gas lines and everything in between.',
                'intro' => 'The everyday calls: a toilet that runs, a faucet that drips, a shower valve that will not hold its temperature, a gas line for the new range. One $49 diagnostic covers the visit, and the price is on paper before we start.',
                'body' => 'Every truck carries the parts for the common repairs so most jobs are finished on the first visit. For kitchen and bathroom remodels we work alongside your contractor, or bring our own crew: we started as a remodeling company and still have the licence.',
                'treatments' => [
                    ['name' => 'Faucets and fixtures', 'description' => 'Repair and replacement of kitchen, bath and outdoor faucets, shower valves and tub spouts.'],
                    ['name' => 'Toilets', 'description' => 'Running, rocking, leaking or just old. Repairs and new installs, including comfort-height and dual-flush models.'],
                    ['name' => 'Gas lines', 'description' => 'New lines for ranges, dryers, barbecues and fire pits, plus leak testing and repair.'],
                    ['name' => 'Kitchen plumbing installation', 'description' => 'Sinks, disposals, dishwashers, pot fillers and ice-maker lines for new kitchens and remodels.'],
                    ['name' => 'Bathroom plumbing', 'description' => 'Rough-in and finish plumbing for remodels, including moving drains and supplies.'],
                    ['name' => 'Pressure regulators and shut-offs', 'description' => 'High pressure wrecks fixtures. We test it and install or replace the regulator at the main.'],
                    ['name' => 'Hot water circulator pumps', 'description' => 'Recirculation pumps that put hot water at the far tap in seconds instead of minutes.'],
                    ['name' => 'Whole-home plumbing inspection', 'description' => 'A top-to-bottom check of the water heater, pressure, valves, drains and visible lines, with a written report. Smart once a year and before you buy a home.'],
                    ['name' => 'Hose bibs and outdoor plumbing', 'description' => 'Leaking spigots, irrigation tie-ins and backflow devices.'],
                ],
                'faqs' => [
                    ['q' => 'What does the $49 cover?', 'a' => 'A licensed plumber at your door, the diagnosis and a written flat-rate price with no hidden fees, travel time or fuel surcharges. Go ahead with the repair and the $49 is credited toward it.'],
                    ['q' => 'How will I know when my technician is on the way?', 'a' => 'We call before we leave, then text you a photo of your technician and a GPS link to the truck so you know exactly who is coming and when.'],
                    ['q' => 'Can you fix it on the first visit?', 'a' => 'Usually. Our trucks carry enough parts to finish about 93% of repairs on the spot.'],
                    ['q' => 'Do you charge more on weekends?', 'a' => 'The diagnostic fee is the same day or night. Emergency work is priced up front like everything else.'],
                ],
                'featured' => true,
            ],
            [
                'name' => 'Emergency Plumbing', 'slug' => 'emergency', 'icon' => 'alert', 'image' => 'images/site/toilet-inspect.jpg',
                'tagline' => 'Answered 24/7. On the way fast.',
                'intro' => 'Burst pipes, flooding, sewage backing up, no hot water in a house full of people. We answer the phone around the clock, tell you what to shut off, and get a truck moving.',
                'body' => 'Call first. A real person answers, walks you through shutting off the water or gas, and dispatches the nearest truck. During dispatch hours we are usually there within the hour.',
                'treatments' => [
                    ['name' => 'Burst or leaking pipes', 'description' => 'Shut off the main, then call. We stop the leak and make the permanent repair the same visit.'],
                    ['name' => 'Flooding and water damage', 'description' => 'We stop the source and can bring in a restoration partner for drying and clean-up.'],
                    ['name' => 'Sewage backups', 'description' => 'Main line blockages cleared and the cause found on camera.'],
                    ['name' => 'No hot water', 'description' => 'Most heaters repaired same day; replacements carried on the truck.'],
                    ['name' => 'Gas leaks', 'description' => 'Leave the house and call SoCalGas first. We repair and pressure test the line once it is safe.'],
                    ['name' => 'Overflowing toilets', 'description' => 'Cleared and checked for the deeper blockage that usually causes them.'],
                    ['name' => 'Slab leaks', 'description' => 'Located electronically and isolated the same day so you can keep the water on.'],
                    ['name' => 'Failed water main', 'description' => 'Repair or replacement of the line from the meter to the house.'],
                    ['name' => 'Water heater leaking', 'description' => 'Turn off the gas and the cold supply, then call. We replace it today.'],
                ],
                'faqs' => [
                    ['q' => 'Do you really answer at 3 AM?', 'a' => 'Yes. Emergencies are taken by phone 24 hours a day. A truck is dispatched for anything that cannot safely wait until the morning.'],
                ],
                'featured' => false,
            ],
        ];
        foreach ($services as $i => $s) {
            Service::updateOrCreate(['slug' => $s['slug']], $s + ['sort' => $i + 1, 'active' => true]);
        }
    }

    private function appointmentTypes(): void
    {
        $anthony = TeamMember::where('slug', 'anthony-cumpiam')->first();
        $types = [
            ['name' => 'Plumbing Repair Visit', 'description' => '$49 diagnostic, credited toward the repair. Faucets, toilets, valves, gas lines and more.', 'duration_minutes' => 60],
            ['name' => 'Drain Clearing', 'description' => '$93 for any single clogged drain, or it is free. Free camera inspection included.', 'duration_minutes' => 60],
            ['name' => 'Water Heater Service', 'description' => 'No hot water, leaks or noise. Repair, same-day replacement, or the $89 tune-up.', 'duration_minutes' => 90],
            ['name' => 'Free Repipe Estimate', 'description' => 'A walk-through and a fixed written price for a whole-house repipe. No obligation.', 'duration_minutes' => 60, 'is_free' => true, 'team_member_id' => $anthony?->id],
            ['name' => 'Free Water Heater Estimate', 'description' => 'Tank versus tankless, priced side by side.', 'duration_minutes' => 45, 'is_free' => true],
            ['name' => 'Leak Detection', 'description' => 'Electronic detection for slab leaks, high water bills and mystery damp spots.', 'duration_minutes' => 60],
            ['name' => 'Whole-Home Plumbing Inspection', 'description' => 'A full check with a written report. Smart once a year or before buying a home.', 'duration_minutes' => 90],
            ['name' => 'Free Virtual Estimate', 'description' => 'Show us the problem on a video call and get a ballpark before anyone drives out.', 'duration_minutes' => 20, 'is_free' => true, 'is_virtual' => true],
            ['name' => 'Emergency Visit', 'description' => 'Burst pipe, flooding, sewage or no hot water. Call us as well so we can dispatch sooner.', 'duration_minutes' => 60],
        ];
        foreach ($types as $i => $t) {
            AppointmentType::updateOrCreate(['slug' => Str::slug($t['name'])], $t + ['sort' => $i + 1, 'active' => true, 'is_free' => false, 'is_virtual' => false, 'team_member_id' => null]);
        }
    }

    private function testimonials(): void
    {
        $t = [
            ['name' => 'Maria G.', 'treatment' => 'Whole-house repipe', 'featured' => true, 'quote' => 'Our 1968 Tustin house had its third pinhole leak in a year. They repiped the whole place in two days, the walls were patched so well I cannot find the spots, and the water pressure is like a new house.'],
            ['name' => 'David R.', 'treatment' => 'Tankless water heater', 'featured' => true, 'quote' => 'I expected a hard sell on tankless. Instead the tech priced a plain tank next to it and said either was fine. We went tankless anyway and the install was spotless. No commission really does change the conversation.'],
            ['name' => 'Jennifer L.', 'treatment' => 'Drain cleaning', 'featured' => true, 'quote' => 'Kitchen sink backed up the night before Thanksgiving. They were here in forty minutes, cleared it, ran a camera for free and showed me the grease build-up on the screen. Honest, fast and funny.'],
            ['name' => 'Tom and Linda K.', 'treatment' => 'Slab leak repair', 'featured' => true, 'quote' => 'A $400 water bill told us something was wrong. They found the slab leak with a listening device, opened one tile instead of a trench, and the price on the invoice was the price on the estimate.'],
            ['name' => 'Priya S.', 'treatment' => 'Trenchless sewer replacement', 'quote' => 'We specifically asked them not to tear up the lawn and they did not. Two small holes, one day, and roots are no longer our problem.'],
            ['name' => 'Carlos M.', 'treatment' => 'Emergency plumbing', 'quote' => 'Burst pipe at 10 PM on a Sunday. A real person answered, told me where the main shut-off was, and a truck was in my driveway inside the hour.'],
            ['name' => 'Angela W.', 'treatment' => 'Whole-house repipe', 'quote' => 'From the free estimate to the final walk-through, everyone was on time, in uniform and wearing shoe covers. The texted arrival updates were a nice touch.'],
            ['name' => 'Ben H.', 'treatment' => 'Water filtration', 'quote' => 'They tested our water first and recommended a conditioner instead of the pricier softener we had asked about. Who talks you down a price? These guys.'],
            ['name' => 'Rosa D.', 'treatment' => 'Whole-house repipe', 'quote' => 'The crew explained every step to my elderly mother and left the house cleaner than they found it. The lifetime warranty was the deciding factor for us.'],
            ['name' => 'Kevin T.', 'treatment' => 'Water heater repair', 'quote' => 'Diagnosed a bad gas valve, had the part on the truck, hot water back in an hour. The $49 came off the bill like they said it would.'],
        ];
        foreach ($t as $i => $row) {
            Testimonial::updateOrCreate(['name' => $row['name']], $row + ['sort' => $i + 1, 'rating' => 5, 'source' => 'Google', 'featured' => false, 'active' => true]);
        }
    }

    private function posts(): void
    {
        $full = [
            ['title' => 'Five Signs Your House Needs a Repipe', 'category' => 'Repipes', 'cover_image' => 'images/services/repipes.jpg', 'featured' => true, 'days' => 3,
                'excerpt' => 'Pinhole leaks are not bad luck. They are the plumbing telling you it is done. Here is how to read the signs before the ceiling does.',
                'body' => '<h2>1. Leaks that keep moving</h2><p>One pinhole leak is a repair. A second one, in a different place, six months later, is a pattern. Copper installed before the mid-1980s and galvanized steel from any era corrode from the inside out, and once the wall thins in one spot it is thinning everywhere.</p><h2>2. Brown or rusty water first thing in the morning</h2><p>Water that sits overnight in galvanized pipe picks up iron. If the first glass from the tap runs brown and then clears, the inside of your pipes is rusting.</p><h2>3. Low pressure that gets worse</h2><p>Mineral scale narrows old pipe the way plaque narrows an artery. If the shower was better five years ago, the pipe is smaller than it was.</p><h2>4. Hot water takes forever</h2><p>Scaled lines starve the fixtures furthest from the heater. A tankless upgrade will not fix a supply problem.</p><h2>5. The repair bills are adding up</h2><p>Two leak repairs in a year, each with drywall and paint, is the price of a repipe paid in instalments, without the warranty.</p><h2>What a repipe actually involves</h2><p>Every hot and cold supply line in the house is replaced with new PEX or copper, with new shut-off valves at each fixture. Most homes take one to two days with the water back on each evening. The work is permitted, pressure tested and inspected before the walls are patched and textured. Ours carries a lifetime warranty. The estimate is free, so if any of the five sound familiar, book one.</p>'],
            ['title' => 'Tank or Tankless? An Honest Comparison for Orange County Homes', 'category' => 'Water heaters', 'cover_image' => 'images/blog/tankless.jpg', 'featured' => true, 'days' => 10,
                'excerpt' => 'Tankless is not always the answer, and a tank is not always the cheap option. What we tell customers at the kitchen table.',
                'body' => '<h2>How long will each last?</h2><p>In our hard water a tank heater lasts eight to twelve years. A tankless unit that is flushed annually lasts twenty or more. That alone changes the math over the life of the house.</p><h2>Up-front cost</h2><p>A tank replacement is the cheaper day-one number. A tankless install costs more because the gas line usually needs upsizing and new venting has to be run. We price both side by side so you can see the real difference, not a brochure figure.</p><h2>Running cost</h2><p>A tank keeps forty gallons hot all day whether you use it or not. Tankless heats only what you draw, which typically trims gas use by a quarter or more.</p><h2>Hot water that never runs out</h2><p>The thing people notice first: the third shower is as hot as the first. For big families this is the reason to switch.</p><h2>When a tank is the right call</h2><p>Small household, short showers, tight budget, or a garage with no easy venting route. A good tank with a drip pan, expansion tank and proper strapping is a perfectly sound choice, and we will say so.</p><h2>Either way: flush it</h2><p>Sediment is what kills heaters here. An annual flush is the best money you will spend on either type.</p>'],
            ['title' => 'Why Did My Water Bill Suddenly Jump? It Might Be Under the Slab', 'category' => 'Tips', 'cover_image' => 'images/services/leak-detection.jpg', 'featured' => true, 'days' => 17,
                'excerpt' => 'A water bill that doubles with no change in habits is the most common way Orange County homeowners discover a slab leak.',
                'body' => '<h2>The thirty-second test</h2><p>Turn off every tap and appliance in the house. Go to the water meter at the street and watch the small dial or triangle. If it moves, water is leaving the pipes somewhere, and under the slab is the most likely place.</p><h2>Other signs</h2><p>A warm spot on the floor (the hot line is leaking). Damp carpet or swollen baseboards with no obvious source. The sound of running water when nothing is on. Cracks appearing in tile or the slab itself.</p><h2>What causes slab leaks</h2><p>Most homes built here from the 1950s to the 1980s have copper water lines running under the concrete foundation. Soil movement, hard water and the pipe rubbing against the concrete wear through it over decades.</p><h2>How we find it without digging up the house</h2><p>Acoustic listening equipment, thermal imaging and pressure isolation pinpoint the leak to within a foot or two. We open one spot, not three.</p><h2>Repair, reroute or repipe?</h2><p>A single bad section can be repaired through the slab. If the line is badly corroded we reroute it overhead and abandon the under-slab run. If the rest of the system is in the same condition, a repipe is the honest recommendation, and we will show you why on the pipe we pull out.</p>'],
            ['title' => 'What To Do in the First Five Minutes of a Burst Pipe', 'category' => 'Tips', 'cover_image' => 'images/site/pipe-cap.jpg', 'days' => 24,
                'excerpt' => 'Water does more damage in five minutes than most repairs cost. Know where your main shut-off is before you need it.',
                'body' => '<h2>1. Shut off the main</h2><p>The main valve is usually at the front of the house near a hose bib, in the garage, or at the meter box by the sidewalk. Turn it clockwise until it stops. If it is a lever, turn it so it sits across the pipe.</p><h2>2. Open the lowest tap</h2><p>Open a tap on the ground floor or outside to drain the pressure out of the system. The leak slows to a trickle.</p><h2>3. Kill the power if water is near outlets</h2><p>If water is pooling near electrical outlets or appliances, switch off the breaker for that area before you step in it.</p><h2>4. Turn off the water heater</h2><p>With the main off, a gas heater can overheat an empty tank. Turn its gas valve to OFF or flip the breaker on an electric unit.</p><h2>5. Call us</h2><p>We answer 24 hours a day and dispatch the nearest truck. Then move what you can, pull up rugs and start drying.</p><h2>Do this today</h2><p>Go find your main shut-off and make sure it turns. If it is stiff or corroded, replacing it is a small job that makes the next emergency a ten-second fix. We do it as part of every repipe and happily as a stand-alone visit.</p>'],
            ['title' => 'Hard Water in Orange County: What It Costs You and What To Do', 'category' => 'Tips', 'cover_image' => 'images/services/water-filtration.jpg', 'days' => 31,
                'excerpt' => 'Our water is safe to drink. It is also some of the hardest in the country, and your water heater knows it.',
                'body' => '<h2>How hard is it?</h2><p>Much of Orange County measures well over 15 grains per gallon, which the industry classes as very hard. That is the white crust on your shower door and the rumble in your water heater.</p><h2>What it costs</h2><p>Scale insulates heating elements so heaters work harder and die younger. It clogs aerators and shower heads, shortens the life of dishwashers and washing machines, and leaves spots on everything. Soap does not lather, so you use more of it.</p><h2>Softener or conditioner?</h2><p>A softener swaps the calcium and magnesium for sodium: the water feels silky, scale stops completely, and you add salt every month or two. A salt-free conditioner changes the minerals so they do not stick: no salt, no drain, no sodium, but a smaller difference you can feel. Both protect the house.</p><h2>Start with a test</h2><p>We test hardness, chlorine and dissolved solids at your tap for free and size a system to the house. If the numbers say you do not need one, that is what we will tell you.</p>'],
            ['title' => 'Do It Right Plumbers Partners with the Orange County Food Bank', 'category' => 'Community', 'cover_image' => 'images/site/technician.jpg', 'days' => 45,
                'excerpt' => 'Year-round donations, a food drive on every truck, and a simple idea: a company should be a good neighbor.',
                'body' => '<p>Do It Right Plumbers has partnered with the Orange County Food Bank to provide year-round support to families across the county. Every truck now carries a collection bin, and the company matches donations collected by its technicians each quarter.</p><h2>Why the food bank</h2><p>Our technicians are in hundreds of Orange County homes every month. They see who is doing fine and who is not. Supporting the food bank is the most direct way we found to help the neighbors we work for.</p><h2>How to take part</h2><p>Hand a bag of non-perishables to your technician on any visit, or drop it at our shop on Glassell Street. Everything goes to the Orange County Food Bank in Garden Grove.</p>'],
        ];
        foreach ($full as $i => $p) {
            $days = $p['days'];
            unset($p['days']);
            Post::updateOrCreate(['slug' => Str::slug($p['title'])], $p + ['published_at' => now()->subDays($days)]);
        }

        // Archive: titles and standfirsts so each page reads properly until the full article is pasted in Admin.
        $archive = [
            ['How Often Should You Flush a Water Heater?', 'Water heaters', 'Once a year in Orange County water. Here is how, and why it doubles the life of the tank.'],
            ['Why Your Toilet Keeps Running (and the $12 Fix)', 'Tips', 'Nine times out of ten it is the flapper. The tenth time it is the fill valve.'],
            ['Chemical Drain Cleaners: Why We Ask You Not To', 'Drains', 'They eat pipe as happily as they eat hair, and they make our job dangerous when you call us afterwards.'],
            ['PEX vs Copper: The Honest Version', 'Repipes', 'Both are great. Here is what each is better at and what we would put in our own house.'],
            ['Hydro Jetting Explained in Two Minutes', 'Drains', 'A snake pokes a hole. A jetter cleans the pipe. When each one is the right tool.'],
            ['What a Sewer Camera Inspection Shows (With Photos)', 'Drains', 'Roots, bellies, offsets and cast iron scale, and what each one means for your wallet.'],
            ['Buying a Home in Orange County? Get the Plumbing Inspected', 'Tips', 'The general inspector looks at the water heater. We look at everything else.'],
            ['Earthquake Strapping Your Water Heater Is the Law', 'Water heaters', 'Two straps, anchored to studs. Ten minutes that prevents a gas leak after a quake.'],
            ['Low Water Pressure? Check These Three Things First', 'Tips', 'The regulator, the aerators and the main shut-off, in that order.'],
            ['Garbage Disposal Do\'s and Don\'ts', 'Tips', 'Cold water, no grease, no coffee grounds, and the reset button you forgot about.'],
            ['Why We Don\'t Pay Our Plumbers Commission', 'Community', 'The one decision that shapes every conversation at your kitchen table.'],
            ['Gas Smell? Here Is the Order To Do Things In', 'Tips', 'Leave, call SoCalGas, then call us. Never the other way round.'],
        ];
        foreach ($archive as $i => [$title, $category, $excerpt]) {
            Post::firstOrCreate(['slug' => Str::slug($title)], ['title' => $title, 'category' => $category, 'excerpt' => $excerpt, 'body' => '<p>'.$excerpt.'</p><p>Want the full story? Book a visit or send us a message and a technician will walk you through it.</p>', 'published_at' => now()->subDays(60 + $i * 9)]);
        }
    }
}
