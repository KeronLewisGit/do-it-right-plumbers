<x-admin.layout title="Hours & dispatch">
    <form method="post" action="{{ route('admin.settings.update') }}" class="grid max-w-4xl gap-6 lg:grid-cols-2">@csrf @method('put')
        <section class="card"><h2 class="font-display text-2xl">Dispatch hours</h2><p class="mt-1 text-sm text-stone">Shown on the website and used to generate online arrival windows. Emergencies outside these hours are taken by phone.</p>
            <div class="mt-5 space-y-3">@foreach ($days as $key => $label)@php($h = $hours[$key] ?? null)<div class="grid grid-cols-[6rem_1fr_1fr_auto] items-center gap-2 text-sm" x-data="{ closed: {{ $h ? 'false' : 'true' }} }"><span class="font-semibold">{{ $label }}</span><input type="time" name="hours[{{ $key }}][open]" value="{{ old("hours.$key.open", $h[0] ?? '07:00') }}" class="input input-sm" :disabled="closed"><input type="time" name="hours[{{ $key }}][close]" value="{{ old("hours.$key.close", $h[1] ?? '19:00') }}" class="input input-sm" :disabled="closed"><label class="flex items-center gap-1.5 text-xs"><input type="checkbox" name="hours[{{ $key }}][closed]" value="1" x-model="closed" class="check">Closed</label></div>@endforeach</div>
        </section>
        <section class="card space-y-4"><h2 class="font-display text-2xl">Online booking rules</h2>
            <x-admin.field label="Arrival window size (minutes)" name="slot_minutes" hint="How often windows start."><select name="slot_minutes" class="input">@foreach ([15, 20, 30, 45, 60] as $m)<option value="{{ $m }}" @selected((int) old('slot_minutes', $booking['slot_minutes']) === $m)>{{ $m }}</option>@endforeach</select></x-admin.field>
            <x-admin.field label="Trucks (jobs at the same time)" name="crews" hint="A window stays open online until this many jobs overlap it."><input name="crews" type="number" min="1" max="20" value="{{ old('crews', $booking['crews']) }}" class="input"></x-admin.field>
            <x-admin.field label="Minimum notice (hours)" name="lead_hours"><input name="lead_hours" type="number" min="0" max="168" value="{{ old('lead_hours', $booking['lead_hours']) }}" class="input"></x-admin.field>
            <x-admin.field label="How far ahead customers can book (days)" name="horizon_days"><input name="horizon_days" type="number" min="7" max="365" value="{{ old('horizon_days', $booking['horizon_days']) }}" class="input"></x-admin.field>
            <x-admin.field label="Notification email" name="notify" hint="New bookings and quote requests are sent here."><input name="notify" type="email" value="{{ old('notify', $booking['notify']) }}" class="input"></x-admin.field>
            <button class="btn-teal">Save settings</button>
        </section>
    </form>
</x-admin.layout>
