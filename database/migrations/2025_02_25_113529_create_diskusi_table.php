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
        Schema::create('tbl_diskusi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('belajar_detail_id')->constrained('tbl_belajar_detail')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('tbl_user')->onDelete('cascade');
            $table->text('pesan');
            $table->enum('level', ['0', '1'])->default('0');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_diskusi');
    }
};