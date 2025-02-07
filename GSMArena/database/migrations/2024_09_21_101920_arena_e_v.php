<?php

use App\Models\ArenaEV\ArenaEV;
use App\Models\ArenaEV\ArenaEVAboutUS;
use App\Models\ArenaEV\ArenaEVCompare;
use App\Models\ArenaEV\ArenaEVFinder;
use App\Models\ArenaEV\ArenaEVNews;
use App\Models\ArenaEV\ArenaEVRegister;
use App\Models\ArenaEV\ArenaEVReviews;
use App\Models\ArenaEV\ArenaEVTerms;
use App\Models\ArenaEV\ArenaEVGlossary;
use App\Models\ArenaEV\ArenaEVPrivacy;



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('arena_e_v', function (Blueprint $table) {
            // Add columns to your table here
            $table->id();
                    $table->foreignId(ArenaEV::class);
                    $table->foreignId(ArenaEVAboutUS::class);
                    $table->foreignId(ArenaEVCompare::class);
                    $table->foreignId(ArenaEVFinder::class);
                    $table->foreignId(ArenaEVNews::class);
                    $table->foreignId(ArenaEVRegister::class);
                    $table->foreignId(ArenaEVReviews::class);
                    $table->foreignId(ArenaEVTerms::class);
                    $table->foreignId(ArenaEVGlossary::class);
                    $table->foreignId(ArenaEVPrivacy::class);
					

                     $table->string('title')->nullable();  // Title of the EV or article
            $table->text('description')->nullable();  // Description or details about the EV
            
            // Storing media (pictures)
            $table->string('picture_url')->nullable();  // URL or path for the main picture
            $table->json('gallery')->nullable();  // JSON array of multiple images for the EV

            // Reviews
            $table->float('average_rating')->nullable();  // Average rating (e.g., out of 5 stars)
            $table->integer('review_count')->nullable();  // Total number of reviews
            
            // News related to the EV
            $table->string('news_title')->nullable();  // Latest news headline
            $table->text('news_content')->nullable();  // Full news content
            
            // Featured status
            $table->boolean('is_featured')->default(false);  // Whether the EV is featured
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arena_e_v');
    }
};
