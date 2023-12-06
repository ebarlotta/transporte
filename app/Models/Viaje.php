<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombreviaje',
        'descripcion',
        'duraciontotal',
        'presupuestoestimado',
        'fechasdisponibles',
        'fotourl',
        'transporte_id',
    ];
}
