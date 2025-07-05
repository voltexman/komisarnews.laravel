<?php

namespace Database\Factories;

use App\Enums\Order\HairColors;
use App\Enums\Order\OrderPurpose;
use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'purpose' => fake()->randomElement(OrderPurpose::all()),
            'name' => fake()->optional()->name(),
            'city' => fake()->city(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->unique()->phoneNumber(),
            'hair_weight' => fake()->optional()->numberBetween(80, 400),
            'hair_length' => fake()->numberBetween(50, 500),
            'age' => fake()->optional()->numberBetween(18, 60),
            'color' => fake()->randomElement(HairColors::all()),
            // 'hair_options' => fake()->array,
            'description' => fake()->optional()->text(),
            'status' => fake()->randomElement(OrderStatus::all()),
        ];
    }
}
