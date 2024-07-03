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
        Schema::create('Flights', function (Blueprint $table) {
            $table->id('Flight_ID');
            $table->char('Aircraft_ID');
            $table->string('Departure_Airport');
            $table->string('Arrival_Airport');
            $table->dateTime('Departure_Time');
            $table->dateTime('Arrival_Time');
            $table->time('Fright_Duration');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Flights');
    }
};
