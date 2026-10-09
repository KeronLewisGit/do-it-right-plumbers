@props(['title' => 'Admin'])
@php($nav = [
    ['admin.dashboard', 'Dashboard', 'home', 'admin.dashboard'],
    ['admin.calendar', 'Calendar', 'calendar', 'admin.calendar'],
    ['admin.appointments.index', 'Jobs', 'list', 'admin.appointments.*'],
    ['admin.customers.index', 'Customers', 'users', 'admin.customers.*'],
    ['admin.inquiries.index', 'Quote requests', 'inbox', 'admin.inquiries.*'],
    ['admin.subscribers.index', 'Subscribers', 'mail', 'admin.subscribers.*'],
])
@php($content = [
    ['admin.services.index', 'Services', 'wrench', 'admin.services.*'],
    ['admin.team.index', 'Team', 'users', 'admin.team.*'],
    ['admin.testimonials.index', 'Reviews', 'star', 'admin.testimonials.*'],
    ['admin.posts.index', 'Tips & posts', 'pen', 'admin.posts.*'],
    ['admin.appointment-types.index', 'Service types', 'clock', 'admin.appointment-types.*'],
])
<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="robots" content="noindex">
    <title>{{ $title }} · Do It Right Admin</title>
    <link rel="icon" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full bg-sand/40" x-data="{ side: false }">
    <div class="flex min-h-screen">
        <aside class="fixed inset-y-0 left-0 z-40 w-64 -translate-x-full border-r border-line bg-cream p-4 transition lg:static lg:translate-x-0" :class="side && 'translate-x-0'">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-2 py-2"><img src="{{ asset('images/logo.png') }}" alt="" class="size-8 rounded-full"><span class="font-display text-lg font-bold">Do It Right <span class="text-teal-deep">Admin</span></span></a>
            <p class="mt-6 px-3 text-[11px] font-semibold uppercase tracking-[0.2em] text-stone">Dispatch</p>
            <nav class="mt-2 space-y-0.5">@foreach ($nav as [$r, $l, $i, $m])<a href="{{ route($r) }}" class="adm-side-link {{ request()->routeIs($m) ? 'active' : '' }}"><x-icon :name="$i" />{{ $l }}</a>@endforeach</nav>
            <p class="mt-6 px-3 text-[11px] font-semibold uppercase tracking-[0.2em] text-stone">Website content</p>
            <nav class="mt-2 space-y-0.5">@foreach ($content as [$r, $l, $i, $m])<a href="{{ route($r) }}" class="adm-side-link {{ request()->routeIs($m) ? 'active' : '' }}"><x-icon :name="$i" />{{ $l }}</a>@endforeach</nav>
            @if (auth()->user()->isAdmin())<p class="mt-6 px-3 text-[11px] font-semibold uppercase tracking-[0.2em] text-stone">Admin</p><nav class="mt-2 space-y-0.5"><a href="{{ route('admin.settings') }}" class="adm-side-link {{ request()->routeIs('admin.settings*') ? 'active' : '' }}"><x-icon name="settings" />Hours &amp; dispatch</a><a href="{{ route('admin.users.index') }}" class="adm-side-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}"><x-icon name="shield" />Staff logins</a></nav>@endif
            <div class="mt-8 border-t border-line pt-4"><a href="{{ route('home') }}" target="_blank" class="adm-side-link"><x-icon name="external" />View website</a><form method="post" action="{{ route('admin.logout') }}">@csrf<button class="adm-side-link w-full"><x-icon name="logout" />Sign out</button></form><p class="mt-3 px-3 text-xs text-stone">{{ auth()->user()->name }} · {{ ucfirst(auth()->user()->role) }}</p></div>
        </aside>
        <div x-cloak x-show="side" @click="side = false" class="fixed inset-0 z-30 bg-navy/30 lg:hidden"></div>
        <div class="flex min-w-0 flex-1 flex-col">
            <header class="flex h-14 items-center justify-between border-b border-line bg-cream px-4 lg:px-8"><div class="flex items-center gap-3"><button @click="side = true" class="rounded-lg p-2 ring-1 ring-line lg:hidden" aria-label="Menu"><x-icon name="menu" class="size-4" /></button><h1 class="font-display text-2xl">{{ $title }}</h1></div><div class="flex items-center gap-2">{{ $actions ?? '' }}</div></header>
            <main class="flex-1 p-4 lg:p-8">
                @if (session('saved'))<div role="status" class="mb-5 rounded-xl bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-900 ring-1 ring-emerald-200">{{ session('saved') }}</div>@endif
                @if (session('credentials'))<div class="mb-5 rounded-xl bg-teal-soft px-4 py-3 text-sm ring-1 ring-teal/40"><p class="font-semibold">Login details (shown once):</p><p class="mt-1 font-mono">{{ session('credentials')['email'] }} · {{ session('credentials')['password'] }}</p></div>@endif
                @if ($errors->any())<div role="alert" class="mb-5 rounded-xl bg-red-50 px-4 py-3 text-sm text-red-900 ring-1 ring-red-200"><p class="font-semibold">Please check the form.</p><ul class="mt-1 list-inside list-disc">@foreach ($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>@endif
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
