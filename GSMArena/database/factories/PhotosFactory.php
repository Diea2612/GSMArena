<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Photos;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photos>
 */
class PhotosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'device_id' => $this->faker->numberBetween(1, 100), // Example: Foreign key to Devices table
            'photo_url' => $this->faker->imageUrl(800, 600, 'nature', true), // Example: URL to a random image
            'description' => $this->faker->sentence, // Example: 'A sample photo of a smartphone.'
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'), // Example: A random date within the last year
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'), // Example: A random date within the last year
        ];
    }
}
