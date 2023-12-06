<?php

namespace App\Http\Livewire\Viajes;

use App\Models\Destino;
use App\Models\DestinoViaje;
use Livewire\Component;
use App\Models\Viaje;
use App\Models\Transporte;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;


class ViajesComponent extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $viajes, $transportes;
    public $nombreviaje, $descripcion, $precio, $duraciontotal, $presupuestoestimado, $fechasdisponibles, $fotourl;
    public $transporte, $transporte_id;

    public $destinosviaje, $destinosv, $destinosposibles, $destinoaeliminar;

    public $viaje_id;

    public $ViajeAEliminar;   //$isModalConsultar

    public function render()
    {
        $this->viajes = Viaje::paginate(10);
        $links = $this->viajes;
        $this->viajes = collect($this->viajes->items());
        $this->transportes = Transporte::all();
        return view('livewire.viajes.viajes-component',['viajes' => $this->viajes, 'datos'=> $links])->extends('layouts.adminlte');
    }

    public function ModificarFoto() {
        $this->validate([
            'fotourl' => 'required',
        ]);
        $imagenurl = basename($this->fotourl->store('public/viajes'));
        $imagenurl = 'storage/viajes/' . $imagenurl;

        Viaje::updateOrCreate(['id' => $this->viaje_id], [
            'fotourl' => $imagenurl,
        ]);
        $a = Viaje::find($this->viaje_id)->get();
        // dd($a[0]->fotourl);
        $this->fotourl = $a[0]->fotourl;
    }

    public function store() {
        $this->validate([
            'nombreviaje' => 'required',
            'descripcion' => 'required',
            'duraciontotal' => 'required',
            'presupuestoestimado' => 'required',
            'fechasdisponibles' => 'required',
            'fotourl' => 'required',
        ]);

        Viaje::updateOrCreate(['id' => $this->viaje_id], [
        'nombreviaje' => $this->nombreviaje,
        'descripcion' => $this->descripcion,
        'precio' => $this->precio,
        'duraciontotal' => $this->duraciontotal,
        'presupuestoestimado' => $this->presupuestoestimado,
        'fechasdisponibles' => $this->fechasdisponibles,
        'transporte_id' => $this->transporte_id,
        // 'fotourl' => $imagenurl,
    ]);
        session()->flash('message', $this->viaje_id ? 'Viaje Actualizado.' : 'Viaje Creado.');
        $this->reset();
    }

    public function storeRelacion() {
        $relacion = new DestinoViaje;
        $relacion->destino_id=$this->destinosv;
        $relacion->viaje_id=$this->viaje_id;
        $relacion->fechainicio = date("Y-m-d");
        $relacion->fechafinal = date("Y-m-d");
        $relacion->lugarsalida = 1;
        $relacion->save();

        session()->flash('message', $relacion->id ? 'Destino Agregado.' : 'No se agregó el destino.');
    }

    public function edit($id) {
        $viaje = Viaje::find($id);
        $this->viaje_id = $id;
        $this->destinosviaje = DestinoViaje::where('viaje_id','=',$this->viaje_id)
        ->join('destinos','destino_viajes.destino_id','=','destinos.id')
        ->get();
        
        $this->nombreviaje = $viaje->nombreviaje;
        $this->descripcion = $viaje->descripcion;
        $this->precio = $viaje->precio;
        $this->duraciontotal = $viaje->duraciontotal;
        $this->presupuestoestimado = $viaje->presupuestoestimado;
        $this->fechasdisponibles = $viaje->fechasdisponibles;
        $this->transporte_id = $viaje->transporte_id;
        $this->fotourl = $viaje->fotourl;
        // dd($this->fotourl);

        $this->viaje_id = $id;

        $this->ConstructorDestinos();
    }

    public function EliminarRelacion() {
        $relacion = DestinoViaje::where('destino_id','=',$this->destinoaeliminar)
        ->where('viaje_id','=',$this->viaje_id)
        ->get('id');
        // dd($relacion[0]['id']);
        $borrar = DestinoViaje::find($relacion[0]['id']);
        $borrar->destroy($relacion[0]['id']);
        $this->edit($this->viaje_id);
    }

    public function delete() {
        $viaje = Viaje::find($this->viaje_id);
        $viaje->destroy($this->viaje_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->viaje_id ? 'Viaje Eliminado.' : 'No ha seleccionado un lugar a eliminar.');
        $this->reset();
    }

    public function setDestinoAEliminar($destino_id) {
        $this->destinoaeliminar = $destino_id;
    }

    public function ConstructorDestinos() {
        $this->destinosposibles = Destino::all();  // Se utiliza para llenar el combo con los distintos destinos para ser relacionados con el viaje
    }

    public function Consultar($id) {
        $viaje = Viaje::find($id);
        dd($viaje);
        $this->nombreviaje = $viaje->nombreviaje;
        $this->viaje_id = $id;
    }
    public function isModalConsultar($id) {
        $viaje = Viaje::find($id);
        $this->ViajeAEliminar = $viaje->nombreviaje;
        $this->viaje_id = $id;
    }

    public function nuevo() {
        $this->nombreviaje = '';
        $this->descripcion = '';
        $this->precio = '';
        $this->duraciontotal = '';
        $this->presupuestoestimado = '';
        $this->fechasdisponibles = '';
        $this->transporte_id = '';
        $this->fotourl = 'img/Sin_imagen.jpg';

        $this->destinosviaje = null;

        $this->viaje_id = null;
    }
}
