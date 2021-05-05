<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Topics;
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
            $topicID = Topics::get()->random()->id;
            Content::factory()->count(rand(2, 10))->create([
                'user_id' => $user->id,
                'topic_id' => $topicID
            ]);
        });
    }
}
