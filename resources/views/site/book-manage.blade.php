<x-site.layout title="Your visit">
<x-site.page-hero eyebrow="Your visit" :title="e($appointment->type?->name ?? 'Service visit')">
    <div class="card mt-8"><dl class="grid gap-5 text-sm sm:grid-cols-2"><div><dt class="label">When</dt><dd class="font-semibold">{{ $appointment->starts_at->format('l, F j, Y') }}<br>Arrival between {{ $appointment->starts_at->format('g:i A') }} and {{ $appointment->ends_at->format('g:i A') }}</dd></div><div><dt class="label">Status</dt><dd><span class="chip {{ ['pending' => 'tone-amber', 'confirmed' => 'tone-green', 'completed' => 'tone-blue', 'cancelled' => 'tone-red', 'no_show' => 'tone-red'][$appointment->status] }}">{{ $appointment->statusName() }}</span></dd></div>@if ($appointment->provider)<div><dt class="label">Technician</dt><dd>{{ $appointment->provider->name }}</dd></div>@endif<div><dt class="label">Job reference</dt><dd class="font-mono">{{ $appointment->reference }}</dd></div><div class="sm:col-span-2"><dt class="label">Service address</dt><dd>{{ $appointment->addressLine() ?: '—' }}</dd></div></dl></div>
    @if ($appointment->isOpen())
        <div class="card mt-5"><h2 class="font-display text-2xl font-semibold">Need to change it?</h2><p class="mt-2 text-sm text-stone">To move the window, call us on {{ config('company.phone') }} and we will find another one. If you no longer need the visit, cancel below so we can offer the truck to someone else.</p>
            <form method="post" action="{{ route('book.cancel', $appointment->manage_token) }}" class="mt-5 flex flex-col gap-3 sm:flex-row" onsubmit="return confirm('Cancel this visit?')">@csrf<input name="reason" class="input" placeholder="Reason (optional)"><button class="btn-rust shrink-0">Cancel visit</button></form></div>
    @else
        <div class="mt-6"><a href="{{ route('book') }}" class="btn-teal">Book a new visit</a></div>
    @endif
</x-site.page-hero>
</x-site.layout>
