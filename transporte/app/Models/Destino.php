<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre',
        'descripcion',
        'clima',
        'mejorepocaparavisitar',
        'ubicaciongps',
        'presupuestoestimado',
        'otrosenlaces',
        'pais_id',
        'fotourl',
    ];

    //Relación muchos a muchos polimórfica inversa

    public function alojamientos() {
        return $this->morphedByMany('App\Models\Alojamiento', 'destinosable');
    }

    public function actividadesdestacadas() {
        return $this->morphedByMany('App\Models\Actividaddestacada', 'destinosable');
    }

    public function comentarios() {
        return $this->morphedByMany('App\Models\Comentario', 'destinosable');
    }

    public function comidas() {
        return $this->morphedByMany('App\Models\Comida', 'destinosable');
    }

    public function transportes() {
        return $this->morphedByMany('App\Models\Transporte', 'destinosable');
    }
}
