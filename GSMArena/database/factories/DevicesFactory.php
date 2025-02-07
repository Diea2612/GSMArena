<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Devices;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Devices>
 */
class DevicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,                 // Example: 'Galaxy S21'
            'brand' => $this->faker->company,             // Example: 'Samsung'
            'model' => $this->faker->word,                 // Example: 'SM-G991B'
            'price' => $this->faker->numberBetween(100, 2000), // Example: 999
            'screen_size' => $this->faker->randomFloat(1, 4, 7), // Example: 6.2
            'battery_capacity' => $this->faker->numberBetween(1000, 5000), // Example: 4000
            'ram' => $this->faker->numberBetween(2, 16),    // Example: 8
            'storage' => $this->faker->numberBetween(16, 512), // Example: 128
            'camera' => $this->faker->word,                 // Example: 'Quad'
            'processor' => $this->faker->word,              // Example: 'Snapdragon 888'
            'release_date' => $this->faker->date,           // Example: '2023-09-15'
            'description' => $this->faker->paragraph,       // Example: 'This is a high-end smartphone...'
        ];
    }
}
