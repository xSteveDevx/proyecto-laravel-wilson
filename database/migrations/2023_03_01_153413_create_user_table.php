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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',255);
            $table->string('email',100)->unique();
            $table->string('password',100);
            $table->string('phone',30);
            $table->string('remenber_token',100)->default('1234');
            $table->enum('status',['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

  
};
