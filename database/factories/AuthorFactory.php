<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array

    {
        $name = $this->faker->name();
        return [
            "name" => ucfirst($name),
            "slug" => Str::slug($name),
            "email" => fake()->email(),
            "bio" => fake()->sentence(8),
            "profile_picture" => ucfirst($name)
        ];
    }
}
