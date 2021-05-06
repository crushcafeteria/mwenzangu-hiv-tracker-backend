<?php

namespace Database\Seeders;

use App\Models\Friend;
use App\Models\User;
use Illuminate\Database\Seeder;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::get()->each(function ($user) {
            $friend = User::inRandomOrder()->first();
            Friend::factory()->count(rand(2, 5))->create([
                'friender' => $user->id,
                'friended' => $friend->id
            ]);
        });
    }
}
