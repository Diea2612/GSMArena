<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deals>
 */
class DealsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'market' => $this->faker->randomElement(['United States', 'United Kingdom', 'Europe', 'International', 'Canada']),
            'phone_model' => $this->faker->word . ' ' . $this->faker->word, // Example: Samsung Galaxy S24
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 100, 1000), // Random price between 100 and 1000
            'image_url' => $this->faker->imageUrl(), // Random image URL
            'price_history' => $this->generatePriceHistory(), // Function to generate price history
        ];
    }

    /**
     * Generate a sample price history.
     *
     * @return array
     */
    protected function generatePriceHistory(): array
    {
        $prices = [];
        $startDate = now()->subMonths(6);
        $endDate = now();
        
        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            $prices[] = [
                'date' => $date->format('Y-m-d'),
                'price' => $this->faker->randomFloat(2, 500, 900), // Random price between 500 and 900
            ];
        }

        return $prices;
    }
}
