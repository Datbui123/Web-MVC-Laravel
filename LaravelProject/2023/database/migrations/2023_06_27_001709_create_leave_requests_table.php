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
        Schema::create('leave_requests', function (Blueprint $table) {
            $table->increments('Request_ID');
            $table->unsignedInteger('Employee_ID');
            $table->foreign('Employee_ID')->references('Employee_ID')->on('employees')->onDelete('cascade');
            $table->date('Start_Date');
            $table->date('End_Date');
            $table->string('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_requests');
    }
};
