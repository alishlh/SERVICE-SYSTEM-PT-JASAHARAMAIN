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
        Schema::create('handlings', function (Blueprint $table) {
            $table->id();
            $table->enum('location', ['Bandara Indonesia', 'Bandara Jeddah', 'Bandara Madinah', 'Hotel', 'Mekkah - Madinah']);
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('handlings');
    }
};
