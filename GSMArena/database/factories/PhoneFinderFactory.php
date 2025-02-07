<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhoneFinder>
 */
class PhoneFinderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word, // Simulates phone name
            'brand' => $this->faker->company, // Simulates brand name
            'model' => $this->faker->word, // Simulates model name
            'specifications' => $this->faker->text, // Simulates phone specifications
        ];
    }
}
