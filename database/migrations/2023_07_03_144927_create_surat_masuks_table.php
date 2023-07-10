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
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('dari');
            $table->string('no_surat');
            $table->string('perihal');
            $table->string('keterangan');
            $table->enum('status', ['baru','ditakahkan','diterima', 'ditolak'])->default('baru');
            $table->dateTime('ditakahkan_at')->nullable();
            $table->dateTime('disposisi_at')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuks');
    }
};
