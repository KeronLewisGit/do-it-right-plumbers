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
    'email' => env('COMPANY_EMAIL', 'service@doitrightplumbers.com'),
    'address' => ['line1' => '2284 N Glassell St, Suite G', 'line2' => 'Orange, CA 92865', 'country' => 'United States'],
    'map_url' => 'https://www.google.com/maps/search/?api=1&query=Do+It+Right+Plumbers+2284+N+Glassell+St+Orange+CA+92865',
    'review_url' => 'https://www.google.com/search?q=do+it+right+plumbers+orange+county+reviews',
    'license' => env('COMPANY_LICENSE'), // e.g. "CA Lic. #1234567"; shown in the footer when set
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
        'notify' => env('COMPANY_NOTIFY_EMAIL', 'service@doitrightplumbers.com'),
    ],
    'stats' => ['years' => '12+', 'reviews' => '2,000+', 'rating' => '4.8', 'trucks' => '20+', 'founded' => '2014'],
    'guarantee' => ['title' => 'Done 100% right, or it\'s 100% free.', 'text' => 'If we do not fix it right, you do not pay. Upfront pricing before any work starts, and plumbers who are not paid on commission, so nobody is selling you anything you do not need.'],
    'promises' => [
        ['icon' => 'tag', 'title' => 'Upfront pricing', 'text' => 'You approve the price before we start. You never pay more than you were quoted.'],
        ['icon' => 'handshake', 'title' => 'No commission, no pressure', 'text' => 'Our plumbers are paid to fix things, not to sell things. You get honest options, every time.'],
        ['icon' => 'shield', 'title' => 'Licensed & insured', 'text' => 'Background-checked, uniformed technicians and a company that stands behind every job in writing.'],
        ['icon' => 'clock', 'title' => 'Same-day service', 'text' => 'Dispatch windows seven days a week for emergencies, with arrival as fast as 60 minutes.'],
    ],
    'offers' => [
        ['title' => '$49 drain clearing', 'text' => 'Dispatch fee for any single clogged drain, credited toward the work.', 'badge' => 'Most popular'],
        ['title' => '$49 plumbing diagnostic', 'text' => 'A licensed plumber comes out, finds the problem and gives you a written price.'],
        ['title' => 'Free repipe & water heater estimates', 'text' => 'No fee, no pressure, and a lifetime warranty on every whole-house repipe.'],
        ['title' => '$75 off any repair', 'text' => 'Mention this website when you book. One per household.'],
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
    ],
    'interests' => ['Repipe', 'Water heater', 'Drain or sewer', 'Leak', 'Water filtration', 'General repair', 'Emergency', 'Something else'],
];
