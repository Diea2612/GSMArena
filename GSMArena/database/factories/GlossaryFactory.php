<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Glossary;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Glossary>
 */
class GlossaryFactory extends Factory
{
    protected $model = Glossary::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $terms = [
            '2G', '3.5mm headphone jack', '3G', '4G', '5G', 'A-GPS', 'AMOLED display',
            'Bluetooth', 'CPU', 'Dual-SIM', 'EDGE', 'GPS', 'LTE', 'NFC', 'RAM', 'Wi-Fi', 'USB', 'VoIP'
        ];

        $categories = [
            '0-9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X'
        ];

        $descriptions = [
            '2G is the second generation of mobile networks.',
            '3G is the third generation of mobile networks.',
            'AMOLED is a display technology used in smartphones.',
            'Bluetooth is a wireless technology for exchanging data.',
            'CPU stands for Central Processing Unit, the brain of the device.',
            'LTE is a standard for high-speed wireless communication.',
            'RAM is Random Access Memory, used for storing data temporarily.'
        ];

        return [
            'term' => $this->faker->randomElement($terms),
            'category' => $this->faker->randomElement($categories),
            'description' => $this->faker->randomElement($descriptions),
            'link' => $this->faker->url // Simulating the link to the category page
        ];
    }
}
