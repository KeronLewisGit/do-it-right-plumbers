<x-site.layout title="Whole-House Repipes" description="Whole-house repipe specialists in Orange County. PEX or copper, permits handled, walls patched, most homes done in one to two days, with a lifetime warranty. Free estimates from Do It Right Plumbers.">
@php($co = config('company'))
<x-site.page-hero eyebrow="Whole-house repipes · Lifetime warranty" title="New pipes for the next <em>fifty years</em>." lede="Orange County homes built before the 1990s are reaching the end of their original galvanized and thin-wall copper plumbing. Pinhole leaks, brown water and weak showers are the warning signs. A repipe replaces every supply line in the house, once, properly.">
    <div class="mt-9 flex flex-wrap gap-3"><a href="{{ route('book', ['type' => 'free-repipe-estimate']) }}" class="btn-teal btn-lg">Book a free estimate</a><a href="#how" class="btn-ghost btn-lg">How it works</a></div>
    <div class="mt-10 grid grid-cols-3 gap-4 border-t border-line pt-8" data-stagger>@foreach ([['1–2', 'days for most homes'], ['Lifetime', 'warranty, in writing'], ['$0', 'estimate fee']] as [$n, $l])<div><p class="font-display text-3xl font-bold text-navy">{{ $n }}</p><p class="mt-1 text-xs font-semibold uppercase tracking-wider text-stone">{{ $l }}</p></div>@endforeach</div>
    <x-slot:aside><div class="frame aspect-[4/5] shadow-soft"><img src="{{ asset('images/services/repipes.jpg') }}" alt="A plumber soldering a copper joint" class="h-full w-full object-cover" data-parallax></div></x-slot:aside>
</x-site.page-hero>

<section class="section">
    <div class="wrap">
        <x-site.heading center eyebrow="Do you need a repipe?" title="Five signs your pipes are telling you something." lede="One of these is worth a $49 diagnostic. Two or more usually means the plumbing is at the end of its life." />
        <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-5" data-stagger>
            @foreach ([['droplet', 'Pinhole leaks', 'Small wet spots on ceilings or walls that keep coming back in new places.'], ['alert', 'Rusty or brown water', 'Especially first thing in the morning. Galvanized steel corrodes from the inside.'], ['drain', 'Low water pressure', 'Mineral build-up narrows old pipes until a shower feels like a drizzle.'], ['heater', 'Hot water takes forever', 'Scaled-up lines starve the fixtures furthest from the heater.'], ['tag', 'Rising repair bills', 'If you have called a plumber for leaks twice in a year, you are paying for a repipe in pieces.']] as [$i, $h, $t])
                <div class="card"><span class="inline-flex size-10 items-center justify-center rounded-xl bg-teal-soft text-teal-deep"><x-icon :name="$i" class="size-5" /></span><h3 class="mt-4 font-display text-xl font-semibold">{{ $h }}</h3><p class="mt-2 text-sm leading-relaxed text-stone">{{ $t }}</p></div>
            @endforeach
        </div>
    </div>
</section>

<section id="how" class="section bg-white">
    <div class="wrap grid gap-14 lg:grid-cols-12 lg:items-center">
        <div class="lg:col-span-5"><div class="frame aspect-[4/5] bg-sand"><img src="{{ asset('images/site/under-sink.jpg') }}" alt="A plumber working inside a kitchen cabinet" class="h-full w-full object-cover" loading="lazy"></div></div>
        <div class="lg:col-span-7">
            <x-site.heading eyebrow="How a repipe works" title="Open, replace, pressure test, <em>patch</em>." lede="A good repipe is as much about the walls and the clean-up as the pipe. Here is the whole job, start to finish." />
            <ol class="mt-10 space-y-6" data-stagger>
                @foreach ([['Free in-home estimate', 'We walk the house, count fixtures, check the water heater and the main, and give you a fixed written price. PEX or copper, your call, and we explain the difference honestly.'], ['Permits and prep', 'We pull the city permit, protect your floors and furniture, and plan the access points so we open as little drywall as possible.'], ['Day one: new lines', 'Water is shut off in the morning. Every supply line, hot and cold, is replaced with new pipe, new shut-off valves and new supply lines to each fixture. Water is back on the same evening.'], ['Pressure test and inspection', 'The whole system is pressure tested, then the city inspector signs it off. Only then do we close the walls.'], ['Patch, texture, walk-through', 'Our drywall team patches and textures every opening, ready for paint. We walk you through the house and hand you the lifetime warranty.']] as $i => [$h, $t])
                    <li class="flex gap-5"><span class="flex size-11 shrink-0 items-center justify-center rounded-full bg-navy font-display text-xl font-bold text-teal">{{ $i + 1 }}</span><div><h3 class="font-display text-2xl font-semibold">{{ $h }}</h3><p class="mt-1 text-sm leading-relaxed text-stone">{{ $t }}</p></div></li>
                @endforeach
            </ol>
        </div>
    </div>
</section>

<section class="section">
    <div class="wrap">
        <x-site.heading center eyebrow="PEX or copper?" title="Both are right. One is right for you." />
        <div class="mt-12 grid gap-5 md:grid-cols-2" data-stagger>
            <div class="card ring-teal/40"><p class="eyebrow">PEX (Uponor)</p><ul class="mt-5 space-y-3 text-sm text-navy">@foreach (['Flexible tubing that snakes through walls with fewer openings', 'Does not corrode or scale, and resists freeze damage', 'Quieter: no water hammer, no pipe rattle', 'Lower material cost, so the best value for most homes'] as $li)<li class="flex gap-3"><x-icon name="check" class="mt-0.5 size-5 shrink-0 text-teal-deep" />{{ $li }}</li>@endforeach</ul></div>
            <div class="card-sand"><p class="eyebrow text-stone">Type L copper</p><ul class="mt-5 space-y-3 text-sm text-navy-soft">@foreach (['The traditional choice, proven for decades', 'Rigid, with soldered joints and a premium feel', 'Preferred by some buyers and inspectors in older neighborhoods', 'Higher material cost and more wall openings'] as $li)<li class="flex gap-3"><span class="mt-2 size-1.5 shrink-0 rounded-full bg-stone"></span>{{ $li }}</li>@endforeach</ul></div>
        </div>
        <p class="mt-6 text-center text-sm text-stone">We install both and we will tell you which one we would put in our own house. Either way, the warranty is for life.</p>
    </div>
</section>

<section class="section bg-sand/60">
    <div class="wrap grid gap-12 lg:grid-cols-12">
        <div class="lg:col-span-5"><x-site.heading eyebrow="Our promise" title="A repipe you only think about once." /><ul class="mt-8 space-y-5">@foreach ([['Lifetime warranty', 'On every pipe, fitting and valve we install, for as long as you own the home.'], ['Fixed price', 'The number on the estimate is the number on the invoice. No change orders.'], ['Your home respected', 'Floors covered, shoe covers on, work area vacuumed every evening.']] as [$h, $t])<li class="flex gap-4"><x-icon name="check" class="mt-1 size-5 shrink-0 text-teal-deep" /><div><p class="font-semibold">{{ $h }}</p><p class="text-sm text-stone">{{ $t }}</p></div></li>@endforeach</ul></div>
        <div class="lg:col-span-7"><x-site.faq :items="$service->faqs ?? []" /></div>
    </div>
</section>

@if ($testimonials->isNotEmpty())
<section class="section">
    <div class="wrap"><x-site.heading center eyebrow="Repipe reviews" title="What homeowners say after the dust settles." /><div class="mt-12 grid gap-5 md:grid-cols-3">@foreach ($testimonials as $t)<x-site.testimonial :t="$t" compact />@endforeach</div></div>
</section>
@endif
<x-site.cta title="Get a fixed price for your repipe this week." text="Book a free in-home estimate. You will have a written number and an honest recommendation before we leave the driveway." image="images/site/oc-house.jpg" />
</x-site.layout>
