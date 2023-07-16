<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    public function destinos() {
        return $this->morphToMany('App\Models\Destino','destinosable');
    }
    
}


