<x-admin.layout :title="$customer->exists ? 'Edit customer' : 'Add customer'">
    <form method="post" action="{{ $customer->exists ? route('admin.customers.update', $customer) : route('admin.customers.store') }}" class="card grid max-w-3xl gap-4 sm:grid-cols-2">@csrf @if ($customer->exists) @method('patch') @endif
        <x-admin.field label="First name" name="first_name" required><input id="first_name" name="first_name" value="{{ old('first_name', $customer->first_name) }}" required class="input"></x-admin.field>
        <x-admin.field label="Last name" name="last_name" required><input id="last_name" name="last_name" value="{{ old('last_name', $customer->last_name) }}" required class="input"></x-admin.field>
        <x-admin.field label="Phone" name="phone"><input id="phone" name="phone" value="{{ old('phone', $customer->phone) }}" class="input"></x-admin.field>
        <x-admin.field label="Email" name="email"><input id="email" name="email" type="email" value="{{ old('email', $customer->email) }}" class="input"></x-admin.field>
        <x-admin.field label="Service address" name="address" class="sm:col-span-2"><input id="address" name="address" value="{{ old('address', $customer->address) }}" class="input" placeholder="123 Main St, Orange, CA 92865"></x-admin.field>
        <x-admin.field label="Notes" name="notes" class="sm:col-span-2" hint="Internal. Gate codes, pets, parking, water heater model, anything the next technician should know."><textarea id="notes" name="notes" rows="4" class="input">{{ old('notes', $customer->notes) }}</textarea></x-admin.field>
        <label class="flex items-center gap-2 text-sm sm:col-span-2"><input type="checkbox" name="marketing_opt_in" value="1" class="check" @checked(old('marketing_opt_in', $customer->marketing_opt_in))>Opted in to marketing emails</label>
        <div class="flex gap-2 sm:col-span-2"><button class="btn-teal">Save</button><a href="{{ $customer->exists ? route('admin.customers.show', $customer) : route('admin.customers.index') }}" class="btn-light">Cancel</a></div>
    </form>
</x-admin.layout>
