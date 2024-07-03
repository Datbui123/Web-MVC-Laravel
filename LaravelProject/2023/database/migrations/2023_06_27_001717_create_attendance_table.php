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
        Schema::create('attendance', function (Blueprint $table) {
            $table->increments('Attendance_ID');
            $table->unsignedInteger('Employee_ID');
            $table->foreign('Employee_ID')->references('Employee_ID')->on('employees')->onDelete('cascade');
            $table->date('Date');
            $table->time('Check_in_Time');
            $table->time('Check_out_Time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};
