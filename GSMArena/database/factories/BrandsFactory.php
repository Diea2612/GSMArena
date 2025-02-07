<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Devices;
use App\Models\Brands;

class DevicesFactory extends Factory
{
    protected $model = Devices::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,  // Generate a random word for the device name
            'brand_id' => Brands::inRandomOrder()->first()->id,  // Pick a random brand from the Brands table
            'model' => $this->faker->word,  // Generate a random word for the model
            'price' => $this->faker->numberBetween(100, 2000),  // Generate a random number for the price between 100 and 2000
            'description' => $this->faker->paragraph,  // Generate a random paragraph for the description
            // Add other fields as needed
        ];
    }
}
