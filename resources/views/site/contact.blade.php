<x-site.layout title="Contact" description="Contact Do It Right Plumbers: 2284 N Glassell St, Orange, CA 92865. Call (714) 485-8449, text us, or request a quote online.">
@php($co = config('company'))
<section class="wrap grid gap-12 py-16 lg:grid-cols-12 lg:py-24">
    <div class="lg:col-span-5">
        <p class="eyebrow">Contact</p>
        <h1 class="h-display mt-5">A real person <em class="italic font-medium text-teal-deep">answers</em>.</h1>
        <p class="lede mt-5">Questions, quotes, or a truck today. Call, text or send the form and our Orange office will get back to you within the hour during dispatch hours.</p>
        <ul class="mt-10 space-y-6 text-sm">
            <li class="flex gap-4"><span class="inline-flex size-11 shrink-0 items-center justify-center rounded-2xl bg-teal-soft text-teal-deep"><x-icon name="phone" class="size-5" /></span><div><p class="font-semibold">Call or text</p><p class="mt-1 text-stone"><a href="tel:{{ $co['phone_href'] }}" class="hover:text-navy">{{ $co['phone'] }}</a> · <a href="sms:{{ $co['sms'] }}" class="hover:text-navy">Send a text</a></p><p class="mt-1 text-xs text-stone">Emergencies answered 24/7.</p></div></li>
            <li class="flex gap-4"><span class="inline-flex size-11 shrink-0 items-center justify-center rounded-2xl bg-teal-soft text-teal-deep"><x-icon name="map" class="size-5" /></span><div><p class="font-semibold">Our shop</p><p class="mt-1 text-stone">{{ $co['address']['line1'] }}, {{ $co['address']['line2'] }}<br><a href="{{ $co['map_url'] }}" target="_blank" rel="noopener" class="link-arrow mt-1 text-teal-deep">Directions <x-icon name="arrow" /></a></p></div></li>
            <li class="flex gap-4"><span class="inline-flex size-11 shrink-0 items-center justify-center rounded-2xl bg-teal-soft text-teal-deep"><x-icon name="mail" class="size-5" /></span><div><p class="font-semibold">Email</p><p class="mt-1 text-stone"><a href="mailto:{{ $co['email'] }}" class="hover:text-navy">{{ $co['email'] }}</a></p></div></li>
            <li class="flex gap-4"><span class="inline-flex size-11 shrink-0 items-center justify-center rounded-2xl bg-teal-soft text-teal-deep"><x-icon name="clock" class="size-5" /></span><div><p class="font-semibold">Dispatch hours</p><div class="mt-1 grid grid-cols-[auto_1fr] gap-x-6 gap-y-1 text-stone">@foreach ($hours as $d => $h)<span>{{ $d }}</span><span>{{ $h }}</span>@endforeach</div></div></li>
        </ul>
        <div class="mt-8 flex gap-2">@foreach ($co['social'] as $i => $u)<a href="{{ $u }}" target="_blank" rel="noopener" class="inline-flex size-10 items-center justify-center rounded-full ring-1 ring-line hover:bg-navy hover:text-cream" aria-label="{{ ucfirst($i) }}"><x-icon :name="$i" class="size-4" /></a>@endforeach<span class="ml-2 self-center text-sm text-stone">{{ $co['handle'] }}</span></div>
    </div>
    <div class="lg:col-span-7">
        <form method="post" action="{{ route('contact.store') }}" class="card grid gap-5 sm:grid-cols-2 sm:p-10">
            @csrf<input type="text" name="website" tabindex="-1" autocomplete="off" class="hidden">
            <h2 class="font-display text-3xl font-semibold sm:col-span-2">Request a quote</h2>
            <x-site.field label="Your name" name="name" required><input id="name" name="name" value="{{ old('name') }}" required class="input" autocomplete="name"></x-site.field>
            <x-site.field label="Email" name="email" required><input id="email" name="email" type="email" value="{{ old('email') }}" required class="input" autocomplete="email"></x-site.field>
            <x-site.field label="Phone" name="phone"><input id="phone" name="phone" type="tel" value="{{ old('phone') }}" class="input" autocomplete="tel" placeholder="(714) 000-0000"></x-site.field>
            <x-site.field label="What do you need help with?" name="service"><select id="service" name="service" class="input"><option value="">Select one…</option>@foreach (config('company.interests') as $s)<option @selected(old('service') === $s)>{{ $s }}</option>@endforeach</select></x-site.field>
            <x-site.field label="Service address" name="address" class="sm:col-span-2" hint="Street and city is enough. Helps us quote travel and check we cover you."><input id="address" name="address" value="{{ old('address') }}" class="input" autocomplete="street-address" placeholder="123 Main St, Orange"></x-site.field>
            <x-site.field label="Tell us what is going on" name="message" required class="sm:col-span-2"><textarea id="message" name="message" rows="5" required class="input" placeholder="What you are seeing, how long it has been happening, and anything you have already tried.">{{ old('message') }}</textarea></x-site.field>
            <div class="flex flex-wrap items-center gap-4 sm:col-span-2"><button class="btn-teal btn-lg">Send request</button><span class="text-sm text-stone">Or <a href="{{ route('book') }}" class="font-semibold text-teal-deep hover:underline">book an arrival window</a> right now.</span></div>
        </form>
    </div>
</section>
</x-site.layout>
