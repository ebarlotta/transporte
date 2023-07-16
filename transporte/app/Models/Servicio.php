<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    //Relación muchos a muchos polimórfica inversa

    public function alojamientos() {
        return $this->morphedByMany('App\Models\Alojamiento', 'servicioable');
    }

    public function actividadesdestacadas() {
        return $this->morphedByMany('App\Models\Actividaddestacada', 'servicioable');
    }

    public function comidas() {
        return $this->morphedByMany('App\Models\Comida', 'servicioable');
    }

    public function transportes() {
        return $this->morphedByMany('App\Models\Transporte', 'servicioable');
    }
}
