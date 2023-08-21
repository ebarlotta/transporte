<?php

namespace App\Http\Livewire\Localidades;

use Livewire\Component;
use App\Models\Localidad;
use App\Models\Cliente;
class LocalidadComponent extends Component
{
    public $localidades;
    public $nombre;
    
    public $localidad_id;

    public function render()
    {
        $this->localidades = Localidad::all();
        return view('livewire.localidades.localidad-component')->extends('layouts.adminlte');
    }

    public function store() {
        $this->validate([
            'nombre' => 'required',
        ]);

        Localidad::updateOrCreate(['id' => $this->localidad_id], [
        'nombre' => $this->nombre,
    ]);
        session()->flash('message', $this->localidad_id ? 'Localidad Actualizada.' : 'Localidad Creada.');
    }

    public function edit($id) {
        $localidad = Localidad::find($id);
        $this->nombre = $localidad->nombre;
        $this->localidad_id = $id;
    }

    public function delete() {
        $localidad = Localidad::find($this->localidad_id);
        $clientes = Cliente::where('localidad_id','=', $this->localidad_id)->get();
        if(count($clientes)) {
            session()->flash('messageBad', ' No se puede eliminar la Localidad ya que pertenece a otra tabla');
        } else {
            $localidad->destroy($this->localidad_id);
            session()->flash('message', $this->localidad_id ? 'Localidad Eliminada.' : 'No ha seleccionado una localidad a eliminar.');
        }
    }

    public function new() {
        $this->localidad_id = null;
        $this->nombre = '';
    }

    public function BuscarDatosLocalidad($id) {
        $localidad = Localidad::find($id);
        $this->nombre = $localidad->nombre;
        $this->localidad_id = $id;
    }

}
