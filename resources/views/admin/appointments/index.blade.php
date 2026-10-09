<x-admin.layout title="Jobs">
    <x-slot:actions><a href="{{ route('admin.calendar') }}" class="btn-light btn-sm">Calendar</a><a href="{{ route('admin.appointments.create') }}" class="btn-teal btn-sm">New job</a></x-slot:actions>
    <form class="mb-5 flex flex-wrap gap-2">
        <input name="q" value="{{ request('q') }}" placeholder="Search name, phone, email, reference" class="input input-sm max-w-xs">
        <select name="status" class="input input-sm max-w-40"><option value="">Any status</option>@foreach ($statuses as $k => $v)<option value="{{ $k }}" @selected(request('status') === $k)>{{ $v }}</option>@endforeach</select>
        <select name="provider" class="input input-sm max-w-48"><option value="">Any technician</option>@foreach ($providers as $p)<option value="{{ $p->id }}" @selected((int) request('provider') === $p->id)>{{ $p->name }}</option>@endforeach</select>
        <select name="range" class="input input-sm max-w-36"><option value="upcoming">Upcoming</option><option value="past" @selected(request('range') === 'past')>Past</option></select>
        <button class="btn-navy btn-sm">Filter</button>
    </form>
    <div class="card overflow-x-auto p-0"><table class="table min-w-[800px]"><thead><tr><th>Window</th><th>Customer</th><th>Job</th><th>Technician</th><th>Source</th><th>Status</th><th></th></tr></thead><tbody>
        @forelse ($appointments as $a)<tr><td class="whitespace-nowrap"><span class="font-semibold">{{ $a->starts_at->format('D j M') }}</span><span class="block text-xs text-stone">{{ $a->starts_at->format('g:i A') }} · {{ $a->durationMinutes() }} min</span></td><td><a href="{{ route('admin.customers.show', $a->customer) }}" class="font-semibold hover:text-teal-deep">{{ $a->customer->fullName() }}</a><span class="block text-xs text-stone">{{ $a->customer->phone }}</span></td><td>{{ $a->type?->name ?? '—' }}</td><td>{{ $a->provider?->name ?? '—' }}</td><td class="text-xs text-stone">{{ ucfirst($a->source) }}</td><td><x-admin.status :status="$a->status" /></td><td class="text-right"><a href="{{ route('admin.appointments.show', $a) }}" class="btn-light btn-sm">Open</a></td></tr>
        @empty<tr><td colspan="7" class="text-stone">No jobs match.</td></tr>@endforelse
    </tbody></table></div>
    <div class="mt-5">{{ $appointments->links() }}</div>
</x-admin.layout>
