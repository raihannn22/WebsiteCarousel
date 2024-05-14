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
        Schema::create('postdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detail_id')->unique();
            $table->string('postjudul');
            $table->text('postcaption');
            $table->string('harga');
            $table->string('map', 500);
            $table->string('imagesatu')->nullable();
            $table->string('imagedua')->nullable();
            $table->string('imagetiga')->nullable();
            $table->string('imageempat')->nullable();
            $table->integer('stock');
            $table->foreign('detail_id')->references('id')->on('details')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postdetails');
    }
};
