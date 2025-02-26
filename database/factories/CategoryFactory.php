<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array

    {
        $tag = $this->faker->words(2, true);
        return [
            "category" => ucfirst($tag),
            'slug' => Str::slug($tag),
            "description" => fake()->sentence()
        ];
    }
}
