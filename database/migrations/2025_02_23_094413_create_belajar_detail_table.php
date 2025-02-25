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
        Schema::create('tbl_belajar_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('belajar_id')->constrained('tbl_belajar')->onDelete('cascade');
            $table->string('judul_belajar');
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_belajar_detail');
    }
};