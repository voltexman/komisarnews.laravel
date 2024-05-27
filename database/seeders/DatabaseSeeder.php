<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PostSeeder::class,
            OrderSeeder::class,
        ]);

        // $posts = \App\Models\Post::factory(20)->create();

        // foreach ($posts as $post) {
        //     $imageUrl = 'https://www.loremflickr.com/640/480';
        //     $post->addMediaFromUrl($imageUrl)->toMediaCollection('posts');
        //     $post->tags()->attach(fake()->word);
        // }

        // \App\Models\Order::factory(50)->create();
        // \App\Models\Feedback::factory(0)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
