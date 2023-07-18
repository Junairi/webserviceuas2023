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
        Schema::create('wasit', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->string('alamat', 255);
            $table->string('nik', 16);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->integer('cabang_olahraga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wasit');
    }
};
