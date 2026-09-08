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
        Schema::create('nota_barangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notas_id');
            $table->unsignedBigInteger('barangs_id');
            $table->integer('jumlah');
            $table->decimal('harga', 15, 2);
            $table->decimal('subtotal', 15, 2);
            $table->foreign('notas_id')->references('id')->on('notas');
            $table->foreign('barangs_id')->references('id')->on('barangs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_barangs');
    }
};
