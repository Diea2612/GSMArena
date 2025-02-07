<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Terms;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Terms>
 */
class TermsFactory extends Factory
{
    protected $model = Terms::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'section' => $this->faker->randomElement([
                'Copyright Information',
                'Use of Website Information',
                'Feedback',
                'Links to Third Party Sites',
                'Affiliate Links',
                'Warranties and Disclaimers',
                'Indemnification'
            ]),
            'content' => $this->faker->randomElement([
                'Copyright 2000-2023 Arena Com, Ltd. All Rights Reserved. Some company and product names on this site may be trademarks or registered trademarks of individual companies and are respectfully acknowledged.',
                'You may download, view, copy and print documents and graphics incorporated in these documents solely for personal, informational, non-commercial purposes, and the documents may not be modified or altered in any way.',
                'All comments, feedback, information or materials submitted through this website shall be considered non-confidential and GSMArena\'s property. GSMArena shall be free to use such comments on an unrestricted basis.',
                'This website may contain hyperlinks to websites controlled by parties other than GSMArena. GSMArena is not responsible for and does not endorse the contents of these websites.',
                'GSMArena price comparison engine provides links to online stores solely for price comparison purposes. GSMArena may receive a referral commission for any qualifying purchases made through these links.',
                'The information, software, products, and services on this website may be out of date or contain inaccuracies. All information is provided "as is" without warranty of any kind.',
                'You agree to indemnify and hold Arena Kom OOD harmless from any claims or demands made by third parties arising out of your use of the website or violation of these terms and conditions.'
            ])
        ];
    }
}
