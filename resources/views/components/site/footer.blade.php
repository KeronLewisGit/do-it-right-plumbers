@php($co = config('company'))
<footer class="mt-24 bg-navy text-cream pipes-bg-light">
    <div class="wrap grid gap-12 py-16 lg:grid-cols-12">
        <div class="lg:col-span-4">
            <div class="flex items-center gap-3"><img src="{{ asset('images/logo.png') }}" alt="{{ $co['name'] }}" class="size-14 rounded-full ring-2 ring-teal"><span class="leading-none"><span class="block font-display text-2xl font-bold">Do It Right</span><span class="mt-1 block text-[10px] font-extrabold uppercase tracking-[0.28em] text-teal">Plumbers</span></span></div>
            <p class="mt-5 max-w-sm text-sm leading-relaxed text-cream/70">{{ $co['strap'] }}. Repipes, water heaters, drains, leaks and water filtration for homes across Orange County, with upfront pricing and a simple promise: {{ strtolower($co['tagline']) }}</p>
            <div class="mt-6 flex flex-wrap gap-2">
                @foreach ($co['social'] as $name => $url)<a href="{{ $url }}" target="_blank" rel="noopener" class="inline-flex size-10 items-center justify-center rounded-full ring-1 ring-white/15 transition hover:bg-teal hover:text-navy hover:ring-teal" aria-label="{{ ucfirst($name) }}"><x-icon :name="$name" class="size-4.5" /></a>@endforeach
            </div>
            @if ($co['license'])<p class="mt-6 text-xs text-cream/50">{{ $co['license'] }} · Licensed, bonded and insured in California.</p>@else<p class="mt-6 text-xs text-cream/50">Licensed, bonded and insured in California.</p>@endif
        </div>
        <div class="grid gap-10 sm:grid-cols-3 lg:col-span-5">
            <div><p class="eyebrow mb-4 text-teal">Services</p><ul class="space-y-2.5 text-sm text-cream/80">@foreach ([['repipes', 'Whole-house repipes'], ['services.show', 'Water heaters', 'water-heaters'], ['services.show', 'Drains & sewer', 'drains-and-sewer'], ['services.show', 'Leak detection', 'leak-detection'], ['services.show', 'Water filtration', 'water-filtration'], ['emergency', 'Emergency plumbing']] as $l)<li><a href="{{ route($l[0], $l[2] ?? []) }}" class="hover:text-teal">{{ $l[1] }}</a></li>@endforeach</ul></div>
            <div><p class="eyebrow mb-4 text-teal">Company</p><ul class="space-y-2.5 text-sm text-cream/80">@foreach ([['about', 'About us'], ['team', 'Our team'], ['reviews', 'Reviews'], ['areas', 'Service areas'], ['blog', 'Plumbing tips'], ['contact', 'Contact'], ['book', 'Book online']] as [$r, $l])<li><a href="{{ route($r) }}" class="hover:text-teal">{{ $l }}</a></li>@endforeach</ul></div>
            <div><p class="eyebrow mb-4 text-teal">Hours</p><ul class="space-y-2.5 text-sm text-cream/80">@foreach (app(\App\Services\Availability::class)->hoursGrouped() as $g)<li class="flex justify-between gap-3"><span>{{ $g['days'] }}</span><span class="{{ $g['hours'] === 'Closed' ? 'text-cream/50' : '' }}">{{ $g['hours'] }}</span></li>@endforeach<li class="flex justify-between gap-3 text-teal"><span>Emergencies</span><span>24/7 by phone</span></li></ul><address class="mt-4 text-sm not-italic text-cream/80"><p>{{ $co['address']['line1'] }}<br>{{ $co['address']['line2'] }}</p><p class="mt-2"><a href="tel:{{ $co['phone_href'] }}" class="hover:text-teal">{{ $co['phone'] }}</a><br><a href="mailto:{{ $co['email'] }}" class="hover:text-teal">{{ $co['email'] }}</a></p></address></div>
        </div>
        <div class="lg:col-span-3">
            <p class="eyebrow mb-4 text-teal">Seasonal tips & offers</p>
            <p class="text-sm text-cream/70">A short email when it matters: water heater checks before winter, drain care before the holidays, and the occasional coupon. No spam, ever.</p>
            @if (session('newsletter'))<p class="mt-4 rounded-xl bg-teal/15 px-4 py-3 text-sm font-semibold text-teal">{{ session('newsletter') }}</p>@else
            <form method="post" action="{{ route('newsletter.store') }}" class="mt-4 flex gap-2">@csrf<input type="text" name="website" tabindex="-1" autocomplete="off" class="hidden"><label for="nl-email" class="sr-only">Email</label><input id="nl-email" name="email" type="email" required placeholder="you@email.com" class="input bg-white/10 text-cream ring-white/15 placeholder:text-cream/40 focus:ring-teal"><button class="btn-teal shrink-0 px-4">Join</button></form>
            @if (isset($errors) && $errors->has('email'))<p class="error text-teal">{{ $errors->first('email') }}</p>@endif
            @endif
            <a href="{{ $co['review_url'] }}" target="_blank" rel="noopener" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-cream/80 hover:text-teal"><x-icon name="star" class="size-4 fill-current text-brass" />Leave us a Google review</a>
        </div>
    </div>
    <div class="border-t border-white/10">
        <div class="wrap flex flex-col gap-3 py-6 text-xs text-cream/50 sm:flex-row sm:items-center sm:justify-between">
            <p>© {{ now()->year }} {{ $co['legal'] }} · {{ $co['address']['line1'] }}, {{ $co['address']['line2'] }}</p>
            <div class="flex gap-5"><a href="{{ route('privacy') }}" class="hover:text-teal">Privacy policy</a><a href="{{ route('admin.login') }}" class="hover:text-teal">Staff login</a></div>
        </div>
    </div>
</footer>
