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
        $types = ['TEXT', 'VIDEO'];
        $type = $types[rand(0, 1)];

        $content = [
            'title' => $this->faker->sentence(rand(3, 8), true),
            'text'  => $this->faker->paragraphs(rand(1, 9), true),
            'media' => 'http://placehold.it/800x500',
            'type'  => $type
        ];

        if ($type == 'VIDEO') {
            $content['media'] = 'https://www.youtube.com/watch?v=MKNFW0YwDYw';
        }

        return $content;
    }
}

