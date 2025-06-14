<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Resort;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the rooms.
     */
    public function index()
    {
        return admin_template_basic_view('room.index', [
            'title' => 'Rooms',
            'rooms' => Room::with('resort')->get()
        ]);
    }

    /**
     * Show the form for creating a new room.
     */
    public function create()
    {
        return admin_template_basic_view('room.create', [
            'title' => 'Create Room',
            'resorts' => Resort::all()
        ]);
    }

    /**
     * Store a newly created room in storage.
     */
    public function store(Request $request)
    {
        // 1. Xác thực dữ liệu, bao gồm cả tệp ảnh
        $validated = $request->validate([
            'resort_id' => 'required|exists:resorts,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'description' => 'required|string',
            'images' => 'required|array', // Vẫn là array
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Xác thực từng tệp trong mảng
            'room_amenities' => 'required|array',
            'number_of_adults' => 'required|integer|min:1',
            'number_of_children' => 'required|integer|min:0',
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

        // 4. Tạo bản ghi Room
        Room::query()->create($validated);

        return redirect()->route('admin.rooms.index')
            ->with('success', 'Room created successfully.');
    }

    /**
     * Display the specified room.
     */
    public function show(Room $room)
    {
        return admin_template_basic_view('rooms.show', [
            'title' => 'Room Details',
            'room' => $room->load('resort')
        ]);
    }

    /**
     * Show the form for editing the specified room.
     */
    public function edit(Room $room)
    {
        return admin_template_basic_view('room.edit', [
            'title' => 'Edit Room',
            'room' => $room,
            'resorts' => Resort::all()
        ]);
    }

    /**
     * Update the specified room in storage.
     */
    public function update(Request $request, Room $room)
    {
        $validated = $request->validate([
            'resort_id' => 'required|exists:resorts,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'description' => 'required|string',
            'images' => 'required|array',
            'room_amenities' => 'required|array',
            'number_of_adults' => 'required|integer|min:1',
            'number_of_children' => 'required|integer|min:0',
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

        $room->update($validated);

        return redirect()->route('admin.rooms.index')
            ->with('success', 'Room updated successfully.');
    }

    /**
     * Remove the specified room from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('admin.rooms.index')
            ->with('success', 'Room deleted successfully.');
    }
}
