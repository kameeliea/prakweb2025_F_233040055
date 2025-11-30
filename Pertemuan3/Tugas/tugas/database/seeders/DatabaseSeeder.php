<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat 5 user
        $users = \App\Models\User::factory(5)->create();

        // Buat 2 category
        $categories = \App\Models\Category::factory(2)->create();

        // Buat 10 post, tapi pastikan user_id & category_id valid dari yang sudah dibuat
        \App\Models\Post::factory(10)->create()->each(function ($post) use ($users, $categories) {
            $post->user_id = $users->random()->id;
            $post->category_id = $categories->random()->id;
            $post->save();
        });
    }
}
