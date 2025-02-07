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

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phone_finders', function (Blueprint $table) {
            // $table->foreignId('news_id')->constrained();
            // $table->foreignId('reviews_id')->constrained();
            // $table->foreignId('deals_id')->constrained()->unsigned();
            // $table->foreignId('featured_id')->constrained();
            // $table->foreignId('videos_id')->constrained();
            // $table->foreignId('contact_id')->constrained();
            // $table->foreignId('merch_id')->constrained();
            // $table->foreignId('phone_finder_id')->constrained();
            // $table->foreignId('photos_id')->constrained();
            // $table->foreignId('brands_id')->constrained();
            // $table->foreignId('rumor_mil_id')->constrained();

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



            $table->string('title')->nullable();
            $table->text('description')->nullable();

            // General
            $table->string('brand');
            $table->string('availability');
            $table->integer('year');
            $table->double('price');

            // Network
            $table->string('network_2G');
            $table->string('network_3G');
            $table->string('network_4G');
            $table->string('network_5G');

            // SIM
            $table->string('sim_size');
            $table->string('sim_multiple');

            // Body
            $table->string('form_factor');
            $table->integer('height');
            $table->integer('thickness');
            $table->integer('width');
            $table->integer('weight');
            $table->string('keyboard');
            $table->string('ip_certificate');
            $table->string('back_material');
            $table->string('frame_material');
            $table->string('color');

            // Platform
            $table->string('os');
            $table->string('chip_set');
            $table->string('os_version');
            $table->integer('cpu_cores');

            // Memory
            $table->integer('ram');
            $table->integer('storage');
            $table->string('card_slot');

            // Display
            $table->integer('resolution');
            $table->integer('size');
            $table->integer('density');
            $table->string('notch');
            $table->string('technology');
            $table->integer('refresh_rate');
            $table->boolean('hdr')->default(false);

            // Main camera
            $table->integer('main_camera_resolution');
            $table->integer('f_number');
            $table->integer('video');
            $table->boolean('cameras')->default(false);
            $table->boolean('ois')->default(false);
            $table->boolean('telephoto')->default(false);
            $table->boolean('ultrawide')->default(false);
            $table->string('flash');

            // Selfie camera
            $table->integer('selfie_camera_resolution');
            $table->boolean('dual_camera')->default(false);
            $table->boolean('selfie_ois')->default(false);
            $table->boolean('front_flash')->default(false);
            $table->boolean('pop_up_camera')->default(false);
            $table->boolean('under_display_camera')->default(false);

            // Audio
            $table->boolean('jack_3_5mm')->default(false);
            $table->boolean('dual_speakers')->default(false);

            // Sensors
            $table->boolean('accelerometer')->default(false);
            $table->boolean('gyro')->default(false);
            $table->boolean('compass')->default(false);
            $table->boolean('barometer')->default(false);
            $table->boolean('heart_rate')->default(false);
            $table->boolean('fingerprint')->default(false);

            // Connectivity
            $table->string('wlan_wifi');
            $table->string('bluetooth');
            $table->boolean('gps')->default(false);
            $table->boolean('nfc')->default(false);
            $table->boolean('infrared')->default(false);
            $table->boolean('fm_radio')->default(false);
            $table->string('usb');

            // Battery
            $table->integer('capacity');
            $table->integer('wired_charging');
            $table->string('removable');
            $table->integer('wireless_charging');

            // Misc
            $table->string('free_text');
            $table->string('order');
            $table->boolean('reviewed_only')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phone_finders');
    }
};
