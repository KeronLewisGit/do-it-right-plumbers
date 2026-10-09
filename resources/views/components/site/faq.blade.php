@props(['items'])
<div {{ $attributes->merge(['class' => 'divide-y divide-line rounded-3xl bg-white ring-1 ring-line']) }} data-accordion>
    @foreach ($items as $i => $f)
        <details class="group px-6 py-5" @if ($i === 0) open @endif>
            <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-xl font-medium text-navy">{{ $f['q'] }}<x-icon name="chevron-down" class="size-5 shrink-0 text-teal transition group-open:rotate-180" /></summary>
            <p class="mt-3 text-sm leading-relaxed text-stone">{{ $f['a'] }}</p>
        </details>
    @endforeach
</div>
