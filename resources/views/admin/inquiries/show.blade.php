<x-admin.layout :title="'Request from '.$inquiry->name">
    <x-slot:actions><a href="{{ route('admin.inquiries.index') }}" class="btn-light btn-sm">All requests</a></x-slot:actions>
    <div class="grid gap-6 lg:grid-cols-3">
        <section class="card lg:col-span-2"><div class="flex flex-wrap items-start justify-between gap-3"><div><p class="eyebrow">{{ $inquiry->service ?: 'General request' }}</p><h2 class="mt-2 font-display text-3xl">{{ $inquiry->name }}</h2><p class="text-sm text-stone">{{ $inquiry->created_at->format('l j F Y, g:i A') }}{{ $inquiry->address ? ' · '.$inquiry->address : '' }}</p></div><x-admin.status :status="$inquiry->status" class="text-sm" /></div>
            <blockquote class="mt-6 whitespace-pre-line rounded-2xl bg-sand p-5 text-navy">{{ $inquiry->message }}</blockquote>
            <div class="mt-5 flex flex-wrap gap-2">@if ($inquiry->email)<a href="mailto:{{ $inquiry->email }}?subject=Re: your request to Do It Right Plumbers" class="btn-teal btn-sm"><x-icon name="mail" class="size-4" />Reply by email</a>@endif @if ($inquiry->phone)<a href="sms:{{ $inquiry->phone }}" class="btn-light btn-sm"><x-icon name="sms" class="size-4" />Text</a><a href="tel:{{ $inquiry->phone }}" class="btn-light btn-sm"><x-icon name="phone" class="size-4" />Call</a>@endif @if ($inquiry->customer)<a href="{{ route('admin.appointments.create', ['customer' => $inquiry->customer_id]) }}" class="btn-navy btn-sm">Book them in</a>@endif</div>
        </section>
        <aside class="space-y-6">
            <form method="post" action="{{ route('admin.inquiries.update', $inquiry) }}" class="card space-y-4">@csrf @method('patch')
                <x-admin.field label="Status" name="status"><select name="status" class="input">@foreach ($statuses as $k => $v)<option value="{{ $k }}" @selected($inquiry->status === $k)>{{ $v }}</option>@endforeach</select></x-admin.field>
                <x-admin.field label="Assigned to" name="assigned_to"><select name="assigned_to" class="input"><option value="">Nobody</option>@foreach ($staff as $u)<option value="{{ $u->id }}" @selected($inquiry->assigned_to === $u->id)>{{ $u->name }}</option>@endforeach</select></x-admin.field>
                <x-admin.field label="Staff notes" name="staff_notes"><textarea name="staff_notes" rows="4" class="input">{{ old('staff_notes', $inquiry->staff_notes) }}</textarea></x-admin.field>
                <button class="btn-navy btn-sm w-full">Save</button>
            </form>
            @if ($inquiry->customer)<section class="card text-sm"><h3 class="font-display text-2xl">Customer record</h3><p class="mt-2"><a href="{{ route('admin.customers.show', $inquiry->customer) }}" class="font-semibold hover:text-teal-deep">{{ $inquiry->customer->fullName() }}</a> · {{ $inquiry->customer->appointments->count() }} job(s)</p></section>@endif
            <form method="post" action="{{ route('admin.inquiries.destroy', $inquiry) }}" onsubmit="return confirm('Delete this enquiry?')" class="text-right">@csrf @method('delete')<button class="text-xs font-semibold text-rust hover:underline">Delete request</button></form>
        </aside>
    </div>
</x-admin.layout>
