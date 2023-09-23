<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre',
        'apellido',
        'direccion',
        'dni',
        'telefono',
        'email',
        'fechanacimiento',
        'nacionalidad_id',
        'provincia_id',
        'localidad_id',
    ];
}
