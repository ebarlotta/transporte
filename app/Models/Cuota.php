<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    use HasFactory;

    protected $fillable=[
        'fecha',
        'paquete_id',
        'monto',
        'estado',
    ];
}
