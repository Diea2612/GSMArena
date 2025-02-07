<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Videos;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Videos>
 */
class VideosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'video_url' => $this->faker->imageUrl(1280, 720, 'tech', true), // Example: URL to a random video
            'description' => $this->faker->sentence, // Example: 'A sample video showing the smartphone camera quality.'
            'duration' => $this->faker->numberBetween(30, 300), // Example: Duration in seconds (30s to 5 minutes)
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'), // Example: A random date within the last year
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'), // Example: A random date within the last year
        ];
    }
}
