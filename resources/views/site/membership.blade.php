<x-site.layout title="Membership" description="The Do It Right membership: an annual 58-point plumbing safety check, a free sewer camera inspection, free water heater maintenance, three extra years of labor warranty and member-only savings, for $19.99 a month.">
@php($co = config('company'))
<x-site.page-hero eyebrow="Do It Right membership" title="Prevent, maintain <em>and save</em>." lede="Preventative maintenance prolongs the life of everything plumbed into your home, keeps small problems from becoming expensive ones, and puts you at the front of the queue when something does go wrong.">
    <div class="mt-9 flex flex-wrap items-center gap-3"><a href="tel:{{ $co['phone_href'] }}" class="btn-teal btn-lg"><x-icon name="phone" class="size-4" />Join by phone</a><a href="{{ route('contact') }}" class="btn-ghost btn-lg">Ask a question</a></div>
    <x-slot:aside>
        <div class="card shadow-soft">
            <p class="eyebrow">All of this for</p>
            <p class="mt-3 font-display text-6xl font-bold leading-none">{{ $plan['monthly'] }}<span class="font-sans text-base font-semibold text-stone">/month</span></p>
            <p class="mt-3 text-sm text-stone">Or {{ $plan['annual'] }} for the year. Members get a priority hotline: <a href="tel:{{ $plan['hotline_href'] }}" class="font-semibold text-navy hover:text-teal-deep">{{ $plan['hotline'] }}</a>.</p>
            <ul class="mt-6 space-y-2.5 text-sm">@foreach (array_slice($plan['perks'], 0, 4) as $p)<li class="flex gap-3"><x-icon name="check" class="mt-0.5 size-5 shrink-0 text-teal-deep" />{{ $p['title'] }}</li>@endforeach</ul>
        </div>
    </x-slot:aside>
</x-site.page-hero>

<section class="section">
    <div class="wrap">
        <x-site.heading center eyebrow="What members get" title="Over $1,000 of service, every year." lede="Each benefit on its own would cost more than the membership. Together they keep your plumbing boring, which is exactly how plumbing should be." />
        <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3" data-stagger>
            @foreach ($plan['perks'] as $p)
                <div class="card"><div class="flex items-center justify-between gap-3"><span class="inline-flex size-11 items-center justify-center rounded-2xl bg-teal-soft text-teal-deep"><x-icon :name="$p['icon']" class="size-5" /></span><span class="chip bg-brass/20 text-navy">{{ $p['value'] }}</span></div><h2 class="mt-5 font-display text-2xl font-semibold leading-tight">{{ $p['title'] }}</h2><p class="mt-2 text-sm leading-relaxed text-stone">{{ $p['text'] }}</p></div>
            @endforeach
        </div>
    </div>
</section>

<section class="section bg-white">
    <div class="wrap grid gap-12 lg:grid-cols-12">
        <div class="lg:col-span-5"><x-site.heading eyebrow="Points" title="Loyalty that pays you back." lede="Every dollar you spend earns points. Every 100 points is $10 off your next job, up to $250 per visit." /><dl class="mt-8 grid grid-cols-3 gap-4">@foreach ([['500', '5-year members'], ['1,000', '7-year members'], ['1,500', '10-year members']] as [$n, $l])<div class="card-sand text-center"><dt class="text-[11px] font-semibold uppercase tracking-wider text-stone">{{ $l }}</dt><dd class="mt-1 font-display text-3xl font-bold"><span data-count>{{ $n }}</span><span class="block text-xs font-sans font-semibold text-teal-deep">bonus points</span></dd></div>@endforeach</dl></div>
        <div class="lg:col-span-7">
            <x-site.faq :items="[
                ['q' => 'How do I join?', 'a' => 'Call '.$co['phone'].' or mention it to your technician on any visit. Membership starts the same day and your first safety check can be booked right away.'],
                ['q' => 'Is it monthly or yearly?', 'a' => $plan['monthly'].' a month, or '.$plan['annual'].' for the year. Annual memberships switch to monthly when they expire so there is never a gap in coverage.'],
                ['q' => 'Does it cover rentals?', 'a' => 'Membership benefits apply to homeowners. If you own a rental in Orange County, ask us about covering it separately.'],
                ['q' => 'What are the conditions?', 'a' => $plan['terms']],
            ]" />
        </div>
    </div>
</section>

@if ($testimonials->isNotEmpty())
<section class="section"><div class="wrap grid gap-5 md:grid-cols-3">@foreach ($testimonials as $t)<x-site.testimonial :t="$t" compact />@endforeach</div></section>
@endif
<x-site.cta title="Join the club, or just book a visit." text="Call and a real person in our Orange office will set you up in two minutes. Not ready? Book a one-off visit and decide after you have met us." />
</x-site.layout>
