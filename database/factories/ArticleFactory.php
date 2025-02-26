<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Support\Str;
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
        $title = $this->faker->sentence();
        return [
            'title' => ucfirst($title),
            'slug' => Str::slug($title),
            'author_id' => Author::factory(),
            'category_id' => Category::factory(),
            'image' => fake()->sentence(2),
            'main_content' => fake()->paragraph(),
            'support_content_1st' => fake()->paragraph(),
            'support_content_2nd' => fake()->paragraph(),
            'summary' => fake()->paragraph(),
            'status' => fake()->randomElement(['draft', 'published', 'archived']),
            'tags' => fake()->randomElements(['general', 'sports', 'foods', 'travels', 'economics', 'politics', 'IT', 'trendings', 'viral'], 4),
            'views' => fake()->randomNumber(5),
            'likes' => fake()->randomNumber(5),
            'published_at' => fake()->dateTimeThisYear(),
        ];
    }
}
