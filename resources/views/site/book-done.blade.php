<x-site.layout title="Booking received">
<section class="wrap max-w-2xl py-20 text-center lg:py-28">
    <span class="mx-auto inline-flex size-16 items-center justify-center rounded-full bg-sage text-sage-deep"><x-icon name="check" class="size-8" /></span>
    <p class="eyebrow mt-8 justify-center">Request received</p>
    <h1 class="h-display mt-4">Thanks, {{ $appointment->customer->first_name }}.</h1>
    <p class="lede mt-5">We have your request for <strong class="text-navy">{{ $appointment->type?->name ?? 'a service visit' }}</strong> on <strong class="text-navy">{{ $appointment->starts_at->format('l, F j') }}</strong> between <strong class="text-navy">{{ $appointment->starts_at->format('g:i A') }} and {{ $appointment->ends_at->format('g:i A') }}</strong>. The office will confirm by email shortly.</p>
    <div class="card mt-10 text-left"><dl class="grid gap-4 text-sm sm:grid-cols-2"><div><dt class="label">Job reference</dt><dd class="font-mono font-semibold">{{ $appointment->reference }}</dd></div><div><dt class="label">Status</dt><dd><span class="chip tone-amber">Pending confirmation</span></dd></div><div><dt class="label">Service address</dt><dd>{{ $appointment->addressLine() ?: '—' }}</dd></div><div><dt class="label">Need to change it?</dt><dd><a href="{{ $appointment->manageUrl() }}" class="font-semibold text-teal-deep hover:underline">Manage this visit</a></dd></div></dl></div>
    <p class="mt-6 text-sm text-stone">Before we arrive: clear the area around the problem, and keep pets in another room. Your technician will text when they are on the way.</p>
    <div class="mt-8 flex flex-wrap justify-center gap-3"><a href="{{ route('home') }}" class="btn-ghost">Back to home</a><a href="{{ route('blog') }}" class="btn-light">Read our tips</a></div>
</section>
</x-site.layout>
