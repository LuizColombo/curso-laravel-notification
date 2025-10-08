<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title' => fake()->unique()->word(),
            'body' => fake()->paragraph(),
        ];
    }
}
