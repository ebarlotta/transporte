<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;

    public function servicios() {
        return $this->morphToMany('App\Models\Servicio','servicioable');
    }

    public function destinos() {
        return $this->morphToMany('App\Models\Destino','destinosable');
    }
}
