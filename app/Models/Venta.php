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
        'total',
    ];

    // public function cliente_nombre() {
    //     return $this->hasOne(Cliente::class,'cliente_id','id');
    // }
}
