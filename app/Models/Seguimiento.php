<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'encomienda_id',
        'descripcionseguimiento',
        'fecha',
        'usuario_id',
    ];
}
