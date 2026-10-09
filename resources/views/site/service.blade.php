<x-site.layout :title="$service->name" :description="$service->intro">
<section class="relative pipes-bg">
    <div class="wrap grid gap-12 py-16 lg:grid-cols-12 lg:items-center lg:py-24">
        <div class="lg:col-span-7">
            <a href="{{ route('services') }}" class="link-arrow text-stone"><x-icon name="arrow" class="rotate-180" /> All services</a>
            <p class="eyebrow mt-8">{{ $service->tagline }}</p>
            <h1 class="h-display mt-4">{{ $service->name }}</h1>
            <p class="lede mt-6">{{ $service->intro }}</p>
            <div class="mt-8 flex flex-wrap gap-3"><a href="{{ route('book') }}" class="btn-teal btn-lg">Book a visit</a><a href="tel:{{ config('company.phone_href') }}" class="btn-ghost btn-lg"><x-icon name="phone" class="size-4" />{{ config('company.phone') }}</a></div>
        </div>
        <div class="lg:col-span-5"><div class="frame aspect-[4/5] shadow-soft"><img src="{{ asset($service->image ?: 'images/site/tools.jpg') }}" alt="" class="h-full w-full object-cover"></div></div>
    </div>
</section>
@if ($service->body)<section class="wrap max-w-3xl pb-16"><div class="prose-site text-lg">{!! nl2br(e($service->body)) !!}</div></section>@endif
@if ($service->treatments)
<section class="section bg-white">
    <div class="wrap">
        <x-site.heading eyebrow="What's included" title="{{ $service->name }} with Do It Right" />
        <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($service->treatments as $t)<div class="rounded-2xl bg-cream p-6 ring-1 ring-line reveal"><h3 class="font-display text-xl font-semibold">{{ $t['name'] }}</h3><p class="mt-2 text-sm leading-relaxed text-stone">{{ $t['description'] }}</p></div>@endforeach
        </div>
    </div>
</section>
@endif
@if ($service->faqs)
<section class="section"><div class="wrap grid gap-12 lg:grid-cols-12"><div class="lg:col-span-4"><x-site.heading eyebrow="Good to know" title="Questions we hear on the phone" /></div><div class="lg:col-span-8"><x-site.faq :items="$service->faqs" /></div></div></section>
@endif
<section class="wrap pb-20">
    <p class="eyebrow">Other services</p>
    <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">@foreach ($others as $o)<x-site.service-card :service="$o" class="p-5" />@endforeach</div>
</section>
<x-site.cta />
</x-site.layout>
