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
        Schema::create('bus_routes', function (Blueprint $table) {
            $table->id();
            $table->string('bus_name');
            $table->text('station_01');
            $table->text('station_02');
            $table->text('station_03')->nullable();
            $table->text('station_04')->nullable();
            $table->text('station_05')->nullable();
            $table->text('station_06')->nullable();
            $table->text('station_07')->nullable();
            $table->text('station_08')->nullable();
            $table->text('station_09')->nullable();
            $table->text('station_10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_routes');
    }
};
