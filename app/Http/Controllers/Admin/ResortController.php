<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resort;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ResortController extends Controller
{
    /**
     * Display a listing of the resorts.
     */
    public function index()
    {
        return admin_template_basic_view('resort.index', [
            'title' => 'Resorts',
            'resorts' => Resort::all()
        ]);
    }

    /**
     * Show the form for creating a new resort.
     */
    public function create()
    {
        return admin_template_basic_view('resort.create', [
            'title' => 'Create Resort',
            'customers' => Customer::query()->where('is_partner', 1)->get()
        ]);
    }

    /**
     * Store a newly created resort in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'map' => 'required|string',
            'images' => 'required|array',
            'option_success' => 'required|array',
            'option_error' => 'required|array',
            'general_amenities' => 'required|array',
        ]);
        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if ($image->isValid()) {
                    $fileName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                    $path = $image->storeAs('rooms_images', $fileName, 'public');

                    $publicPath = Storage::url($path);

                    $imagePaths[] = $publicPath;
                }
            }
        }

        if (!empty($imagePaths)) {
            $validated['images'] = json_encode($imagePaths);
        } else {
            $validated['images'] = null;
        }

        $validated['slug'] = Str::slug($validated['name']);

        Resort::create($validated);

        return redirect()->route('admin.resorts.index')
            ->with('success', 'Resort created successfully.');
    }

    /**
     * Display the specified resort.
     */
    public function show(Resort $resort)
    {
        return admin_template_basic_view('resort.edit', [
            'title' => 'Resort Details',
            'resort' => $resort->load(['customer', 'rooms'])
        ]);
    }

    /**
     * Show the form for editing the specified resort.
     */
    public function edit(Resort $resort)
    {
        return admin_template_basic_view('resort.edit', [
            'title' => 'Edit Resort',
            'resort' => $resort,
            'customers' => Customer::query()->where('is_partner', 1)->get()
        ]);
    }

    /**
     * Update the specified resort in storage.
     */
    public function update(Request $request, Resort $resort)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'map' => 'required|string',
            'images' => 'required|array',
            'option_success' => 'nullable|array',
            'option_error' => 'nullable|array',
            'general_amenities' => 'nullable|array',
        ]);


        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if ($image->isValid()) {
                    $fileName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                    $path = $image->storeAs('rooms_images', $fileName, 'public');

                    $publicPath = Storage::url($path);

                    $imagePaths[] = $publicPath;
                }
            }
        }

        if (!empty($imagePaths)) {
            $validated['images'] = json_encode($imagePaths);
        } else {
            $validated['images'] = null;
        }


        $resort->update($validated);

        return redirect()->route('admin.resorts.index')
            ->with('success', 'Resort updated successfully.');
    }

    /**
     * Remove the specified resort from storage.
     */
    public function destroy(Resort $resort)
    {
        $resort->delete();

        return redirect()->route('admin.resorts.index')
            ->with('success', 'Resort deleted successfully.');
    }
}
