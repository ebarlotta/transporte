<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable=[
        'fecha',
        'cliente_id',
        'paquete_id',
        'total',
    ];

    public function paquete() {
        return $this->hasOne('App\Models\Paquete', 'id','paquete_id');
    }

    public function cliente() {
        return $this->hasOne('App\Models\Cliente', 'id','cliente_id');
    }

    public function viaje() {
        return $this->hasOne('App\Models\Viaje', 'id','viaje_id');
    }
}
