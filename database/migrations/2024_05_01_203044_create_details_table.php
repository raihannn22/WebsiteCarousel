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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('caption');
            $table->string('image');
            $table->string('judulpost')->nullable();
            $table->string('harga')->nullable();
            $table->text('captionpost')->nullable();
            $table->string('map')->nullable();
            $table->string('imagesatu')->nullable();
            $table->string('imagedua')->nullable();
            $table->string('imagetiga')->nullable();
            $table->string('imageempat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
