{{--
    The opener every inner page starts with (the home page alone uses the scroll stage). Always the cream
    pipe-pattern surface, so pages feel like one site. `back` adds a return link above the eyebrow. The default
    slot holds actions or chips under the lede; the `aside` slot holds a photo frame, a card or a form on the right.
--}}
@props(['eyebrow' => null, 'title', 'lede' => null, 'back' => null, 'backLabel' => 'Back', 'center' => false, 'wide' => false])
<section {{ $attributes->merge(['class' => 'page-hero relative overflow-hidden pipes-bg']) }}>
    <div class="wrap intro {{ isset($aside) ? 'grid gap-12 lg:grid-cols-12 lg:items-center' : '' }}">
        <div class="min-w-0 {{ isset($aside) ? ($wide ? 'lg:col-span-5' : 'lg:col-span-7') : 'max-w-3xl' }} {{ $center ? 'mx-auto text-center' : '' }}">
            @if ($back)<p class="mb-8"><a href="{{ $back }}" class="link-arrow text-stone"><x-icon name="arrow" class="rotate-180" /> {{ $backLabel }}</a></p>@endif
            @if ($eyebrow)<p class="eyebrow {{ $center ? 'justify-center' : '' }}">{{ $eyebrow }}</p>@endif
            <h1 class="h-display mt-5">{!! $title !!}</h1>
            @if ($lede)<p class="lede mt-6 {{ $center ? 'mx-auto' : '' }} max-w-2xl">{{ $lede }}</p>@endif
            {{ $slot }}
        </div>
        @isset($aside)<div class="min-w-0 {{ $wide ? 'lg:col-span-7' : 'lg:col-span-5' }}">{{ $aside }}</div>@endisset
    </div>
</section>
