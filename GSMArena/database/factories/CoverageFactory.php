<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Coverage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coverage>
 */
class CoverageFactory extends Factory
{
    protected $model = Coverage::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'country' => $this->faker->country(),
            'band_2g' => $this->faker->boolean(),
            'band_3g' => $this->faker->boolean(),
            'band_4g' => $this->faker->boolean(),
            'band_5g' => $this->faker->boolean(),
            'info_email' => 'info@gsmarena.com',
        ];
    }
}
