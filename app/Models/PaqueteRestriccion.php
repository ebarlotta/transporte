<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaqueteRestriccion extends Model
{
    use HasFactory;

    protected $fillable=[
        'paquete_id',
        'restriccion_id',
    ];
}
