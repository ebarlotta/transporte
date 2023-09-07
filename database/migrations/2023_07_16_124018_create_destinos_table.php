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
        Schema::create('destinos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('clima');
            $table->string('mejorepocaparavisitar');
            $table->string('ubicaciongps')->nullable();
            $table->double('presupuestoestimado');
            $table->string('otrosenlaces');
            $table->unsignedBigInteger('pais_id');
            $table->string('fotourl')->default('Sin_imagen.jpg');

            $table->timestamps();

            $table->foreign('pais_id')->references('id')->on('nacionalidads');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinos');
    }
};
