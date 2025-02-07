<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Reviews;

class ReviewsSeeder extends Seeder
{
    /**
     * Seed the application's database with reviews.
     *
     * @return void
     */
    public function run()
    {
        // Seed 30 reviews
        // Reviews::factory()->count(30)->create();
    }
}
