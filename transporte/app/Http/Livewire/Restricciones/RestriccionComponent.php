<?php

namespace App\Http\Livewire\Restricciones;

use Livewire\Component;
use App\Models\Restriccion;
class RestriccionComponent extends Component
{
    public function render()
    {
        $this->restricciones = Restriccion::all();
        return view('livewire.restricciones.restriccion-component')->extends('layouts.adminlte');
    }

    public $restricciones;
    public $descripcion;
    
    public $restriccion_id;

    public function store() {
        $this->validate([
            'descripcion' => 'required',
        ]);

        Restriccion::updateOrCreate(['id' => $this->restriccion_id], [
        'descripcion' => $this->descripcion,
    ]);
        session()->flash('message', $this->restriccion_id ? 'Restriccion Actualizada.' : 'Restriccion Creada.');
    }

    public function edit($id) {
        $restriccion = Restriccion::find($id);
        $this->descripcion = $restriccion->descripcion;
        $this->restriccion_id = $id;
    }

    public function delete() {
        $restriccion = Restriccion::find($this->restriccion_id);
        $restriccion->destroy($this->restriccion_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->restriccion_id ? 'Restriccion Eliminada.' : 'No ha seleccionado una restriccion a eliminar.');
    }
}
