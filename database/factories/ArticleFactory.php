<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Author;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $images = [
            'fake1.jpg',
            'fake2.jpeg',
            'fake3.jpeg',
            'fake4.jpg',
        ];
        $randomImage = $images[array_rand($images)];

        return [
            'title'=> fake()->word(),
            'body'=> fake()->paragraph(),
            'image'=> 'images/' . $randomImage,
            'publish_date' => fake()->date(),
            'author_id' => Author::factory(),
        ];
    }
}
