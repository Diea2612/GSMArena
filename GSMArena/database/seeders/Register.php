<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class Register extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); // Create a Faker instance

        // Seed the users table
        for ($i = 0; $i < 50; $i++) { // Adjust the number of users to insert
            DB::table('users')->insert([
                'nickname' => $faker->userName, // Random nickname
                'email' => $faker->unique()->safeEmail, // Unique random email
                'password' => Hash::make($faker->password), // Hashed random password
                'agree_to_store_info' => true, // Assuming default agreement
                'age_confirmation' => true, // Assuming default age confirmation
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
            ]);
        }
    }
}
