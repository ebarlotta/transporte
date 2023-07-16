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
        Schema::create('transportes', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->double('precio')->nullable();
            $table->string('ubicaciongps')->nullable();
            $table->string('fotourl')->default('Sin_imagen.jpg');
            $table->date('salida')->nullable();
            $table->date('llegada')->nullable();
            $table->boolean('devolverenotrodestino')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportes');
    }
};
