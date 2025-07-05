<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PostSeeder::class,
            OrderSeeder::class,
            FeedbackSeeder::class,
            SubscribeSeeder::class,
        ]);
    }
}
