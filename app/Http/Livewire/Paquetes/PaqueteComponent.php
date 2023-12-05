<?php

namespace App\Http\Livewire\Paquetes;

use App\Models\Destino;
use App\Models\DestinoPaquete;
use Livewire\Component;
use App\Models\Paquete;
use App\Models\Transporte;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
class PaqueteComponent extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $paquetes, $transportes;
    public $nombrepaquete, $descripcion, $precio, $duraciontotal, $presupuestoestimado, $fechasdisponibles, $fotourl;
    public $transporte, $transporte_id;

    public $destinospaquete, $destinosp, $destinosposibles, $destinoaeliminar;

    public $paquete_id;

    public $PaqueteAEliminar;   //$isModalConsultar

    public function render()
    {
        $this->paquetes = Paquete::paginate(10);
        $links = $this->paquetes;
        $this->paquetes = collect($this->paquetes->items());
        $this->transportes = Transporte::all();
        // $this->paquetes = Paquete::all();
        return view('livewire.paquetes.paquete-component',['paquetes' => $this->paquetes, 'datos'=> $links])->extends('layouts.adminlte');
    }

    public function store() {
        $this->validate([
            'nombrepaquete' => 'required',
            'descripcion' => 'required',
            'duraciontotal' => 'required',
            'presupuestoestimado' => 'required',
            'fechasdisponibles' => 'required',
            'fotourl' => 'required',
        ]);

        // if(Storage::exists($this->fotourl)){
        //     $imagenurl = $this->fotourl;
        // }
        // else {
        //     $imagenurl = basename($this->fotourl->store('public/paquetes'));
        //     $imagenurl = 'storage/paquetes/' . $imagenurl;
        // }
        
        Paquete::updateOrCreate(['id' => $this->paquete_id], [
        'nombrepaquete' => $this->nombrepaquete,
        'descripcion' => $this->descripcion,
        'precio' => $this->precio,
        'duraciontotal' => $this->duraciontotal,
        'presupuestoestimado' => $this->presupuestoestimado,
        'fechasdisponibles' => $this->fechasdisponibles,
        'transporte_id' => $this->transporte_id,
        // 'fotourl' => $imagenurl,
    ]);
        session()->flash('message', $this->paquete_id ? 'Paquete Actualizado.' : 'Paquete Creado.');
        $this->reset();
    }

    public function storeRelacion() {
        $relacion = new DestinoPaquete;
        $relacion->destino_id=$this->destinosp;
        $relacion->paquete_id=$this->paquete_id;
        $relacion->fechainicio = date("Y-m-d");
        $relacion->fechafinal = date("Y-m-d");
        $relacion->lugarsalida = 1;
        $relacion->save();

        session()->flash('message', $relacion->id ? 'Destino Agregado.' : 'No se agregó el destino.');
    }

    public function edit($id) {
        $paquete = Paquete::find($id);
        $this->paquete_id = $id;
        $this->destinospaquete = DestinoPaquete::where('paquete_id','=',$this->paquete_id)
        ->join('destinos','destino_paquetes.destino_id','=','destinos.id')
        ->get();
        //dd($this->destinospaquete);
        
        $this->nombrepaquete = $paquete->nombrepaquete;
        $this->descripcion = $paquete->descripcion;
        $this->precio = $paquete->precio;
        $this->duraciontotal = $paquete->duraciontotal;
        $this->presupuestoestimado = $paquete->presupuestoestimado;
        $this->fechasdisponibles = $paquete->fechasdisponibles;
        $this->transporte_id = $paquete->transporte_id;
        $this->fotourl = $paquete->fotourl;

        $this->paquete_id = $id;

        $this->ConstructorDestinos();
    }

    public function EliminarRelacion() {
        $relacion = DestinoPaquete::where('destino_id','=',$this->destinoaeliminar)
        ->where('paquete_id','=',$this->paquete_id)
        ->get('id');
        // dd($relacion[0]['id']);
        $borrar = DestinoPaquete::find($relacion[0]['id']);
        $borrar->destroy($relacion[0]['id']);
        $this->edit($this->paquete_id);
    }

    public function delete() {
        $paquete = Paquete::find($this->paquete_id);
        $paquete->destroy($this->paquete_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->paquete_id ? 'Paquete Eliminado.' : 'No ha seleccionado un lugar a eliminar.');
        $this->reset();
    }

    public function setDestinoAEliminar($destino_id) {
        $this->destinoaeliminar = $destino_id;
    }

    public function ConstructorDestinos() {
        $this->destinosposibles = Destino::all();  // Se utiliza para llenar el combo con los distintos destinos para ser relacionados con el paquete
    }

    public function Consultar($id) {
        $paquete = Paquete::find($id);
        dd($paquete);
        $this->nombrepaquete = $paquete->nombrepaquete;
        $this->paquete_id = $id;
    }
    public function isModalConsultar($id) {
        $paquete = Paquete::find($id);
        $this->PaqueteAEliminar = $paquete->nombrepaquete;
        $this->paquete_id = $id;
    }

    public function nuevo() {
        $this->nombrepaquete = '';
        $this->descripcion = '';
        $this->precio = '';
        $this->duraciontotal = '';
        $this->presupuestoestimado = '';
        $this->fechasdisponibles = '';
        $this->transporte_id = '';
        $this->fotourl = 'img/Sin_imagen.jpg';

        $this->destinospaquete = null;

        $this->paquete_id = null;
    }
}
