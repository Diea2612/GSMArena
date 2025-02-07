<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'network_technology' => $this->faker->randomElement(['GSM', 'CDMA', 'HSPA', 'EVDO', 'LTE', '5G']),
            '2g_bands' => $this->faker->randomElement(['GSM 850 / 900 / 1800 / 1900']),
            '3g_bands' => $this->faker->randomElement(['HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100']),
            '4g_bands' => $this->faker->randomElement(['1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25, 26, 28, 30']),
            '5g_bands' => $this->faker->randomElement(['1, 2, 3, 5, 7, 8, 12, 20, 25, 26, 28, 30, 38, 40, 41']),
            'speed' => $this->faker->randomElement(['HSPA', 'LTE', '5G', 'EV-DO Rev.A']),
            'launch_announced' => $this->faker->date('Y-m-d', 'now'),
            'launch_status' => $this->faker->randomElement(['Coming soon', 'Released']),
            'dimensions' => $this->faker->randomElement(['163 x 77.6 x 8.3 mm']),
            'weight' => $this->faker->randomFloat(2, 100, 300),  // grams
            'build' => 'Glass front, glass back, titanium frame',
            'sim' => $this->faker->randomElement(['Nano-SIM and eSIM', 'Dual SIM']),
            'display_type' => 'LTPO Super Retina XDR OLED',
            'display_size' => '6.9 inches',
            'display_resolution' => '1320 x 2868 pixels',
            'os' => 'iOS 18',
            'chipset' => 'Apple A18 Pro (3 nm)',
            'cpu' => 'Hexa-core (2x4.04 GHz + 4x2.X GHz)',
            'gpu' => 'Apple GPU (6-core graphics)',
            'memory_internal' => $this->faker->randomElement(['256GB 8GB RAM', '512GB 8GB RAM', '1TB 8GB RAM']),
            'main_camera' => '48 MP (wide), 12 MP (telephoto), 48 MP (ultrawide), TOF 3D LiDAR scanner',
            'selfie_camera' => '12 MP, f/1.9, PDAF, OIS',
            'battery_type' => 'Li-Ion, non-removable',
            'charging' => $this->faker->randomElement(['Wired, PD2.0, 50% in 30 min', '25W wireless (MagSafe)']),
            'colors' => $this->faker->randomElement(['Black Titanium', 'White Titanium', 'Natural Titanium', 'Desert Titanium']),
            'price' => $this->faker->randomFloat(2, 0.01, 2000), // Assuming this as a price range
        ];
    }

    /**
     * Compare three phones
     */
    public function compareThreePhones(): array
    {
        return [
            'phone_1' => $this->definition(),
            'phone_2' => $this->definition(),
            'phone_3' => $this->definition(),
        ];
    }
}
