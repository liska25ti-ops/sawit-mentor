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
    Schema::create('kebun', function (Blueprint $table) {
        $table->id();
        $table->foreignId('petani_id')->constrained('petani')->cascadeOnDelete();
        $table->string('nama_kebun');
        $table->string('lokasi');
        $table->decimal('luas_lahan', 8, 2); // contoh: 12.50 hektar
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kebun');
    }
};
