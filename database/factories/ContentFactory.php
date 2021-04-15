<?php

namespace Database\Factories;

use App\Models\Content;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Content::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'text'  => $this->faker->sentence(rand(7, 30), true),
                'topic'  => $this->faker->sentence(rand(1, 5), true),
                'category'  => $this->faker->sentence(rand(7, 10), true),
                'media' => 'http://placehold.it/800x500'

        ];
    }
}

