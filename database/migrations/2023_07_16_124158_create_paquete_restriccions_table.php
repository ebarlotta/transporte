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
        Schema::create('paquete_restriccions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paquete_id');
            $table->unsignedBigInteger('restriccion_id');
            $table->timestamps();

            $table->foreign('paquete_id')->references('id')->on('paquetes');
            $table->foreign('restriccion_id')->references('id')->on('restriccions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paquete_restriccions');
    }
};
