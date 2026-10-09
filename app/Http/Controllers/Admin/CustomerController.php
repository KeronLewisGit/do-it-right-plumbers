<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(Request $request): View
    {
        $customers = Customer::withCount('appointments')->withMax('appointments', 'starts_at')
            ->when($request->filled('q'), fn ($q) => $q->where(fn ($w) => $w->where('first_name', 'like', '%'.$request->q.'%')->orWhere('last_name', 'like', '%'.$request->q.'%')->orWhere('email', 'like', '%'.$request->q.'%')->orWhere('phone', 'like', '%'.$request->q.'%')))
            ->orderBy('last_name')->orderBy('first_name')->paginate(30)->withQueryString();

        return view('admin.customers.index', ['customers' => $customers]);
    }

    public function create(): View
    {
        return view('admin.customers.form', ['customer' => new Customer(['source' => 'admin'])]);
    }

    public function store(Request $request): RedirectResponse
    {
        $customer = Customer::create($this->validated($request) + ['source' => 'admin']);

        return redirect()->route('admin.customers.show', $customer)->with('saved', 'Customer added.');
    }

    public function show(Customer $customer): View
    {
        return view('admin.customers.show', ['customer' => $customer->load('appointments.type', 'appointments.provider', 'inquiries')]);
    }

    public function edit(Customer $customer): View
    {
        return view('admin.customers.form', ['customer' => $customer]);
    }

    public function update(Request $request, Customer $customer): RedirectResponse
    {
        $customer->update($this->validated($request));

        return redirect()->route('admin.customers.show', $customer)->with('saved', 'Customer updated.');
    }

    /** @return array<string, mixed> */
    private function validated(Request $request): array
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:80'], 'last_name' => ['required', 'string', 'max:80'],
            'email' => ['nullable', 'email', 'max:160'], 'phone' => ['nullable', 'string', 'max:40'],
            'address' => ['nullable', 'string', 'max:200'],
            'notes' => ['nullable', 'string', 'max:5000'], 'marketing_opt_in' => ['nullable', 'boolean'],
        ]);
        $data['phone'] = Customer::normalisePhone($data['phone'] ?? null);
        $data['marketing_opt_in'] = $request->boolean('marketing_opt_in');

        return $data;
    }
}
