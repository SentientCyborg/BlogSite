<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(50),
            'subtitle' => fake()->sentences(2, true),
            'text' => fake()->paragraphs(2, true),
            'user_id' => User::factory()->has(Post::factory()) //TODO: Factory creating an extra post for some reason.
        ];
    }
}

