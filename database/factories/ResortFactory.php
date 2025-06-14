<?php

namespace Database\Factories;

use App\Models\Resort;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ResortFactory extends Factory
{
    protected $model = Resort::class;

    public function definition(): array
    {
        $name = $this->faker->company() . ' Resort';

        $successOptions = [
            'wifi',
            'pool',
            'spa',
            'gym',
            'restaurant',
            'bar',
            'parking'
        ];

        $errorOptions = [
            'no_wifi',
            'no_pool',
            'no_spa',
            'no_gym',
            'no_restaurant',
            'no_bar',
            'no_parking'
        ];

        $generalAmenities = [
            '24h_front_desk',
            'concierge',
            'room_service',
            'laundry',
            'business_center',
            'meeting_rooms',
            'airport_shuttle'
        ];

        return [
            'customer_id' => Customer::factory(),
            'name' => $name,
            'slug' => Str::slug($name),
            'address' => $this->faker->address(),
            'map' => 'OK',
            'images' => [
                'resorts/resort1.jpg',
                'resorts/resort2.jpg',
                'resorts/resort3.jpg'
            ],
            'room_amenities' => [1, 2],
            'option_success' => $this->faker->randomElements($successOptions, $this->faker->numberBetween(3, 7)),
            'option_error' => $this->faker->randomElements($errorOptions, $this->faker->numberBetween(1, 3)),
            'general_amenities' => $this->faker->randomElements($generalAmenities, $this->faker->numberBetween(3, 7)),
        ];
    }
}
