<x-site.layout>
@php($co = config('company'))
{{-- Hero: a tall section pins a full-viewport stage; scrolling sharpens the backdrop and orbits the camera around the pipes (resources/js/scroll-hero.js). --}}
<section class="hero" data-scroll-hero aria-label="Welcome">
    <div class="hero__stage">
        {{-- A 3D copper manifold (resources/js/pipe-orbit.js); the scroll position turns the camera around it. The photo behind is the fallback without WebGL. --}}
        <div class="hero__media" data-hero-media aria-hidden="true">
            <img src="{{ asset('images/services/repipes.jpg') }}" alt="" class="hero__fallback" data-hero-fallback fetchpriority="high">
            <canvas class="hero__orbit" data-pipe-orbit hidden></canvas>
        </div>
        <div class="hero__wash" data-hero-wash aria-hidden="true"></div>
        <div class="hero__grain" aria-hidden="true"></div>
        <div class="hero__content" data-hero-content>
            <div class="wrap">
                <p class="eyebrow text-cream/85">Orange County, California · Since {{ $co['founded'] }}</p>
                <h1 class="hero__title mt-6">Plumbing done<br><span>right, or it's free.</span></h1>
                <p class="lede mt-6 max-w-xl text-cream/85 sm:mt-7">Repipes, water heaters, drains, leaks and water filtration from friendly, licensed plumbers who are not paid on commission. Upfront pricing before any work starts, and a written guarantee on every job.</p>
                <div class="mt-10 flex flex-wrap items-center gap-3">
                    <a href="{{ route('book') }}" class="btn-teal btn-lg">Book an arrival window</a>
                    <a href="tel:{{ $co['phone_href'] }}" class="btn-lg btn bg-white/10 text-cream ring-1 ring-white/45 backdrop-blur hover:bg-white/25"><x-icon name="phone" class="size-4" />{{ $co['phone'] }}</a>
                </div>
                <div class="mt-10 hidden flex-wrap items-center gap-x-8 gap-y-4 text-sm text-cream/75 sm:flex">
                    <span class="inline-flex items-center gap-2"><span class="flex text-brass">@for ($i = 0; $i < 5; $i++)<x-icon name="star" class="size-4 fill-current" />@endfor</span><strong class="text-cream">{{ $co['stats']['rating'] }}</strong> on Google · {{ $co['stats']['reviews'] }} five-star reviews</span>
                    <span class="inline-flex items-center gap-2"><x-icon name="shield" class="size-4 text-teal" />Licensed, bonded & insured</span>
                    <span class="inline-flex items-center gap-2"><x-icon name="truck" class="size-4 text-teal" />{{ $co['stats']['trucks'] }} trucks across OC</span>
                </div>
            </div>
        </div>
        <div class="hero__hint" data-hero-hint-scroll aria-hidden="true"><span></span>scroll</div>
    </div>
</section>
{{-- Marquee --}}
<div class="border-y border-line bg-sand/60 py-4" aria-hidden="true">
    <div class="overflow-hidden"><div class="marquee text-sm font-semibold uppercase tracking-[0.2em] text-navy-soft">@for ($r = 0; $r < 2; $r++)@foreach (['Whole-house repipes', 'Tankless water heaters', 'Drain cleaning', 'Hydro jetting', 'Slab leak repair', 'Sewer camera inspection', 'Water filtration', 'Gas lines', 'Garbage disposals', 'Emergency plumbing'] as $w)<span class="inline-flex items-center gap-10">{{ $w }}<span class="text-teal">✦</span></span>@endforeach @endfor</div></div>
</div>
{{-- Offers --}}
<section class="wrap section-sm">
    <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between"><x-site.heading eyebrow="Current specials" title="Honest prices, posted up front." /><p class="text-sm text-stone">Mention this website when you book.</p></div>
    <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4" data-stagger>@foreach ($co['offers'] as $o)<x-site.offer :offer="$o" />@endforeach</div>
</section>

{{-- Services --}}
<section class="section">
    <div class="wrap">
        <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
            <x-site.heading eyebrow="What we do" title="Every pipe in the house,<br>one number to call." />
            <a href="{{ route('services') }}" class="link-arrow">All services <x-icon name="arrow" /></a>
        </div>
        <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3" data-stagger>@foreach ($services as $s)<x-site.service-card :service="$s" />@endforeach</div>
    </div>
</section>

{{-- Promises --}}
<section class="section bg-white">
    <div class="wrap grid gap-14 lg:grid-cols-12 lg:items-center">
        <div class="lg:col-span-5">
            <div class="frame aspect-[4/5] shadow-soft"><img src="{{ asset('images/site/technician.jpg') }}" alt="A smiling technician in uniform" class="h-full w-full object-cover" loading="lazy" data-parallax></div>
        </div>
        <div class="lg:col-span-7">
            <x-site.heading eyebrow="The Do It Right difference" title="{{ $co['guarantee']['title'] }}" :lede="$co['guarantee']['text']" />
            <dl class="mt-12 grid gap-8 sm:grid-cols-2" data-stagger>
                @foreach ($co['promises'] as $p)
                    <div><dt><span class="inline-flex size-11 items-center justify-center rounded-2xl bg-teal-soft text-teal-deep"><x-icon :name="$p['icon']" class="size-5" /></span><span class="mt-4 block font-display text-2xl font-semibold">{{ $p['title'] }}</span></dt><dd class="mt-2 text-sm leading-relaxed text-stone">{{ $p['text'] }}</dd></div>
                @endforeach
            </dl>
            <div class="mt-10 grid grid-cols-3 gap-4 border-t border-line pt-8">
                @foreach ([[$co['stats']['years'], 'years in business'], [$co['stats']['reviews'], 'five-star reviews'], [$co['stats']['trucks'], 'trucks on the road']] as [$n, $l])
                    <div><p class="font-display text-4xl font-bold text-navy sm:text-5xl" data-count>{{ $n }}</p><p class="mt-1 text-xs font-semibold uppercase tracking-wider text-stone">{{ $l }}</p></div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Repipe feature --}}
<section class="section bg-navy text-cream pipes-bg-light">
    <div class="wrap grid gap-12 lg:grid-cols-12 lg:items-center">
        <div class="lg:col-span-6">
            <x-site.heading light eyebrow="Whole-house repipes · Lifetime warranty" title="New pipes, old walls. <em>You'd never know we were there.</em>" lede="Pinhole leaks, rusty water and low pressure mean your galvanized or old copper lines are failing. We replace every supply line in the house, usually in a day or two, patch and texture the walls, and warranty the work for life." />
            <ul class="mt-8 space-y-3 text-sm text-cream/80">
                @foreach (['Free in-home estimate with a written, fixed price', 'PEX or copper, your choice, with city permits and inspection handled', 'Most homes repiped in one to two days with water back on each night', 'Drywall patched and textured so you only see the difference at the tap'] as $li)<li class="flex items-start gap-3"><x-icon name="check" class="mt-0.5 size-5 shrink-0 text-teal" />{{ $li }}</li>@endforeach
            </ul>
            <div class="mt-9 flex flex-wrap gap-3"><a href="{{ route('book', ['type' => 'free-repipe-estimate']) }}" class="btn-teal btn-lg">Book a free estimate</a><a href="{{ route('repipes') }}" class="btn-lg btn bg-white/10 text-cream ring-1 ring-white/20 hover:bg-white hover:text-navy">How a repipe works</a></div>
        </div>
        <div class="lg:col-span-6">
            <div class="grid grid-cols-2 gap-4">
                <div class="frame aspect-[3/4] mt-10"><img src="{{ asset('images/services/repipes.jpg') }}" alt="Soldering a copper pipe joint" class="h-full w-full object-cover" loading="lazy"></div>
                <div class="frame aspect-[3/4] bg-white"><img src="{{ asset('images/site/faucet.jpg') }}" alt="A clean chrome faucet" class="h-full w-full object-cover" loading="lazy"></div>
            </div>
        </div>
    </div>
</section>

{{-- How it works --}}
<section class="section">
    <div class="wrap">
        <x-site.heading center eyebrow="How a visit works" title="No surprises. That's the whole point." />
        <ol class="mt-12 grid gap-5 md:grid-cols-4" data-stagger>
            @foreach ([['calendar', 'Pick a window', 'Book online or call. Choose a two-hour arrival window that suits you, today if we have a truck free.'], ['truck', 'We text on the way', 'We call before we leave, then text a photo of your technician and a GPS link to the truck, so you are never stuck waiting at home.'], ['tag', 'Approve the price', 'We diagnose, explain the options and give you a written price. Nothing starts until you say go.'], ['shield', 'Done right', 'We fix it, clean up and walk you through the work. Not fixed right? You do not pay.']] as $i => [$icon, $h, $t])
                <li class="card"><div class="flex items-center justify-between"><span class="inline-flex size-11 items-center justify-center rounded-2xl bg-teal-soft text-teal-deep"><x-icon :name="$icon" class="size-5" /></span><span class="font-display text-3xl font-bold text-line">0{{ $i + 1 }}</span></div><h3 class="mt-5 font-display text-2xl font-semibold">{{ $h }}</h3><p class="mt-2 text-sm leading-relaxed text-stone">{{ $t }}</p></li>
            @endforeach
        </ol>
    </div>
</section>

{{-- Membership --}}
<section class="wrap">
    <div class="grid gap-8 band bg-navy text-cream pipes-bg-light lg:grid-cols-12 lg:items-center">
        <div class="lg:col-span-5"><x-site.heading light eyebrow="Do It Right membership" title="Prevent, maintain and save." lede="An annual 58-point safety check, a free sewer camera inspection, free water heater maintenance and three extra years of labor warranty, for {{ $co['membership']['monthly'] }} a month." /><a href="{{ route('membership') }}" class="btn-teal btn-lg mt-8">See everything included</a></div>
        <ul class="grid gap-3 sm:grid-cols-2 lg:col-span-7" data-stagger>@foreach (array_slice($co['membership']['perks'], 0, 6) as $p)<li class="flex items-start gap-3 rounded-2xl bg-white/5 p-4 ring-1 ring-white/10"><span class="inline-flex size-9 shrink-0 items-center justify-center rounded-xl bg-teal/15 text-teal"><x-icon :name="$p['icon']" class="size-4.5" /></span><span><span class="block text-sm font-semibold">{{ $p['title'] }}</span><span class="block text-xs text-teal">{{ $p['value'] }}</span></span></li>@endforeach</ul>
    </div>
</section>

{{-- Reviews --}}
<section class="section bg-sand/60">
    <div class="wrap">
        <x-site.heading center eyebrow="{{ $co['stats']['rating'] }}★ on Google" title="Neighbors who called us. Here is what they said." lede="&ldquo;Professional technicians, never pushy salespeople.&rdquo; Real words from real Orange County homeowners, published as they were written." />
        <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-4" data-stagger>@foreach ($testimonials as $t)<x-site.testimonial :t="$t" compact />@endforeach</div>
        <div class="mt-10 flex flex-wrap justify-center gap-3"><a href="{{ route('reviews') }}" class="btn-navy">Read more reviews</a><a href="{{ $co['review_url'] }}" target="_blank" rel="noopener" class="btn-light"><x-icon name="star" class="size-4 fill-current text-brass" />Leave a review</a></div>
    </div>
</section>

{{-- Emergency + hours --}}
<section class="section">
    <div class="wrap grid gap-6 lg:grid-cols-12">
        <div class="band bg-rust text-white lg:col-span-7">
            <p class="eyebrow text-white/90">Plumbing emergency?</p>
            <h2 class="h-section mt-3 text-white">Burst pipe, flooding, no hot water, sewage backing up. Call now.</h2>
            <p class="mt-4 max-w-xl text-white/90">First, shut off the main water valve if you can find it. Then call us. We answer around the clock and tell you exactly what to do while a truck is on the way.</p>
            <div class="mt-7 flex flex-wrap gap-3"><a href="tel:{{ $co['phone_href'] }}" class="btn bg-white text-rust hover:bg-cream btn-lg"><x-icon name="phone" class="size-4" />{{ $co['phone'] }}</a><a href="{{ route('emergency') }}" class="btn ring-1 ring-white/40 text-white hover:bg-white/10 btn-lg">What to do right now</a></div>
        </div>
        <div class="card lg:col-span-5">
            <p class="eyebrow">Dispatch hours</p>
            <dl class="mt-5 divide-y divide-line text-sm">@foreach ($hours as $day => $h)<div class="flex justify-between py-2.5"><dt class="font-semibold">{{ $day }}</dt><dd class="{{ $h === 'Closed' ? 'text-stone' : '' }}">{{ $h }}</dd></div>@endforeach</dl>
            <p class="mt-4 text-xs text-stone">Closed days are for scheduled work only. Emergencies are taken by phone 24/7.</p>
            <p class="mt-5 flex items-start gap-2 text-sm text-stone"><x-icon name="map" class="mt-0.5 size-4 shrink-0 text-teal-deep" />{{ $co['address']['line1'] }}, {{ $co['address']['line2'] }}</p>
            <a href="{{ $co['map_url'] }}" target="_blank" rel="noopener" class="link-arrow mt-3">Directions <x-icon name="arrow" /></a>
        </div>
    </div>
</section>

{{-- Service areas --}}
<section class="wrap section-tail">
    <div class="band bg-white ring-1 ring-line">
        <div class="grid gap-8 lg:grid-cols-12 lg:items-center">
            <div class="lg:col-span-5"><x-site.heading eyebrow="Service areas" title="All of Orange County, from our shop in Orange." lede="Our trucks are based on Glassell Street, minutes from the 55, 57 and 91 freeways, so most of the county is under half an hour away." /><a href="{{ route('areas') }}" class="link-arrow mt-6">Every city we serve <x-icon name="arrow" /></a></div>
            <div class="flex flex-wrap gap-2 lg:col-span-7">@foreach (array_keys($co['areas']) as $c)<a href="{{ route('areas.show', \Illuminate\Support\Str::slug($c)) }}" class="chip bg-sand text-navy-soft ring-1 ring-line hover:bg-teal-soft hover:text-teal-deep"><x-icon name="map" class="size-3.5" />{{ $c }}</a>@endforeach</div>
        </div>
    </div>
</section>

{{-- Tips --}}
@if ($posts->isNotEmpty())
<section class="section bg-white">
    <div class="wrap">
        <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between"><x-site.heading eyebrow="Plumbing tips" title="Straight talk from the truck." /><a href="{{ route('blog') }}" class="link-arrow">All tips <x-icon name="arrow" /></a></div>
        <div class="mt-12 grid gap-5 md:grid-cols-3" data-stagger>
            @foreach ($posts as $p)
                <a href="{{ route('blog.show', $p) }}" class="group"><div class="frame aspect-[16/10] bg-sand"><img src="{{ $p->coverUrl() }}" alt="" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy"></div><p class="mt-4 text-xs font-semibold uppercase tracking-wider text-teal-deep">{{ $p->category }} · {{ $p->readingMinutes() }} min read</p><h3 class="mt-2 font-display text-2xl font-semibold leading-tight group-hover:text-teal-deep">{{ $p->title }}</h3><p class="mt-2 text-sm text-stone">{{ $p->excerpt }}</p></a>
            @endforeach
        </div>
    </div>
</section>
@endif

<x-site.cta />
</x-site.layout>
