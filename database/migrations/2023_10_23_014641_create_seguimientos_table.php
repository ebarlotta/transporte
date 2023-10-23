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
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('encomienda_id');
            $table->string('descripcionseguimiento');
            $table->date('fecha');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();

            $table->foreign('encomienda_id')->references('id')->on('encomiendas');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguimientos');
    }
};
