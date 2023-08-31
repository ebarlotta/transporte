<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DestinoPaquete extends Model
{
    use HasFactory;

    protected $fillable=[
        'destino_id',
        'paquete_id',
        'fechainicio',
        'fechafinal',
        'lugarsalida',
    ];

}
