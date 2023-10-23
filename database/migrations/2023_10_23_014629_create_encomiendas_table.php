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
        Schema::create('encomiendas', function (Blueprint $table) {
            $table->id();
            $table->string('direccionremitente');
            $table->unsignedBigInteger('sucursalorigen');
            $table->unsignedBigInteger('clienteorigen_id');   // Remitente
            $table->string('telefonoremitente');
            $table->string('emailremitente')->nullable();
            $table->unsignedBigInteger('clientedestino_id');   // Destinatario
            $table->string('direcciondestinatario');
            $table->unsignedBigInteger('sucursaldestino');
            $table->double('valordeclarado')->default(0);
            $table->double('cantidadbultos')->default(0);
            $table->unsignedBigInteger('tarifa_id');
            $table->string('observaciones')->nullable();

            $table->foreign('sucursalorigen')->references('id')->on('sucursals');
            $table->foreign('sucursaldestino')->references('id')->on('sucursals');
            $table->foreign('clienteorigen_id')->references('id')->on('clientes');
            $table->foreign('clientedestino_id')->references('id')->on('clientes');
            $table->foreign('tarifa_id')->references('id')->on('tarifas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encomiendas');
    }
};
