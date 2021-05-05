<?php

namespace Database\Factories;

use App\Models\Topics;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Topics::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'text'  => $this->faker->sentence(rand(1,2), true),
            'media' => 'http://placehold.it/800x500'
        ];
    }
}
