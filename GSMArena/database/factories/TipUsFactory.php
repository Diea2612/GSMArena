<?php

namespace Database\Factories;

use App\Models\TipUs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TipUs>
 */
class TipUsFactory extends Factory
{
    protected $model = TipUs::class;  // Define the model associated with this factory

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject' => $this->faker->sentence,          // Random sentence for the subject
            'share' => $this->faker->paragraphs(3, true), // Random paragraphs for the shared tip content
            'captcha' => '42',                            // Static CAPTCHA value (since it's always '42')
        ];
    }
}
