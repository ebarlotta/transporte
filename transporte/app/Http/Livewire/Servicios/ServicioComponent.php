<?php

namespace App\Http\Livewire\Servicios;

use Livewire\Component;
use App\Models\Servicio;

class ServicioComponent extends Component
{
    public function render()
    {
        $this->servicios = Servicio::all();
        return view('livewire.servicios.servicio-component')->extends('layouts.adminlte');
    }

    public $servicios;
    public $descripcion, $precio, $ubicaciongps, $fotourl;

    public $servicio_id;

    public function store() {
        $this->validate([
            'descripcion' => 'required',
            'fotourl' => 'required|integer',
        ]);

        Servicio::updateOrCreate(['id' => $this->servicio_id], [
        'descripcion' => $this->descripcion,
        'fotourl' => $this->fotourl,
    ]);
        session()->flash('message', $this->servicio_id ? 'Servicio Actualizado.' : 'Servicio Creado.');
    }

    public function edit($id) {
        $servicio = Servicio::find($id);
        $this->descripcion = $servicio->descripcion;
        $this->fotourl = $servicio->fotourl;

        $this->servicio_id = $id;
    }

    public function delete() {
        $servicio = Servicio::find($this->servicio_id);
        $servicio->destroy($this->servicio_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->servicio_id ? 'Servicio Eliminado.' : 'No ha seleccionado un lugar a eliminar.');
    }
}
