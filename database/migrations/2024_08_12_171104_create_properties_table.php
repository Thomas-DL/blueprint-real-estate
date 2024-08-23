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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('referral_code')->unique();
            $table->foreignId('property_type_id')->constrained();
            $table->string('thumbnail');
            $table->json('images');
            $table->string('title');
            $table->text('description');
            $table->string('city');
            $table->integer('price');
            $table->json('features');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
