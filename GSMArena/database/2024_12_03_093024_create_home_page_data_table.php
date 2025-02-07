<?php


// use App\Models\GSMArena\Home;
// use App\Models\GSMArena\Contact;
// use App\Models\GSMArena\Deals;
// use App\Models\GSMArena\Featured;
// use App\Models\GSMArena\Register;
// use App\Models\GSMArena\News;
// use App\Models\GSMArena\PhoneFinder;
// use App\Models\GSMArena\Photos;
// use App\Models\GSMArena\Reviews;
// use App\Models\GSMArena\Videos;
//
// use App\Models\GSMArena\RumorMill;
// use App\Models\GSMArena\Compare;
// use App\Models\GSMArena\Coverage;
// use App\Models\GSMArena\FAQ;
// use App\Models\GSMArena\Glossary;
// use App\Models\GSMArena\Privacy;
// use App\Models\GSMArena\Terms;
// use App\Models\GSMArena\Tools;
// use App\Models\GSMArena\TipUs;

// use App\Models\ArenaEV\ArenaEV;
// use App\Models\Merch\Merch;

use App\Models\FAQ;
use App\Models\News;
use App\Models\Deals;
use App\Models\Merch;
use App\Models\Terms;
use App\Models\TipUs;
use App\Models\Tools;
use App\Models\GSMArena\Brands;
use App\Models\Photos;
use App\Models\Videos;
use App\Models\ArenaEV;
use App\Models\GSMArena\Compare;
use App\Models\Contact;
use App\Models\Privacy;
use App\Models\Reviews;
use App\Models\Coverage;
use App\Models\Featured;
use App\Models\Glossary;
use App\Models\Register;
use App\Models\GSMArena\RumorMill;
use App\Models\PhoneFinder;
use App\Models\GSMArena\Home;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


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
        Schema::create('home_page_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_data');
    }
};
