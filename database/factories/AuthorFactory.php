<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    protected $model = Author::class;

    
    public function definition(): array
    {

        $images = [
            'fake1.jpg',
            'fake2.jpeg',
            'fake3.jpeg',
            'fake4.jpg',
            'fake5.jpeg',
            'fake6.jpg',
        ];
        $randomImage = $images[array_rand($images)];
        
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->name(),
            'job' => $this->faker->jobTitle(),
            'profile_image' => 'images/' . $randomImage,
        ];
    }
}
