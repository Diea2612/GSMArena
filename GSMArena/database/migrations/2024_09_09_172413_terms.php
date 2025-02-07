<?php


use App\Models\GSMArena\Home;
use App\Models\GSMArena\Contact;
use App\Models\GSMArena\Deals;
use App\Models\GSMArena\Featured;
use App\Models\GSMArena\Register;
use App\Models\GSMArena\News;
use App\Models\GSMArena\PhoneFinder;
use App\Models\GSMArena\Photos;
use App\Models\GSMArena\Reviews;
use App\Models\GSMArena\Videos;
use App\Models\GSMArena\Brands;
use App\Models\GSMArena\RumorMill;
use App\Models\GSMArena\Compare;
use App\Models\GSMArena\Coverage;
use App\Models\GSMArena\FAQ;
use App\Models\GSMArena\Glossary;
use App\Models\GSMArena\Privacy;
use App\Models\GSMArena\Terms;
use App\Models\GSMArena\Tools;
use App\Models\GSMArena\TipUs;

use App\Models\ArenaEV\ArenaEV;
use App\Models\Merch\Merch;


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
        Schema::create('terms', function (Blueprint $table) {
                      $table->id();
            $table->foreignId(Home::class);
            $table->foreignId(News::class);
            $table->foreignId(Reviews::class);
            $table->foreignId(Register::class);
            $table->foreignId(Deals::class);
            $table->foreignId(Featured::class);
            $table->foreignId(Videos::class);
            $table->foreignId(Contact::class);
            $table->foreignId(Coverage::class);
            $table->foreignId(PhoneFinder::class);
            $table->foreignId(Photos::class);
            $table->foreignId(Brands::class);
            $table->foreignId(RumorMill::class);
            $table->foreignId(Compare::class);
            $table->foreignId(FAQ::class);
            $table->foreignId(Glossary::class);
            $table->foreignId(Privacy::class);
            $table->foreignId(Terms::class);
            $table->foreignId(Tools::class);
            $table->foreignId(TipUs::class);

            $table->foreignId(ArenaEV::class);
            $table->foreignId(Merch::class);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terms');
    }
};
