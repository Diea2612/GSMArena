<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence, // Simulates a title for featured devices or articles
            'image_url' => $this->faker->imageUrl(), // Simulates a URL to an image associated with the featured item
            'description' => $this->faker->paragraph, // Optional: Simulates a description or excerpt
        ];
    }
}
