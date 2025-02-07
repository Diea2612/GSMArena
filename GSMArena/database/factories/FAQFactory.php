<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FAQ;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FAQ>
 */
class FAQFactory extends Factory
{
    protected $model = FAQ::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $questions = [
            "Do you sell phones or tablets?",
            "Can I send you my phone for repairs or upgrades?",
            "Why can't I filter by category X in your Phone Finder?",
            "There are some terms missing from your glossary.",
            "How can I find out if a particular device will work in my country?",
            "I see that a phone has a very good rating, but it is not listed in the Top 5 on the front page. Why?",
            "I am sure that the information in your catalog for a particular device is not correct. Why is that so?",
            "I like phone X very much. Where can I buy it?"
        ];

        $answers = [
            "A resounding NO. GSMArena.com has as its primary task to provide detailed and accurate information about mobile phones and their features. GSMArena.com DOES NOT sell phones or anything else.",
            "No, we do not upgrade or repair phones/tablets. We merely provide information about mobile phones.",
            "With the vast quantity of new technology, it is nearly impossible to offer filtering by each feature. You can search using the 'Free text' field in Phone Finder.",
            "Feel free to let us know about missing or incorrect glossary terms using our support email found on the Contact us page.",
            "Use our comprehensive Coverage guide to cross-reference the bands listed in your country's specifications with the device's specifications.",
            "Only phones listed as 'Available' and with more than 1000 votes are considered for the Top 5 Phones list.",
            "We gather information from manufacturer websites and other sources. If you find incorrect data, please send us the correct data via email.",
            "Check if the device is listed as 'Announced.' Many devices may be announced but not yet launched, making it difficult to determine availability."
        ];

        return [
            'question' => $this->faker->randomElement($questions),
            'answer' => $this->faker->randomElement($answers),
            'video_url' => 'https://example.com/video' // Assuming a placeholder video URL
        ];
    }
}
