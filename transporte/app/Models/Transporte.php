<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;

    protected $fillable=[
        'descripcion',
        'precio',
        'ubicaciongps',
        'fotourl',
        'salida',
        'llegada',
        'devolverenotrodestino',
    ];

    public function servicios() {
        return $this->morphToMany('App\Models\Servicio','servicioable');
    }

    public function destinos() {
        return $this->morphToMany('App\Models\Destino','destinosable');
    }
}
