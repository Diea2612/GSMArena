<?php

use App\Models\Photos;

use App\Models\Merch\Merch;
use App\Models\Merch\MerchAllProducts;
use App\Models\Merch\MerchCart;
use App\Models\Merch\MerchContact;
use App\Models\Merch\MerchFAQ;
use App\Models\Merch\MerchPrivacy;
use App\Models\Merch\MerchTerms;


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
        Schema::create('merches', function (Blueprint $table) {
            $table->id();
             $table->foreignId(Photos::class);
             $table->double('price');
             $table->integer('amount');
             $table->string('title')->nullable();
             $table->text('description')->nullable();

        
                    $table->foreignId(Merch::class);
                    $table->foreignId(MerchCart::class);
                    $table->foreignId(MerchAllProducts::class);
                    $table->foreignId(MerchContact::class);
                    $table->foreignId(MerchFAQ::class);
                    $table->foreignId(MerchPrivacy::class);
                    $table->foreignId(MerchTerms::class);
                    

                    

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merches');
    }
};