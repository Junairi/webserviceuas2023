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
        Schema::create('atlit', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->string('alamat', 255);
            $table->integer('umur');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->integer('cabang_olahraga');
            $table->integer('team');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atlit');
    }
};
