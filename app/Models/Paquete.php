<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombrepaquete',
        'descripcion',
        'duraciontotal',
        'presupuestoestimado',
        'fechasdisponibles',
        'fotourl',
        'transporte_id',
    ];
}
