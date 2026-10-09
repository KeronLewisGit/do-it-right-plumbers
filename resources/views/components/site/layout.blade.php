@props(['title' => null, 'description' => null])
@php($co = config('company'))
<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#14283a">
    <title>{{ $title ? $title.' · ' : '' }}{{ $co['name'] }} · Orange County, CA</title>
    <meta name="description" content="{{ $description ?? 'Do It Right Plumbers is Orange County\'s friendly, licensed plumbing company: repipes, water heaters, drains, leaks and filtration with upfront pricing. Done right or it\'s free. Book online.' }}">
    <meta property="og:title" content="{{ $title ?? $co['name'] }}">
    <meta property="og:description" content="{{ $description ?? $co['tagline'] }}">
    <meta property="og:image" content="{{ asset('images/site/hero-plumber.jpg') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" href="{{ asset('favicon.png') }}">
    <script>document.documentElement.classList.add('js')</script>
    <script type="application/ld+json">{!! json_encode(['@context' => 'https://schema.org', '@type' => 'Plumber', 'name' => $co['name'], 'legalName' => $co['legal'], 'telephone' => $co['phone_href'], 'email' => $co['email'], 'url' => url('/'), 'image' => asset('images/logo.png'), 'priceRange' => '$$', 'foundingDate' => (string) $co['founded'], 'address' => ['@type' => 'PostalAddress', 'streetAddress' => $co['address']['line1'], 'addressLocality' => 'Orange', 'addressRegion' => 'CA', 'postalCode' => '92865', 'addressCountry' => 'US'], 'areaServed' => array_map(fn ($c) => ['@type' => 'City', 'name' => $c], array_keys($co['areas'])), 'sameAs' => array_values($co['social']), 'aggregateRating' => ['@type' => 'AggregateRating', 'ratingValue' => $co['stats']['rating'], 'reviewCount' => preg_replace('/\D/', '', $co['stats']['reviews'])]], JSON_UNESCAPED_SLASHES) !!}</script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col">
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-50 btn-teal">Skip to content</a>
    <x-site.nav />
    <main id="main" class="flex-1">
        @if (session('status'))<div class="wrap pt-6"><div role="status" class="rounded-2xl bg-sage px-5 py-4 text-sm font-semibold text-sage-deep ring-1 ring-sage-deep/20">{{ session('status') }}</div></div>@endif
        {{ $slot }}
    </main>
    <x-site.footer />
    <script>requestAnimationFrame(function () { requestAnimationFrame(function () { document.documentElement.classList.add('page-ready'); }); });</script>
    @unless (request()->routeIs('book*'))<a href="tel:{{ $co['phone_href'] }}" class="fixed bottom-5 right-5 z-40 inline-flex items-center gap-2 rounded-full bg-navy px-4 py-3 text-sm font-semibold text-cream shadow-soft ring-1 ring-white/10 transition hover:bg-teal hover:text-navy sm:bottom-6 sm:right-6" aria-label="Call {{ $co['phone'] }}"><x-icon name="phone" class="size-5" /><span class="hidden sm:inline">{{ $co['phone'] }}</span><span class="sm:hidden">Call now</span></a>@endunless
</body>
</html>
