<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('foto')->nullable();
            $table->foreignId('spesialis_id')->constrained('spesialis')->cascadeOnDelete();
            $table->text('about')->nullable();
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();
            $table->string('str')->nullable();
            $table->string('pendidikan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dokter');
    }
};
