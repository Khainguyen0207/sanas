<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Resort;
use App\Models\Room;
use Illuminate\Http\Request;

class ResortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('theme.room.index', [
            'resorts' => Resort::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Resort $resort)
    {
        return view('theme.room.room-details', [
            'resort' => $resort,
            'rooms' => $resort->rooms()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
