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
        Schema::create('destino_paquetes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destino_id');
            $table->unsignedBigInteger('paquete_id');
            $table->date('fechainicio');
            $table->date('fechafinal');
            $table->unsignedBigInteger('lugarsalida');  // destino_id desde donde se parte

            $table->timestamps();

            $table->foreign('destino_id')->references('id')->on('destinos');
            $table->foreign('paquete_id')->references('id')->on('paquetes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destino_paquetes');
    }
};
