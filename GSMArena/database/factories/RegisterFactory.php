<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User; // Update with your actual User model namespace
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class RegisterFactory extends Factory
{
    protected $model = User::class; // Specify the model for the factory

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nickname' => $this->faker->userName, // Random nickname
            'email' => $this->faker->unique()->safeEmail, // Unique random email
            'password' => Hash::make($this->faker->password), // Hashed random password
            'agree_to_store_info' => true, // Assuming default agreement
            'age_confirmation' => true, // Assuming default age confirmation
            'created_at' => now(), // Current timestamp
            'updated_at' => now(), // Current timestamp
        ];
    }
}
