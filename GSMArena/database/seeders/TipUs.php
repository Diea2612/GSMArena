<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipUs; // Import the TipUs model

class TipUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Use the factory to create 10 instances of the TipUs model
        TipUs::factory()->count(10)->create();
    }
}
