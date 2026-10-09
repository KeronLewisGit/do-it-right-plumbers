@props(['offer'])
<div {{ $attributes->merge(['class' => 'relative flex flex-col rounded-3xl border-2 border-dashed border-teal/60 bg-white p-6']) }}>
    @if (! empty($offer['badge']))<span class="absolute -top-3 left-5 rounded-full bg-brass px-3 py-1 text-[11px] font-extrabold uppercase tracking-[0.2em] text-navy">{{ $offer['badge'] }}</span>@endif
    <p class="font-display text-3xl font-bold text-navy">{{ $offer['title'] }}</p>
    <p class="mt-2 flex-1 text-sm leading-relaxed text-stone">{{ $offer['text'] }}</p>
    <a href="{{ route('book') }}" class="link-arrow mt-5 text-teal-deep">Claim it when you book <x-icon name="arrow" /></a>
</div>
