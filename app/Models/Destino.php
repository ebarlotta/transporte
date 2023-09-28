<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\JsonDecoder;

class Destino extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre',
        'descripcion',
        'clima',
        'mejorepocaparavisitar',
        'ubicaciongps',
        'presupuestoestimado',
        'otrosenlaces',
        'pais_id',
        'fotourl',
    ];

    //Relación muchos a muchos polimórfica inversa

    public function alojamientos() {
        return $this->morphedByMany('App\Models\Alojamiento', 'destinosable');
    }

    public function actividadesdestacadas() {
        return $this->morphedByMany('App\Models\Actividaddestacada', 'destinosable');
    }

    public function comentarios() {
        return $this->morphedByMany('App\Models\Comentario', 'destinosable');
    }

    public function comidas() {
        return $this->morphedByMany('App\Models\Comida', 'destinosable');
    }

    public function transportes() {
        return $this->morphedByMany('App\Models\Transporte', 'destinosable');
    }

    // public function getPais() {
    //     $codigo = Nacionalidad::where('id','=',1)->get();
    //     dd($codigo);
    //     $nombre = $codigo->nombre;
    //     // return $this->belongsTo(Nacionalidad::class,'codigopais','pais_id');
    //     // return encode  $codigo;

    //     return response()->json([
    //         'pais' => $codigo .' - '. $nombre,
    //     ]);
    // }

    public function pais()
    {
        return $this->hasOne(Nacionalidad::class,'id','pais_id');
    }
}
