<x-site.layout title="Plumbing Tips" description="Plain-English plumbing advice from Do It Right Plumbers: water heaters, repipes, drains, leaks and what to do before you call.">
<x-site.page-hero eyebrow="Plumbing tips" title="Straight talk <em>from the truck</em>." lede="What our technicians tell customers at the kitchen table, written down. Read it before you call and you might not need to.">
    <div class="mt-8 flex flex-wrap gap-2"><a href="{{ route('blog') }}" class="chip {{ request('category') ? 'bg-sand text-navy-soft' : 'bg-navy text-cream' }}">All</a>@foreach ($categories as $c)<a href="{{ route('blog', ['category' => $c]) }}" class="chip {{ request('category') === $c ? 'bg-navy text-cream' : 'bg-sand text-navy-soft hover:bg-teal-soft' }}">{{ $c }}</a>@endforeach</div>
</x-site.page-hero>
@if ($featured)
<section class="wrap section-tail-sm"><a href="{{ route('blog.show', $featured) }}" class="group grid overflow-hidden rounded-3xl bg-white ring-1 ring-line lg:grid-cols-2"><div class="relative min-h-72"><img src="{{ $featured->coverUrl() }}" alt="" class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105"></div><div class="p-8 sm:p-12"><p class="eyebrow">Featured · {{ $featured->category }}</p><h2 class="h-section mt-4 group-hover:text-teal-deep">{{ $featured->title }}</h2><p class="mt-4 text-stone">{{ $featured->excerpt }}</p><p class="mt-6 text-xs font-semibold uppercase tracking-wider text-stone">{{ $featured->published_at->format('F j, Y') }} · {{ $featured->readingMinutes() }} min read</p></div></a></section>
@endif
<section class="wrap section-tail">
    <div class="grid gap-x-5 gap-y-10 sm:grid-cols-2 lg:grid-cols-3" data-stagger>
        @forelse ($posts as $p)
            @continue($featured && $p->is($featured))
            <a href="{{ route('blog.show', $p) }}" class="group"><div class="frame aspect-[16/10] bg-sand"><img src="{{ $p->coverUrl() }}" alt="" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy"></div><p class="mt-4 text-xs font-semibold uppercase tracking-wider text-teal-deep">{{ $p->category }} · {{ $p->readingMinutes() }} min</p><h2 class="mt-2 font-display text-2xl font-semibold leading-tight group-hover:text-teal-deep">{{ $p->title }}</h2><p class="mt-2 text-sm text-stone">{{ $p->excerpt }}</p></a>
        @empty<p class="text-stone">No tips yet.</p>@endforelse
    </div>
    <div class="mt-12">{{ $posts->links() }}</div>
</section>
<x-site.cta title="Read enough? Let a plumber take a look." text="Book a $49 diagnostic online or send us a message. We would rather answer a question now than fix a flood later." />
</x-site.layout>
