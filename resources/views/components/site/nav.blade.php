@php($co = config('company'))
@php($links = [['services', 'Services'], ['repipes', 'Repipes'], ['emergency', 'Emergency'], ['membership', 'Membership'], ['about', 'About'], ['areas', 'Areas'], ['reviews', 'Reviews'], ['blog', 'Tips'], ['contact', 'Contact']])
@php($overlay = request()->routeIs('home'))
<header x-data="{ open: false, scrolled: false }" @scroll.window.passive="scrolled = window.scrollY > 12" @keydown.escape.window="open = false" :class="{ 'nav-overlay': {{ $overlay ? '!scrolled' : 'false' }} }" class="sticky top-0 z-50 {{ $overlay ? 'nav-overlay' : '' }}">
    <div class="bg-navy text-cream">
        <div class="wrap flex h-9 items-center justify-between text-[11px] font-medium tracking-wide">
            <p class="truncate"><span class="text-teal">{{ $co['stats']['rating'] }}★ Google rated</span> · {{ $co['stats']['reviews'] }} five-star reviews · Done right, or it's free</p>
            <div class="hidden items-center gap-5 sm:flex">
                <span class="hidden items-center gap-1.5 text-cream/70 lg:inline-flex"><x-icon name="clock" class="size-3.5" />{{ app(\App\Services\Availability::class)->hoursSummary() }} · Emergencies 24/7 by phone</span>
                <a href="tel:{{ $co['phone_href'] }}" class="inline-flex items-center gap-1.5 hover:text-teal"><x-icon name="phone" class="size-3.5" />{{ $co['phone'] }}</a>
            </div>
        </div>
    </div>
    <div :class="scrolled ? 'bg-cream/85 shadow-[0_1px_0_0_var(--color-line)] backdrop-blur-lg' : 'bg-cream'" class="nav-shell transition duration-300">
        <nav class="wrap flex h-18 items-center justify-between gap-6" aria-label="Main">
            <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-3 whitespace-nowrap"><img src="{{ asset('images/logo.png') }}" alt="" class="size-11 rounded-full badge-ring sm:size-12"><span class="leading-none"><span class="nav-brand block font-display text-xl font-bold tracking-tight text-navy sm:text-[22px]">Do It Right</span><span class="nav-brand-sub mt-0.5 block text-[11px] font-extrabold uppercase tracking-[0.2em] text-teal-deep">Plumbers</span></span></a>
            <div class="hidden items-center gap-0.5 xl:flex">
                @foreach ($links as [$route, $label])<a href="{{ route($route) }}" class="nav-link {{ request()->routeIs($route) || request()->routeIs($route.'.*') ? 'active' : '' }}" @if (request()->routeIs($route) || request()->routeIs($route.'.*')) aria-current="page" @endif>{{ $label }}</a>@endforeach
            </div>
            <div class="flex shrink-0 items-center gap-2 whitespace-nowrap">
                <a href="tel:{{ $co['phone_href'] }}" class="btn-ghost btn-sm hidden md:inline-flex"><x-icon name="phone" class="size-4" />{{ $co['phone'] }}</a>
                <a href="{{ route('book') }}" class="btn-teal btn-sm sm:px-5 sm:py-2.5">Book online</a>
                <button type="button" @click="open = true" :aria-expanded="open" aria-controls="mobile-menu" class="nav-menu-btn inline-flex size-10 items-center justify-center rounded-full ring-1 ring-line xl:hidden" aria-label="Open menu"><x-icon name="menu" /></button>
            </div>
        </nav>
    </div>
    <div x-cloak x-show="open" x-transition.opacity class="fixed inset-0 z-50 bg-navy/40 backdrop-blur-sm xl:hidden" @click="open = false"></div>
    <div id="mobile-menu" role="dialog" aria-modal="true" aria-label="Menu" x-cloak x-show="open" x-trap.noscroll="open" x-transition:enter="transition duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition duration-200" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="fixed inset-y-0 right-0 z-50 flex w-[86%] max-w-sm flex-col overflow-y-auto bg-cream p-6 shadow-soft xl:hidden">
        <div class="flex items-center justify-between"><img src="{{ asset('images/logo.png') }}" alt="" class="size-10 rounded-full"><button type="button" @click="open = false" class="inline-flex size-10 items-center justify-center rounded-full ring-1 ring-line" aria-label="Close menu"><x-icon name="close" /></button></div>
        <div class="mt-8 flex flex-col gap-1"><a href="{{ route('home') }}" class="rounded-xl px-3 py-3 font-display text-2xl font-semibold text-navy hover:bg-sand">Home</a>@foreach ($links as [$route, $label])<a href="{{ route($route) }}" class="rounded-xl px-3 py-3 font-display text-2xl font-semibold text-navy hover:bg-sand">{{ $label }}</a>@endforeach</div>
        <div class="mt-auto space-y-3 pt-6">
            <a href="{{ route('book') }}" class="btn-teal w-full">Book online</a>
            <a href="tel:{{ $co['phone_href'] }}" class="btn-ghost w-full"><x-icon name="phone" class="size-4" />{{ $co['phone'] }}</a>
        </div>
    </div>
</header>
