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
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('Comment_id');
            $table->string('Content');
            $table->unsignedInteger('Blog_id');
            $table->foreign('Blog_id')->references('Blog_id')->on('Blogs')->onDelete('cascade');
            $table->unsignedInteger('User_id');
            $table->foreign('User_id')->references('User_id')->on('Users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
