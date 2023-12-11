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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->date('fechasdisponibles');
            $table->string('nombreviaje');
            $table->string('descripcion');
            $table->double('duraciontotal')->nullable();
            $table->double('presupuestoestimado')->nullable();
            $table->string('fotourl')->default('Sin_imagen.jpg');
            $table->unsignedBigInteger('transporte_id')->nullable();
            $table->timestamps();

            $table->foreign('transporte_id')->references('id')->on('transportes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
