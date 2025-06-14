<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CustomerStatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CustomerRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the customers.
     */
    public function index()
    {
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
        $title = 'Create Customer';

        return admin_template_basic_view('customer.create', [
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created customer in storage.
     */
    public function store(CustomerRequest $request)
    {
        $data = $request->validated();

        $imagePaths = [];

        if ($request->hasFile('avatar')) {
            foreach ($request->file('avatar') as $image) {
                if ($image->isValid()) {
                    $fileName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                    $path = $image->storeAs('rooms_images', $fileName, 'public');

                    $publicPath = Storage::url($path);

                    $imagePaths[] = $publicPath;
                }
            }
        }

        if (!empty($imagePaths)) {
            $data['avatar'] = json_encode($imagePaths);
        } else {
            $data['avatar'] = null; // hoặc json_encode([]) nếu muốn mảng rỗng
        }

        Customer::query()->create($data);

        return redirect()->route('admin.customers.index')->with([
            'success' => 'Customer created successfully.'
        ]);
    }

    /**
     * Display the specified customer.
     */
    public function show(Customer $customer)
    {
        return admin_template_basic_view('customer.edit', compact('customer'));
    }

    /**
     * Show the form for editing the specified customer.
     */
    public function edit(Customer $customer)
    {
        return admin_template_basic_view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified customer in storage.
     */
    public function update(CustomerRequest $request, Customer $customer)
    {
        $data = $request->validated();

        if ($request->hasFile('avatar')) {
           $image = $request->file('avatar');
            if ($image->isValid()) {
                $fileName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                $path = $image->storeAs('rooms_images', $fileName, 'public');

                $publicPath = Storage::url($path);

                $customer->avatar = $publicPath;
            }
        }
        if (isset($data['password'])) {
            $customer->password = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $customer->fill($data);

        if ($customer->isDirty()) {
            $customer->save();
        }

        return redirect()->route('admin.customers.index')->with([
            'success' => 'Customer updated successfully.'
        ]);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('admin.customers.index')->with('success', 'Customer deleted successfully.');
    }
}
