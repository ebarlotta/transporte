<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encomienda extends Model
{
    use HasFactory;

    protected $fillable = [
        'direccionremitente',
        'sucursalorigen',
        'cliente_id',   // Remitente
        'telefonoremitente',
        'emailremitente',
        'cliente_id',   // Destinatario
        'direcciondestinatario',
        'sucursaldestino',
        'valordeclarado',
        'cantidadbultos',
        'observaciones',
    ];
}
