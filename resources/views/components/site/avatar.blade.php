@props(['member'])
@if ($member->photo)
    <div {{ $attributes->merge(['class' => 'overflow-hidden rounded-full bg-sand ring-2 ring-white']) }}><img src="{{ $member->photoUrl() }}" alt="{{ $member->name }}" class="h-full w-full object-cover" loading="lazy"></div>
@else
    <div {{ $attributes->merge(['class' => 'flex items-center justify-center rounded-full bg-navy font-display font-bold text-teal ring-4 ring-teal/30']) }} aria-label="{{ $member->name }}">{{ $member->initials() }}</div>
@endif
