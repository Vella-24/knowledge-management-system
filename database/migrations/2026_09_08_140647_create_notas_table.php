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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pegawais_id');
            $table->unsignedBigInteger('pelanggans_id');
            $table->dateTime('tanggal');
            $table->foreign('pegawais_id')->references('id')->on('pegawais');
            $table->foreign('pelanggans_id')->references('id')->on('pelanggans');
            $table->decimal('total', 15, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
