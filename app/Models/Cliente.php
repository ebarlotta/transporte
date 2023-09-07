<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'direccion',
        'email',
        'dni',
        'telefono',
        'fechanacimiento',
        'foto',
        'nacionalidad_id',
        'provinicia_id',
        'localidad_id',
    ];

    public function nacionalidad() {
        return $this->hasOne('App\Models\Nacionalidad', 'id','nacionalidad_id');
    }

    public function provincia() {
        return $this->hasOne('App\Models\Provincia', 'id','provincia_id');
    }

    public function localidad() {
        return $this->hasOne('App\Models\Localidad', 'id','localidad_id');
    }
}
