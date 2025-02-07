<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tools;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tools>
 */
class ToolsFactory extends Factory
{
    protected $model = Tools::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Compare', 
                'Photo and Video Compare', 
                'Battery Life Table', 
                'GSMArena Labs', 
                'Coverage', 
                'FAQ', 
                'Glossary'
            ]),
            'description' => $this->faker->randomElement([
                'With our compare tool you are able to dynamically examine the specs of a given device side-by-side with any of the extensive selection available in our database.',
                'Our photo and video compare tools are designed to measure the performance of cameraphones under identical, controlled conditions.',
                'The GSMArena battery life tool puts together the stats for all battery life tests we have done, making it easy to compare different models.',
                'GSMArena Labs gives you an inside look at the extensive testing we perform, from audio fidelity to battery performance.',
                'Our comprehensive coverage map helps you find which frequency bands work in which countries.',
                'Our Frequently Asked Questions section provides info on how to use the site and its tools, with a video walkthrough of the site available.',
                'The glossary contains almost 300 terms related to mobile technology, providing definitions and explanations for tech buzzwords and acronyms.'
            ]),
            'link' => $this->faker->randomElement([
                '/compare',
                '/photo-video-compare',
                '/battery-life-table',
                '/labs',
                '/coverage',
                '/faq',
                '/glossary'
            ])
        ];
    }
}
