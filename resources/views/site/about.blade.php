<x-site.layout title="About Us" description="Do It Right Plumbers grew out of a family remodeling company in 2007 and became Orange County's friendliest plumbing company in 2014. Meet the people, the trucks and the promise behind the name.">
@php($co = config('company'))
<x-site.page-hero eyebrow="About Do It Right" title="The name is the <em>whole</em> business plan." lede="We started as a remodeling company that kept having to refer its own clients to other plumbers. In 2014 we decided to become the plumber we wished we could recommend: on time, honest about the options, and friendly enough that you would be happy to see the truck pull up.">
    <x-slot:aside><div class="grid grid-cols-3 gap-4" data-stagger>@foreach ([[$co['stats']['years'], 'Years in business'], [$co['stats']['trucks'], 'Trucks on the road'], [$co['stats']['reviews'], 'Five-star reviews']] as [$n, $l])<div class="card-sand text-center"><p class="font-display text-4xl font-bold" data-count>{{ $n }}</p><p class="mt-1 text-xs font-semibold uppercase tracking-wider text-stone">{{ $l }}</p></div>@endforeach</div></x-slot:aside>
</x-site.page-hero>
<section class="wrap section-tail-sm"><div class="frame aspect-[21/9] shadow-soft"><img src="{{ asset('images/site/kitchen.jpg') }}" alt="A clean, modern Orange County kitchen" class="h-full w-full object-cover" data-parallax></div></section>

<section class="section bg-white">
    <div class="wrap grid gap-14 lg:grid-cols-2 lg:items-center">
        <x-site.heading eyebrow="Our story" title="From remodeling to plumbing, by request." lede="Edan Bar-Lev and his brother Aviran founded a remodeling company in 2007, building additions and high-end kitchens across Orange County. The one thing they could not do was take a service call.">
            <div class="prose-site mt-8">
                <p>Every month a past client would ring about a leak or a dead water heater, and every month the brothers sent them to someone else. In 2014 Edan, a licensed general contractor and plumber, spent a year studying how the best service companies in the country operate, from plumbing firms in the Nexstar network to the customer-service playbooks of Zappos and Amazon. Then he opened Do It Right Plumbers with one truck and a free water heater flush for every former remodeling client.</p>
                <p>The flush turned into repairs, the repairs into referrals, and the one truck into a fleet. The rule from day one has not changed: our plumbers are paid to fix things, not to sell things. Nobody works on commission, so the only reason you will hear about a repipe is that you need one.</p>
                <p>We are still family owned. Every technician is licensed, background-checked and drug-tested before they ever step into a customer's home, shows up in a fully stocked truck, and leaves the work area cleaner than they found it. As we like to say, we win clean in this dirty business. One call, and you will never have to search for another plumber again.</p>
            </div>
        </x-site.heading>
        <div class="grid grid-cols-2 gap-4"><div class="frame aspect-[3/4]"><img src="{{ asset('images/site/toilet-inspect.jpg') }}" alt="A technician inspecting a bathroom" class="h-full w-full object-cover" loading="lazy"></div><div class="frame aspect-[3/4] mt-10"><img src="{{ asset('images/site/technician.jpg') }}" alt="A smiling technician" class="h-full w-full object-cover" loading="lazy"></div></div>
    </div>
</section>

<section class="section">
    <div class="wrap">
        <x-site.heading center eyebrow="The brand" title="Why our logo looks like 1934." lede="The tipped cap and the smile are on purpose. We wanted the brand, the vans and the technicians at your door to feel approachable, especially to anyone who has ever felt talked down to by a tradesperson." />
        <div class="mt-12 grid gap-5 md:grid-cols-3" data-stagger>
            @foreach ([['truck', 'Wrapped, stocked trucks', 'Every van carries the same shelving and the same parts, so a technician rarely has to leave for supplies mid-job.'], ['heart', 'First impressions', 'Uniforms, shoe covers and a text before arrival. The job starts before anyone knocks on the door.'], ['handshake', 'Community', 'We partner with the Orange County Food Bank with year-round donations, because a company should be a good neighbor too.']] as [$i, $h, $t])
                <div class="card"><span class="inline-flex size-11 items-center justify-center rounded-2xl bg-teal-soft text-teal-deep"><x-icon :name="$i" class="size-5" /></span><h3 class="mt-5 font-display text-2xl font-semibold">{{ $h }}</h3><p class="mt-2 text-sm leading-relaxed text-stone">{{ $t }}</p></div>
            @endforeach
        </div>
    </div>
</section>

<section class="section bg-sand/60">
    <div class="wrap">
        <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between"><x-site.heading eyebrow="The people" title="The folks behind the trucks." /><a href="{{ route('team') }}" class="link-arrow">Meet everyone <x-icon name="arrow" /></a></div>
        <div class="mt-12 grid grid-cols-2 gap-5 md:grid-cols-4" data-stagger>@foreach ($team as $m)<a href="{{ route('team.show', $m) }}" class="group text-center"><x-site.avatar :member="$m" class="mx-auto size-28 text-3xl" /><p class="mt-3 text-sm font-semibold">{{ $m->name }}</p><p class="text-xs text-stone">{{ $m->title }}</p></a>@endforeach</div>
    </div>
</section>

<section class="section">
    <div class="wrap grid gap-5 md:grid-cols-3" data-stagger>@foreach ($testimonials as $t)<x-site.testimonial :t="$t" compact />@endforeach</div>
</section>
<x-site.cta title="See the difference for yourself." image="images/site/hero-plumber.jpg" />
</x-site.layout>
