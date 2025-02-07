<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RumorMill>
 */
class RumorMillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word, // Simulates the name of the device or rumor
            'image_url' => $this->faker->imageUrl(), // Simulates a URL to an image associated with the device or rumor
        ];
    }
}
