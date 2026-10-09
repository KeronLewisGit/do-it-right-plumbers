<x-site.layout title="Our Team" description="Meet the licensed plumbers, dispatchers and office team at Do It Right Plumbers in Orange, CA.">
<section class="wrap py-16 lg:py-24">
    <x-site.heading eyebrow="Meet the team" title="Background-checked, uniformed, and <em class='italic font-medium text-teal-deep'>not on commission</em>." lede="Every technician is a licensed, insured employee, not a subcontractor. They are paid to fix your plumbing, not to sell you plumbing, which is why the advice you get at the kitchen table is the same advice they would give their own family." />
    <div class="mt-8 flex flex-wrap gap-2">@foreach (['Licensed', 'Insured', 'Background-checked', 'Drug-tested', 'Uniformed'] as $w)<span class="chip bg-teal-soft text-teal-deep">{{ $w }}</span>@endforeach</div>
</section>
<section class="wrap pb-20">
    <p class="eyebrow">Field technicians</p>
    <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($technicians as $m)
            <a href="{{ route('team.show', $m) }}" class="group card text-center reveal"><x-site.avatar :member="$m" class="mx-auto size-32 text-4xl" /><h2 class="mt-5 font-display text-2xl font-semibold group-hover:text-teal-deep">{{ $m->name }}</h2><p class="text-sm text-stone">{{ $m->title }}</p></a>
        @endforeach
    </div>
    @if ($office->isNotEmpty())
    <p class="eyebrow mt-20">Office & dispatch</p>
    <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($office as $m)
            <a href="{{ route('team.show', $m) }}" class="group card flex gap-5 reveal"><x-site.avatar :member="$m" class="size-24 shrink-0 text-2xl" /><div><h2 class="font-display text-2xl font-semibold leading-tight group-hover:text-teal-deep">{{ $m->name }}</h2><p class="mt-1 text-sm text-stone">{{ $m->title }}</p><span class="link-arrow mt-3 text-xs">Read more <x-icon name="arrow" /></span></div></a>
        @endforeach
    </div>
    @endif
</section>
<x-site.cta title="Want to join the team?" text="We hire licensed plumbers and apprentices who like people as much as pipes. Send a note through the contact page and tell us about yourself." />
</x-site.layout>
