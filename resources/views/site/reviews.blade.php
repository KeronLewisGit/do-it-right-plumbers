<x-site.layout title="Reviews" description="Google reviews from Orange County homeowners for Do It Right Plumbers: repipes, water heaters, drains and emergency repairs.">
@php($co = config('company'))
<x-site.page-hero center :eyebrow="$co['stats']['rating'].'★ · '.$co['stats']['reviews'].' five-star reviews'" :title="'Fixing Orange County\'s plumbing since '.$co['founded'].'.'" lede="We do not cherry-pick. These are the words homeowners chose after we left, published as written.">
    <div class="mt-8 flex justify-center gap-3"><a href="{{ $co['review_url'] }}" target="_blank" rel="noopener" class="btn-light"><x-icon name="star" class="size-4 fill-current text-brass" />Read us on Google</a><a href="{{ route('book') }}" class="btn-teal">Book a visit</a></div>
</x-site.page-hero>
@if ($videos->isNotEmpty())
<section class="wrap section-tail-sm">
    <p class="eyebrow">On video</p>
    <div class="mt-6 grid gap-5 sm:grid-cols-3" data-stagger>@foreach ($videos as $v)<a href="{{ $v->video_url }}" target="_blank" rel="noopener" class="group relative overflow-hidden rounded-3xl bg-navy p-7 text-cream ring-1 ring-white/10"><span class="inline-flex size-12 items-center justify-center rounded-full bg-teal text-navy transition group-hover:scale-110"><x-icon name="video" class="size-5" /></span><h2 class="mt-6 font-display text-3xl font-semibold">{{ $v->name }}</h2><p class="mt-1 text-sm text-cream/70">{{ $v->treatment }}</p><p class="mt-5 text-sm text-cream/80">{{ $v->quote }}</p><span class="link-arrow mt-5 text-teal">Watch on Instagram <x-icon name="arrow" /></span></a>@endforeach</div>
</section>
@endif
<section class="wrap section-tail">
    <p class="eyebrow">Written reviews</p>
    <div class="mt-6 columns-1 gap-5 md:columns-2 lg:columns-3" data-stagger>@foreach ($written as $t)<div class="mb-5 break-inside-avoid"><x-site.testimonial :t="$t" /></div>@endforeach</div>
</section>
<x-site.cta />
</x-site.layout>
