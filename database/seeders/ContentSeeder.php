<?php

namespace Database\Seeders;

use App\Models\Content;
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
            Content::factory()->count(rand(2, 5))->create([
                'user_id' => $user->id
            ]);
        });
    }
}
