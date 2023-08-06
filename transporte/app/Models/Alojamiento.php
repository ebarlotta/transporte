<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alojamiento extends Model
{
    use HasFactory;

    protected $fillable=[
        'descripcion',
        'ubicaciongps',
        'fotourl',
        'precio'
    ];

    //Relación muchos a muchos polimórfica

    public function servicios() {
        return $this->morphToMany('App\Models\Servicio','servicioable');
    }

    public function destinos() {
        return $this->morphToMany('App\Models\Destino','destinosable');
    }
}
