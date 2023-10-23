<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombresucursal',
        'direccionsucursal',
        'telefonosucursal',
        'CP',
        'responsablesucursal',
        'observaciones',
        'activo',
    ];
}
