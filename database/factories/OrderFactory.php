<?php

namespace Database\Factories;

use App\Enums\Order\Colors;
use App\Enums\Order\Goals;
use App\Enums\Order\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'goal' => fake()->randomElement(Goals::all()),
            'name' => fake()->name(),
            'city' => fake()->city(),
            'email' => fake()->unique()->email(),
            'phone' => fake()->unique()->phoneNumber(),
            'hair_weight' => fake()->numberBetween(80, 400),
            'hair_length' => fake()->numberBetween(50, 500),
            'age' => fake()->numberBetween(18, 60),
            'color' => fake()->randomElement(Colors::all()),
            // 'hair_options' => fake()->array,
            'description' => fake()->text(),
            'status' => fake()->randomElement(Status::all()),
        ];
    }
}
