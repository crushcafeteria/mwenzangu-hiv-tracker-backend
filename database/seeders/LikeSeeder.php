<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::get()->each(function ($post) {
            Like::factory()->count(rand(2, 5))->create([
                'user_id' => $post->user_id,
                'post_id' => $post->id,
            ]);
        });
    }
}
