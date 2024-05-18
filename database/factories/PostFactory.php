<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(30),
            'title' => fake()->text(30),
            'slug' => fake()->slug(),
            'body' => fake()->paragraph(80),
            'category' => Arr::random(['Статті', 'Міста']),
            'is_published' => fake()->boolean(),
            'is_indexing' => fake()->boolean(),
            'description' => fake()->text(100),
        ];
    }
}
