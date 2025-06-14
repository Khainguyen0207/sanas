<?php

namespace Database\Seeders;

use App\Models\Resort;
use App\Models\Room;
use Illuminate\Database\Seeder;

class ResortAndRoomSeeder extends Seeder
{
    public function run(): void
    {
        // Create 10 resorts
        $resorts = Resort::factory()->count(10)->create();

        // For each resort, create 3 rooms
        foreach ($resorts as $resort) {
            Room::factory()->count(3)->create([
                'resort_id' => $resort->id
            ]);
        }
    }
} 