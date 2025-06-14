<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\Resort;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition(): array
    {
        $roomTypes = [
            'Deluxe Room',
            'Executive Suite',
            'Family Room',
            'Presidential Suite',
            'Standard Room',
            'Ocean View Room',
            'Garden View Room',
            'Mountain View Room',
            'Pool View Room',
            'Beachfront Room'
        ];

        $amenities = [
            'wifi',
            'tv',
            'air_conditioning',
            'minibar',
            'safe',
            'balcony'
        ];

        return [
            'resort_id' => Resort::factory(),
            'name' => $this->faker->randomElement($roomTypes),
            'price' => $this->faker->numberBetween(100, 1000),
            'quantity' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->paragraph(),
            'images' => [
                'rooms/room1.jpg',
                'rooms/room2.jpg',
                'rooms/room3.jpg'
            ],
            'room_amenities' => $this->faker->randomElements($amenities, $this->faker->numberBetween(2, 6)),
            'number_of_adults' => $this->faker->numberBetween(1, 4),
            'number_of_children' => $this->faker->numberBetween(0, 3),
        ];
    }
} 