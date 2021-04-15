<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
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
            $userID = User::get()->random()->id;
            Comment::factory()->count(rand(2, 5))->create([
                'user_id' => $userID,
                'post_id' => $post->id,
            ]);
        });
    }
}
