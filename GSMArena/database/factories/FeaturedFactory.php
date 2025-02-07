<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Featured>
 */
class FeaturedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,           // Generate a random title
            'description' => $this->faker->paragraph,    // Generate a random description
            'image_url' => $this->faker->imageUrl(),     // Generate a random image URL
        ];
    }
}
