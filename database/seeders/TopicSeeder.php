<?php

namespace Database\Seeders;

use App\Models\Topics;
use App\Models\User;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::get()->each(function ($user) {
            Topics::factory()->count(rand(1,2))->create([
                'user_id' => $user->id
            ]);
        });
    }
}
