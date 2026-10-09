@php($co = config('company'))
@php($services = \App\Models\Service::active()->get(['name', 'slug']))
@php($hours = app(\App\Services\Availability::class)->hoursGrouped())
<footer class="mt-24 bg-navy text-cream pipes-bg-light">
    <div class="wrap intro">
        <div class="grid grid-cols-2 gap-x-6 gap-y-12 lg:grid-cols-12">
            <div class="col-span-2 lg:col-span-4">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-3"><img src="{{ asset('images/logo.png') }}" alt="" class="size-14 rounded-full ring-2 ring-teal"><span class="leading-none"><span class="block font-display text-2xl font-bold">Do It Right</span><span class="mt-1 block text-[11px] font-extrabold uppercase tracking-[0.2em] text-teal">Plumbers</span></span></a>
                <p class="mt-5 max-w-sm text-sm leading-relaxed text-cream/70">{{ $co['strap'] }}. Repipes, water heaters, drains, leaks and water filtration for homes across Orange County, with upfront pricing and a simple promise: {{ strtolower($co['tagline']) }}</p>
                <div class="mt-6 flex flex-wrap gap-2">
                    @foreach ($co['social'] as $name => $url)<a href="{{ $url }}" target="_blank" rel="noopener" class="inline-flex size-10 items-center justify-center rounded-full ring-1 ring-white/15 transition hover:bg-teal hover:text-navy hover:ring-teal" aria-label="{{ ucfirst($name) }}"><x-icon :name="$name" class="size-4.5" /></a>@endforeach
                </div>
                <p class="mt-6 text-xs text-cream/60">Licensed, bonded and insured in California.{{ $co['license'] ? ' '.$co['license'].'.' : '' }}</p>
            </div>
            <nav aria-label="Services" class="min-w-0 lg:col-span-2">
                <h2 class="eyebrow mb-4 text-teal">Services</h2>
                <ul class="space-y-2.5 text-sm text-cream/80">
                    @foreach ($services as $s)<li><a href="{{ $s->slug === 'repipes' ? route('repipes') : ($s->slug === 'emergency' ? route('emergency') : route('services.show', $s)) }}" class="hover:text-teal">{{ $s->name }}</a></li>@endforeach
                </ul>
            </nav>
            <nav aria-label="Company" class="min-w-0 lg:col-span-2">
                <h2 class="eyebrow mb-4 text-teal">Company</h2>
                <ul class="space-y-2.5 text-sm text-cream/80">
                    @foreach ([['about', 'About us'], ['membership', 'Membership'], ['team', 'Our team'], ['reviews', 'Reviews'], ['areas', 'Service areas'], ['blog', 'Plumbing tips'], ['contact', 'Contact'], ['book', 'Book online']] as [$r, $l])<li><a href="{{ route($r) }}" class="hover:text-teal">{{ $l }}</a></li>@endforeach
                </ul>
            </nav>
            <div class="col-span-2 lg:col-span-4">
                <h2 class="eyebrow mb-4 text-teal">Hours &amp; contact</h2>
                <dl class="grid grid-cols-[auto_1fr] gap-x-6 gap-y-2 text-sm text-cream/80">
                    @foreach ($hours as $g)<dt class="whitespace-nowrap font-semibold text-cream">{{ $g['days'] }}</dt><dd class="whitespace-nowrap {{ $g['hours'] === 'Closed' ? 'text-cream/60' : '' }}">{{ $g['hours'] }}</dd>@endforeach
                    <dt class="whitespace-nowrap font-semibold text-teal">Emergencies</dt><dd class="text-teal">24/7 by phone</dd>
                </dl>
                <address class="mt-5 space-y-1 text-sm not-italic text-cream/80">
                    <p><a href="{{ $co['map_url'] }}" target="_blank" rel="noopener" class="hover:text-teal">{{ $co['address']['line1'] }}, {{ $co['address']['line2'] }}</a></p>
                    <p><a href="tel:{{ $co['phone_href'] }}" class="font-semibold text-cream hover:text-teal">{{ $co['phone'] }}</a> · <a href="sms:{{ $co['sms'] }}" class="hover:text-teal">Text us</a></p>
                    <p><a href="mailto:{{ $co['email'] }}" class="hover:text-teal">{{ $co['email'] }}</a></p>
                </address>
            </div>
        </div>

        <div class="mt-14 grid gap-6 rounded-3xl bg-white/5 p-6 ring-1 ring-white/10 sm:p-8 lg:grid-cols-12 lg:items-center">
            <div class="lg:col-span-6"><h2 class="eyebrow text-teal">Seasonal tips &amp; offers</h2><p class="mt-2 text-sm text-cream/70">A short email when it matters: water heater checks before winter, drain care before the holidays, and the occasional coupon. No spam, ever.</p></div>
            <div class="lg:col-span-6">
                @if (session('newsletter'))<p role="status" class="rounded-xl bg-teal/15 px-4 py-3 text-sm font-semibold text-teal">{{ session('newsletter') }}</p>@else
                <form method="post" action="{{ route('newsletter.store') }}" class="flex flex-col gap-2 sm:flex-row">@csrf<input type="text" name="website" tabindex="-1" autocomplete="off" class="hidden"><label for="nl-email" class="sr-only">Email</label><input id="nl-email" name="email" type="email" required autocomplete="email" placeholder="you@email.com" class="input bg-white/10 text-cream ring-white/15 placeholder:text-cream/40 focus:ring-teal"><button class="btn-teal shrink-0" data-busy-label="Joining…">Join the list</button></form>
                @if (isset($errors) && $errors->has('email'))<p class="error text-brass">{{ $errors->first('email') }}</p>@endif
                @endif
            </div>
        </div>
    </div>
    <div class="border-t border-white/10">
        <div class="wrap flex flex-col gap-3 py-6 text-xs text-cream/60 sm:flex-row sm:items-center sm:justify-between">
            <p>© {{ now()->year }} {{ $co['legal'] }} · Orange, California</p>
            <div class="flex flex-wrap gap-x-5 gap-y-2"><a href="{{ $co['review_url'] }}" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 hover:text-teal"><x-icon name="star" class="size-3.5 fill-current text-brass" />Leave a Google review</a><a href="{{ route('privacy') }}" class="hover:text-teal">Privacy policy</a><a href="{{ route('admin.login') }}" class="hover:text-teal">Staff login</a></div>
        </div>
    </div>
</footer>
