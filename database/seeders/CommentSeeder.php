<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::get()->each(function ($post) {
            Comment::factory()->count(rand(2, 20))->create([
                'user_id' => $post->user_id,
                'post_id' => $post->id,
            ]);
        });
    }
}
