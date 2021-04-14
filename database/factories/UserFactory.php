<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->name,
            'email'             => $this->faker->unique()->safeEmail,
            'telephone'         => '07' . rand(20, 54) . rand(111, 999) . rand(111, 999),
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
            'next_appointment'  => now()->addWeeks(rand(2, 20)),
            'assigned_clinic'   => $this->faker->buildingNumber,
            'viral_load'        => $this->faker->numberBetween(20, 5000),
            'password'          => bcrypt('password')
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
