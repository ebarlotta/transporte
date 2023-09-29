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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('apellido');
            $table->string('nombre');
            $table->integer('dni');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->date('fechanacimiento')->nullable();
            $table->string('foto')->nullable();

            $table->unsignedBigInteger('nacionalidad_id')->default(1);
            $table->unsignedBigInteger('provincia_id')->default(1);
            $table->unsignedBigInteger('localidad_id')->default(1);

            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidads');
            $table->foreign('provincia_id')->references('id')->on('provincias');
            $table->foreign('localidad_id')->references('id')->on('localidads');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
