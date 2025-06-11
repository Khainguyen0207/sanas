<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the customers.
     */
    public function index()
    {
        Customer::all();

        return admin_template_basic_view('customer.index', [
            'title' => 'Customer',
            'customers' => Customer::all()
        ]);
    }

    /**
     * Show the form for creating a new customer.
     */
    public function create()
    {
        return admin_template_basic_view('customer.edit', [
            'title' => 'Customer',
            'customers' => Customer::all()
        ]);
    }

    /**
     * Store a newly created customer in storage.
     */
    public function store(LoginRequest $request)
    {
        dd($request);
    }

    /**
     * Display the specified customer.
     */
    public function show(Customer $customer)
    {
        return view('admin.customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified customer.
     */
    public function edit(Customer $customer)
    {
        return view('admin.customers.edit', compact('customer'));
    }

    /**
     * Update the specified customer in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'cash' => 'required|numeric|min:0',
            'status' => 'required|in:active,locked',
            'birthday' => 'required|date',
        ]);

        $customer->update($validated);

        return redirect()->route('admin.customers.index')
            ->with('success', 'Customer updated successfully.');
    }

    /**
     * Remove the specified customer from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('admin.customers.index')
            ->with('success', 'Customer deleted successfully.');
    }
}
