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
        Schema::create('destino_viajes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destino_id');
            $table->unsignedBigInteger('viaje_id');
            $table->date('fechainicio');
            $table->date('fechafinal');
            $table->unsignedBigInteger('lugarsalida');  // destino_id desde donde se parte

            $table->timestamps();

            $table->foreign('destino_id')->references('id')->on('destinos');
            $table->foreign('viaje_id')->references('id')->on('viajes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destino_viajes');
    }
};
