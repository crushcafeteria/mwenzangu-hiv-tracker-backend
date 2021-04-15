<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'              => 'Administrator',
            'email'             => 'admin@gmail.com',
            'password'          => bcrypt('root')
        ]);
        User::factory()->count(50)->create();
    }
}
