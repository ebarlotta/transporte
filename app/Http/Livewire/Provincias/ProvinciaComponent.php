<?php

namespace App\Http\Livewire\Provincias;

use Livewire\Component;
use App\Models\Provincia;
class ProvinciaComponent extends Component
{
    public $provincias;
    public $nombre;

    public $provincia_id;

    public function render()
    {
        $this->provincias = Provincia::all();
        return view('livewire.provincias.provincia-component')->extends('layouts.adminlte');
    }

    public function store() {
        $this->validate([
            'nombre' => 'required',
        ]);

        Provincia::updateOrCreate(['id' => $this->provincia_id], [
        'nombre' => $this->nombre,
    ]);
        session()->flash('message', $this->provincia_id ? 'Provincia Actualizada.' : 'Provincia Creada.');
    }

    public function edit($id) {
        $provincia = Provincia::find($id);
        $this->nombre = $provincia->nombre;
        $this->provincia_id = $id;
    }

    public function delete() {
        $provincia = Provincia::find($this->provincia_id);
        $provincia->destroy($this->provincia_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->provincia_id ? 'Provincia Eliminada.' : 'No ha seleccionado una provincia a eliminar.');
    }
}
