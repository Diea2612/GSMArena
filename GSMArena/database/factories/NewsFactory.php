<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence, // Simulates the title of the news article
            'description' => $this->faker->paragraph, // Simulates a brief description or summary
            'image_url' => $this->faker->imageUrl(), // Simulates a URL to an image associated with the news
            'published_at' => $this->faker->dateTimeThisYear(), // Simulates the published date of the article
        ];
    }
}
