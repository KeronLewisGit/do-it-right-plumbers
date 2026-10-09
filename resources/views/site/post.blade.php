<x-site.layout :title="$post->title" :description="$post->excerpt">
<article class="wrap max-w-3xl py-16 lg:py-24">
    <a href="{{ route('blog') }}" class="link-arrow text-stone"><x-icon name="arrow" class="rotate-180" /> All tips</a>
    <p class="eyebrow mt-8">{{ $post->category }} · {{ $post->readingMinutes() }} min read</p>
    <h1 class="h-display mt-4">{{ $post->title }}</h1>
    @if ($post->excerpt)<p class="lede mt-5">{{ $post->excerpt }}</p>@endif
    <p class="mt-6 text-xs font-semibold uppercase tracking-wider text-stone">{{ $post->published_at?->format('F j, Y') ?? 'Draft' }} · Do It Right Plumbers</p>
    @if ($post->cover_image)<div class="frame mt-10 aspect-[16/9]"><img src="{{ $post->coverUrl() }}" alt="" class="h-full w-full object-cover"></div>@endif
    <div class="prose-site mt-10 text-lg">{!! $post->body !!}</div>
    <div class="mt-12 rounded-3xl bg-sand p-8"><p class="font-display text-2xl font-semibold">Sound familiar?</p><p class="mt-2 text-sm text-stone">Book a $49 diagnostic or send us a message. We would rather answer a question now than fix a flood later.</p><div class="mt-5 flex flex-wrap gap-3"><a href="{{ route('book') }}" class="btn-teal">Book online</a><a href="{{ route('contact') }}" class="btn-ghost">Ask a question</a></div></div>
</article>
@if ($related->isNotEmpty())
<section class="wrap pb-24"><p class="eyebrow">More in {{ $post->category }}</p><div class="mt-6 grid gap-6 md:grid-cols-3">@foreach ($related as $r)<a href="{{ route('blog.show', $r) }}" class="group"><div class="frame aspect-[16/10] bg-sand"><img src="{{ $r->coverUrl() }}" alt="" class="h-full w-full object-cover" loading="lazy"></div><h2 class="mt-3 font-display text-xl font-semibold group-hover:text-teal-deep">{{ $r->title }}</h2></a>@endforeach</div></section>
@endif
</x-site.layout>
