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
    Schema::create('panen', function (Blueprint $table) {
        $table->id();
        $table->foreignId('kebun_id')->constrained('kebun')->cascadeOnDelete();
        $table->foreignId('harga_tbs_id')->constrained('harga_tbs');
        $table->date('tanggal_panen');
        $table->decimal('berat_kg', 10, 2);
        $table->decimal('total_pendapatan', 15, 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panen');
    }
};
