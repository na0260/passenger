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
        Schema::create('bus_trackings', function (Blueprint $table) {
            $table->id();
            $table->string('bus_name');
            $table->string('organization');
            $table->string('last_stoppage')->default('-');
            $table->string('next_stoppage')->default('-');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_trackings');
    }
};
