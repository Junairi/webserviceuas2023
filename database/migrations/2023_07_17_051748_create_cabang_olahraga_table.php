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
        Schema::create('cabang_olahraga', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->enum('kategori', ['L', 'P']);
            $table->integer('penanggung_jawab');
            $table->integer('wasit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabang_olahraga');
    }
};
