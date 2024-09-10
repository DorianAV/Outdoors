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
        Schema::create('home_sections', function (Blueprint $table) {
            $table->id();
            $table->string('span');
            $table->string('title');
            $table->longText('description');
            $table->string('image1');
            $table->string('image2');
//            $table->string('mainTitle');
//            $table->string('subtitle1');
//            $table->text('description1');
//            $table->string('subtitle2');
//            $table->text('description2');
//            $table->string('subtitle3');
//            $table->text('description3');
//            $table->string('subtitle4');
//            $table->text('description4');
//            $table->string('videoUrl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sections');
    }
};
