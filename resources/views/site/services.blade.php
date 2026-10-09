<x-site.layout title="Plumbing Services" description="Repipes, water heaters, drain cleaning, sewer, leak detection, water filtration and emergency plumbing across Orange County, CA. Upfront pricing from Do It Right Plumbers.">
<section class="wrap py-16 lg:py-24">
    <x-site.heading eyebrow="Our services" title="Every pipe in the house, <em class='italic font-medium text-teal-deep'>one number to call</em>." lede="From a dripping faucet to a whole-house repipe. Pick a service to see exactly what is included and what it costs to get us out, or call and talk to a real person in our Orange office." />
</section>
<section class="wrap pb-16"><div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">@foreach ($offers as $o)<x-site.offer :offer="$o" />@endforeach</div></section>
<section class="wrap pb-24 space-y-6">
    @foreach ($services as $s)
        <article class="grid overflow-hidden rounded-[2rem] bg-white ring-1 ring-line reveal lg:grid-cols-12">
            <div class="relative min-h-64 lg:col-span-5"><img src="{{ asset($s->image ?: 'images/site/tools.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover" loading="lazy"></div>
            <div class="p-8 sm:p-10 lg:col-span-7">
                <div class="flex items-center gap-3"><span class="inline-flex size-10 items-center justify-center rounded-xl bg-teal-soft text-teal-deep"><x-icon :name="$s->icon ?? 'wrench'" class="size-5" /></span><p class="eyebrow">{{ $s->tagline }}</p></div>
                <h2 class="h-section mt-4"><a href="{{ route('services.show', $s) }}" class="hover:text-teal-deep">{{ $s->name }}</a></h2>
                <p class="mt-4 text-stone">{{ $s->intro }}</p>
                @if ($s->treatments)<ul class="mt-6 flex flex-wrap gap-2">@foreach (array_slice($s->treatments, 0, 7) as $t)<li class="chip bg-sand text-navy-soft">{{ $t['name'] }}</li>@endforeach @if (count($s->treatments) > 7)<li class="chip bg-sand text-stone">+{{ count($s->treatments) - 7 }} more</li>@endif</ul>@endif
                <div class="mt-8 flex flex-wrap gap-3"><a href="{{ route('services.show', $s) }}" class="btn-navy">Learn more</a><a href="{{ route('book') }}" class="btn-ghost">Book a visit</a></div>
            </div>
        </article>
    @endforeach
</section>
<x-site.cta title="Not sure what you need? Start with a $49 diagnostic." text="A licensed plumber comes out, finds the problem and gives you a written price. If you go ahead with the repair, the $49 is credited toward it." />
</x-site.layout>
