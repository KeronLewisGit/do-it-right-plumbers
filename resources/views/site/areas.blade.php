<x-site.layout title="Service Areas" description="Do It Right Plumbers serves all of Orange County from Orange, CA: Santa Ana, Tustin, Anaheim, Irvine, Fullerton, Huntington Beach, Costa Mesa, Garden Grove, Westminster and more.">
@php($co = config('company'))
<x-site.page-hero eyebrow="Service areas" title="All of Orange County, <em>same-day</em>." :lede="'Our trucks leave from '.$co['address']['line1'].' in Orange, a few minutes from the 55, 57 and 91. That puts most of the county within a thirty-minute drive, which is how we offer arrival windows as short as sixty minutes.'">
    <div class="mt-8 flex flex-wrap gap-3"><a href="{{ route('book') }}" class="btn-teal btn-lg">Book an arrival window</a><a href="tel:{{ $co['phone_href'] }}" class="btn-ghost btn-lg"><x-icon name="phone" class="size-4" />{{ $co['phone'] }}</a></div>
    <x-slot:aside><div class="frame aspect-[4/3] shadow-soft"><img src="{{ asset('images/site/oc-house.jpg') }}" alt="A home in Orange County" class="h-full w-full object-cover" data-parallax></div></x-slot:aside>
</x-site.page-hero>
<section class="wrap section-tail">
    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4" data-stagger>
        @foreach ($areas as $city => $note)
            <a href="{{ route('areas.show', \Illuminate\Support\Str::slug($city)) }}" class="group card reveal transition hover:-translate-y-1 hover:ring-teal/40"><span class="inline-flex size-10 items-center justify-center rounded-xl bg-teal-soft text-teal-deep"><x-icon name="map" class="size-5" /></span><h2 class="mt-4 font-display text-2xl font-semibold group-hover:text-teal-deep">{{ $city }}</h2><p class="mt-1 text-sm text-stone">{{ $note }}</p></a>
        @endforeach
    </div>
    <p class="mt-8 text-sm text-stone">Not on the list? We still probably cover you. Call and ask.</p>
</section>
<section class="section bg-white"><div class="wrap"><x-site.heading eyebrow="In every city" title="The same services, the same prices." /><div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3" data-stagger>@foreach ($services as $s)<x-site.service-card :service="$s" />@endforeach</div></div></section>
<x-site.cta />
</x-site.layout>
