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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_post');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_post')->references('id')->on('articles');
            $table->string('answer', 500);
            $table->timestamps();
            
        });
    }

   
};
