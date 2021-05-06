<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::get()->each(function ($user) {
            Topic::get()->each(function($topic) use (&$user){
                Content::factory()->count(rand(2, 5))->create([
                    'user_id' => $user->id,
                    'topic_id' => $topic->id
                ]);
            });
        });
    }
}
