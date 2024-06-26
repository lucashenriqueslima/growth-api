<?php

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
        Schema::create('biker_geolocations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('biker_id')->constrained('bikers');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('biker_geolocations', function (Blueprint $table) {
            $table->dropForeign(['biker_id']);
        });
        Schema::dropIfExists('biker_geolocations');
    }
};
