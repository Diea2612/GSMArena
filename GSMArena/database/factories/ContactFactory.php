<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement([
                'Feedback', 
                'Tip us form', 
                'Support Email', 
                'Advertising'
            ]),
            'description' => $this->faker->randomElement([
                'We appreciate your feedback, whether you found a mistake, broken link, or have suggestions for improving GSMArena.',
                'Please use the Tip us form for any news story suggestions you have.',
                'For any inquiries, contact us at support@gsmarena.com.',
                'Are you interested in advertising on our site? We can help boost your sales with millions of daily visitors.'
            ]),
            'link' => $this->faker->randomElement([
                '/tip-us-form', 
                'mailto:support@gsmarena.com', 
                '/advertising'
            ]),
        ];
    }
}
