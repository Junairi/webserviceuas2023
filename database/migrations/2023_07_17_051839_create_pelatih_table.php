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
        Schema::create('pelatih', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->string('alamat', 255);
            $table->string('nik', 16);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('kontak', 255);
            $table->integer('cabang_olahraga');
            $table->integer('team');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatih');
    }
};
