<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reviews>
 */
class ReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence, // Simulates the title of the review
            'image_url' => $this->faker->imageUrl(), // Simulates a URL to an image for the review
            'content' => $this->faker->paragraphs(2, true), // Optional: Simulates the content of the review
        ];
    }
}
