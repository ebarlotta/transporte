<?php

namespace App\Http\Livewire\Transportes;

use Livewire\Component;
use App\Models\Transporte;
class TransporteComponent extends Component
{
    public function render()
    {
        $this->transportes = Transporte::all();
        return view('livewire.transportes.transporte-component')->extends('layouts.adminlte');
    }

    public $transportes;
    public $descripcion, $precio, $ubicaciongps, $fotourl, $salida, $llegada, $devolverenotrodestino;

    public $transporte_id;

    public function store() {
        $this->validate([
            'descripcion' => 'required',
            'precio' => 'required',
            'ubicaciongps' => 'required',
            'fotourl' => 'required',
            'salida' => 'required',
            'llegada' => 'required',
            'devolverenotrodestino' => 'required',
        ]);

        Transporte::updateOrCreate(['id' => $this->transporte_id], [
        'descripcion' => $this->descripcion,
        'precio' => $this->precio,
        'ubicaciongps' => $this->ubicaciongps,
        'fotourl' => $this->fotourl,
        'salida' => $this->salida,
        'llegada' => $this->llegada,
        'devolverenotrodestino' => $this->devolverenotrodestino,
    ]);
        session()->flash('message', $this->transporte_id ? 'Transporte Actualizado.' : 'Transporte Creado.');
    }

    public function edit($id) {
        $transporte = Transporte::find($id);
        $this->descripcion = $transporte->descripcion;
        $this->precio = $transporte->precio;
        $this->ubicaciongps = $transporte->ubicaciongps;
        $this->fotourl = $transporte->fotourl;
        $this->salida = $transporte->salida;
        $this->llegada = $transporte->llegada;
        $this->devolverenotrodestino = $transporte->devolverenotrodestino;

        $this->transporte_id = $id;
    }

    public function delete() {
        $transporte = Transporte::find($this->transporte_id);
        $transporte->destroy($this->transporte_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->transporte_id ? 'Transporte Eliminado.' : 'No ha seleccionado un lugar a eliminar.');
    }
}
