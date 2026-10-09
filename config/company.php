<?php

// Company details. Anything here can be overridden from Admin → Settings (stored in the settings table).
return [
    'name' => 'Do It Right Plumbers',
    'short' => 'Do It Right',
    'legal' => 'Do It Right Plumbers Inc.',
    'tagline' => 'Done right, or it\'s free.',
    'strap' => 'Orange County\'s friendly plumbers since 2014',
    'founded' => 2014,
    'roots' => 2007,
    'phone' => env('COMPANY_PHONE', '(714) 485-8449'),
    'phone_href' => env('COMPANY_PHONE_HREF', '+17144858449'),
    'sms' => env('COMPANY_SMS', '+17144858449'),
    'email' => env('COMPANY_EMAIL', 'info@doitrightplumbers.com'),
    'address' => ['line1' => '2284 N Glassell St, Suite G', 'line2' => 'Orange, CA 92865', 'country' => 'United States'],
    'map_url' => 'https://www.google.com/maps/search/?api=1&query=Do+It+Right+Plumbers+2284+N+Glassell+St+Orange+CA+92865',
    'review_url' => 'https://www.google.com/search?q=do+it+right+plumbers+orange+county+reviews',
    'license' => env('COMPANY_LICENSE', 'CA Lic. #995611'), // from the company website footer; shown in the site footer
    'social' => [
        'instagram' => 'https://www.instagram.com/doitrightplumbers/',
        'facebook' => 'https://www.facebook.com/doitrightplumbers/',
        'tiktok' => 'https://www.tiktok.com/@doitrightplumbers',
        'youtube' => 'https://www.youtube.com/@doitrightplumbers',
        'linkedin' => 'https://www.linkedin.com/company/do-it-right-plumbers',
    ],
    'handle' => '@doitrightplumbers',
    'instagram_followers' => '2,000+',
    // Dispatch hours: null = closed. Times are 24h, local (America/Los_Angeles). Emergencies are taken by phone outside these hours.
    'hours' => [
        'mon' => ['07:00', '19:00'], 'tue' => ['07:00', '19:00'], 'wed' => ['07:00', '19:00'], 'thu' => ['07:00', '19:00'], 'fri' => ['07:00', '19:00'],
        'sat' => null, 'sun' => null,
    ],
    'booking' => [
        'slot_minutes' => 60,          // granularity of the arrival-window picker
        'crews' => 4,                  // trucks that can be dispatched in the same window
        'lead_hours' => 2,             // earliest a window can be booked ahead of now
        'horizon_days' => 30,          // how far ahead the calendar opens
        'notify' => env('COMPANY_NOTIFY_EMAIL', 'info@doitrightplumbers.com'),
    ],
    'stats' => ['years' => '12+', 'reviews' => '2,000+', 'rating' => '4.8', 'trucks' => '20+', 'founded' => '2014'],
    'guarantee' => ['title' => 'Done 100% right, or it\'s 100% free.', 'text' => 'If we do not fix it right, you do not pay. Upfront pricing before any work starts, and plumbers who are not paid on commission, so nobody is selling you anything you do not need.'],
    'promises' => [
        ['icon' => 'tag', 'title' => 'Upfront pricing', 'text' => 'You approve the price before we start. You never pay more than you were quoted.'],
        ['icon' => 'handshake', 'title' => 'No commission, no pressure', 'text' => 'Our plumbers are paid to fix things, not to sell things. You get honest options, every time.'],
        ['icon' => 'shield', 'title' => 'Licensed & insured', 'text' => 'Background-checked, uniformed technicians and a company that stands behind every job in writing.'],
        ['icon' => 'clock', 'title' => 'Same-day service', 'text' => 'Dispatch windows seven days a week for emergencies, with arrival as fast as 60 minutes.'],
    ],
    // Current coupons, as published on the company website. Prices here are the ones customers see.
    'offers' => [
        ['title' => '$93 drain clearing, or it\'s free', 'text' => 'Any single clogged drain cleared for $93. If we cannot clear it, you do not pay.', 'badge' => 'Most popular'],
        ['title' => '$36 off any plumbing repair', 'text' => 'Mention this website when you book. One per household, not combined with other offers.'],
        ['title' => '$89 water heater tune-up', 'text' => 'A full flush, a safety check and an honest read on how many years the heater has left.'],
        ['title' => 'Free repipe & water heater estimates', 'text' => 'No fee, no pressure, and a lifetime warranty on every whole-house repipe.'],
    ],
    'diagnostic_fee' => '$49', // applied to the job once the estimate is approved
    // The Do It Right membership (maintenance plan), as published on the company website.
    'membership' => [
        'monthly' => '$19.99', 'annual' => '$299', 'hotline' => '714-880-8555', 'hotline_href' => '+17148808555',
        'perks' => [
            ['icon' => 'shield', 'title' => 'Annual whole-home plumbing safety check', 'value' => 'A $299 value, free', 'text' => 'A comprehensive 58-point inspection of the water heater, pressure, valves, drains and every visible line, once a year.'],
            ['icon' => 'camera', 'title' => 'Free sewer camera inspection', 'value' => 'A $462 value', 'text' => 'A high-tech camera down the main sewer, kitchen and laundry lines so a clog never becomes a flood.'],
            ['icon' => 'heater', 'title' => 'Free annual water heater maintenance', 'value' => 'A $249 value', 'text' => 'A free tank flush, or 50% off a tankless flush, to prevent breakdowns and stretch the heater\'s life.'],
            ['icon' => 'check', 'title' => 'Worry-free coverage', 'value' => '3 extra years', 'text' => 'Three extra years of labor warranty on every replacement we install.'],
            ['icon' => 'tag', 'title' => 'Member-only savings', 'value' => 'Year-round', 'text' => 'Exclusive discounts on a wide range of plumbing services, plus seasonal member-only specials.'],
            ['icon' => 'sparkle', 'title' => 'Redeemable points', 'value' => '$10 off per 100 points', 'text' => 'Up to $250 off a job, with bonus points for 5, 7 and 10-year members.'],
            ['icon' => 'phone', 'title' => 'VIP hotline and priority scheduling', 'value' => 'Members only', 'text' => 'A members-only number that goes to the front of the dispatch queue.'],
        ],
        'terms' => 'Membership benefits apply to homeowners with an active membership. The camera inspection requires an accessible cleanout. Premium services such as the water heater flush require 12 months of active membership. Points cannot be combined with other coupons or offers. Annual memberships switch to monthly on expiry.',
    ],
    'areas' => [
        'Orange' => 'Our home base. Same-day service across the city.',
        'Santa Ana' => 'Where the company started in 2014.',
        'Tustin' => 'Older homes here often need repipes and slab leak repair.',
        'Anaheim' => 'Fast dispatch from our Glassell Street shop.',
        'Irvine' => 'Tankless upgrades and water filtration for newer homes.',
        'Fullerton' => 'Cast iron drains and root intrusion are common in older neighborhoods.',
        'Huntington Beach' => 'Salt air is tough on water heaters. We service them all.',
        'Costa Mesa' => 'Drain cleaning, hydro jetting and sewer camera inspections.',
        'Garden Grove' => 'Repipes, water heaters and emergency repairs.',
        'Westminster' => 'Leak detection and slab leak specialists.',
        'Newport Beach' => 'Whole-home inspections and filtration systems.',
        'Yorba Linda' => 'Hard water solutions and water heater replacement.',
        'Placentia' => 'Repipes and drain service.',
        'Brea' => 'Water heaters, leaks and drains.',
        'Lake Forest' => 'Tankless water heaters and softeners.',
        'Mission Viejo' => 'Slab leaks and whole-house repipes.',
        'Aliso Viejo' => 'Water heaters, drains and leak detection.',
        'Buena Park' => 'Repipes and sewer line repair for older homes.',
        'Cypress' => 'Drain clearing, hydro jetting and water heaters.',
        'Dana Point' => 'Salt air and hard water: water heaters and filtration.',
        'Fountain Valley' => 'Slab leaks, repipes and drain service.',
        'La Habra' => 'Galvanized pipe replacement and sewer repair.',
        'La Palma' => 'Water heaters and everyday repairs.',
        'Laguna Beach' => 'Hillside homes: leak detection and water line repair.',
        'Laguna Hills' => 'Repipes, water heaters and softeners.',
        'Laguna Niguel' => 'Tankless upgrades and whole-home inspections.',
        'Laguna Woods' => 'Fast, respectful service for the Village and nearby.',
        'Los Alamitos' => 'Drains, disposals and water heaters.',
        'Rancho Santa Margarita' => 'Water filtration and water heater replacement.',
        'San Clemente' => 'Repipes and leak detection near the coast.',
        'San Juan Capistrano' => 'Sewer camera inspections and trenchless repair.',
        'Seal Beach' => 'Water heaters and drain cleaning.',
        'Stanton' => 'Minutes from our shop. Same-day repairs.',
        'Villa Park' => 'Our neighbors. Whole-home inspections and repipes.',
        'Long Beach' => 'LA County, covered from Orange. Repipes and water heaters.',
        'Whittier' => 'LA County, covered from Orange. Drains and leak repair.',
    ],
    'interests' => ['Repipe', 'Water heater', 'Drain or sewer', 'Leak', 'Water filtration', 'General repair', 'Emergency', 'Something else'],
];
