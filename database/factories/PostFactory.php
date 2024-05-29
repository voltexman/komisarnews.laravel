<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => fake()->sentence(),
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'body' => fake()->paragraph(80),
            'category' => fake()->randomElement(['Статті', 'Міста']),
            'is_published' => fake()->boolean(),
            'is_indexing' => fake()->boolean(),
            'description' => fake()->text(100),
            'tags' => fake()->words(4),
        ];
    }
}
