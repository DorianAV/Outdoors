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
        Schema::create('home_details', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle1');
            $table->longText('description1');
            $table->string('subtitle2');
            $table->longText('description2');
            $table->string('subtitle3');
            $table->longText('description3');
            $table->string('subtitle4');
            $table->longText('description4');
            $table->string('image');
            $table->string('videoUrl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_details');
    }
};
