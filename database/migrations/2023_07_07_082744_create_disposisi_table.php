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
        Schema::create('disposisi', function (Blueprint $table) {
            $table->id();
            $table->string('pesan_disposisi');
            $table->unsignedBigInteger('suratmasuk_id');
            $table->unsignedBigInteger('author_id');
            $table->timestamps();
            
            $table->foreign('author_id')->references('id')->on('users');
            $table->foreign('suratmasuk_id')->references('id')->on('surat_masuks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disposisi');
    }
};
