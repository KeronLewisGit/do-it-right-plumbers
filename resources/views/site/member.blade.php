<x-site.layout :title="$member->name" :description="$member->name.', '.$member->title.' at Do It Right Plumbers.'">
<section class="wrap grid gap-12 py-16 lg:grid-cols-12 lg:py-24">
    <div class="lg:col-span-4"><x-site.avatar :member="$member" class="mx-auto size-64 text-7xl shadow-soft" /></div>
    <div class="lg:col-span-8">
        <a href="{{ route('team') }}" class="link-arrow text-stone"><x-icon name="arrow" class="rotate-180" /> The whole team</a>
        <p class="eyebrow mt-8">{{ $member->title }}</p>
        <h1 class="h-display mt-4">{{ $member->name }}</h1>
        <div class="prose-site mt-8 text-lg">{!! nl2br(e($member->bio ?: 'Part of the Do It Right team.')) !!}</div>
        <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ route('book') }}" class="btn-teal">{{ $member->accepts_bookings ? 'Request '.$member->firstName() : 'Book a visit' }}</a>
            @if ($member->instagram)<a href="{{ $member->instagram }}" target="_blank" rel="noopener" class="btn-ghost"><x-icon name="instagram" class="size-4" />Instagram</a>@endif
        </div>
    </div>
</section>
<section class="wrap pb-20">
    <p class="eyebrow">Also on the team</p>
    <div class="mt-6 grid grid-cols-2 gap-5 md:grid-cols-4">@foreach ($others as $m)<a href="{{ route('team.show', $m) }}" class="group text-center"><x-site.avatar :member="$m" class="mx-auto size-24 text-2xl" /><p class="mt-3 font-semibold">{{ $m->name }}</p><p class="text-xs text-stone">{{ $m->title }}</p></a>@endforeach</div>
</section>
</x-site.layout>
