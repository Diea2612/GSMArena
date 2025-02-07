<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Privacy>
 */
class PrivacyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word, // Simulates the title of the privacy policy section
            'content' => $this->faker->paragraphs(3, true), // Simulates the content of the privacy policy
            'last_updated' => $this->faker->date(), // Simulates the last updated date
        ];
    }
}
