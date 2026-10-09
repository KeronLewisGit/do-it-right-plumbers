@props(['title' => 'Ready when you are. Usually today.', 'text' => 'Book an arrival window online in under a minute, or call and a real person in our Orange office will pick up. Upfront pricing, no commission, done right or it\'s free.', 'image' => 'images/site/under-sink.jpg'])
<section class="wrap">
    <div class="relative overflow-hidden rounded-[2.5rem] bg-navy text-cream">
        <img src="{{ asset($image) }}" alt="" class="absolute inset-0 h-full w-full object-cover opacity-30" loading="lazy">
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/85 to-navy/40"></div>
        <div class="relative grid gap-8 p-8 sm:p-12 lg:p-16 lg:grid-cols-2 lg:items-center">
            <div><p class="eyebrow text-teal">{{ config('company.tagline') }}</p><h2 class="h-section mt-4 text-cream">{!! $title !!}</h2><p class="mt-5 max-w-lg text-cream/75">{{ $text }}</p></div>
            <div class="flex flex-wrap gap-3 lg:justify-end"><a href="{{ route('book') }}" class="btn-teal btn-lg">Book an arrival window</a><a href="tel:{{ config('company.phone_href') }}" class="btn-lg btn bg-white/10 text-cream ring-1 ring-white/20 hover:bg-white hover:text-navy"><x-icon name="phone" class="size-4" />{{ config('company.phone') }}</a></div>
        </div>
    </div>
</section>
