<?php

namespace App\Http\Livewire\Localidades;

use Livewire\Component;
use App\Models\Localidad;
class LocalidadComponent extends Component
{
    public $localidades;
    public $nombre;
    
    public $localidad_id;

    public function render()
    {
        $this->localidades = Localidad::all();
        return view('livewire.localidades.localidad-component');
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
        $localidad->destroy($this->localidad_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->localidad_id ? 'Localidad Eliminada.' : 'No ha seleccionado una localidad a eliminar.');
    }
}
