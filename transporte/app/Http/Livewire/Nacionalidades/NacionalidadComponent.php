<?php

namespace App\Http\Livewire\Nacionalidades;

use Livewire\Component;
use App\Models\Nacionalidad;
class NacionalidadComponent extends Component
{

    public $nacionalidades;
    public $nombre, $codigopais;
    
    public $nacionalidad_id;

    public function render()
    {
        $this->nacionalidades = Nacionalidad::all();
        return view('livewire.nacionalidades.nacionalidad-component');
    }

    public function store() {
        $this->validate([
            'nombre' => 'required',
            'codigopais' => 'required',
        ]);

        Nacionalidad::updateOrCreate(['id' => $this->nacionalidad_id], [
        'nombre' => $this->nombre,
        'codigopais' => $this->codigopais,
    ]);
        session()->flash('message', $this->nacionalidad_id ? 'Nacionalidad Actualizada.' : 'Nacionalidad Creada.');
    }

    public function edit($id) {
        $nacionalidad = Nacionalidad::find($id);
        $this->nombre = $nacionalidad->nombre;
        $this->codigopais = $nacionalidad->codigopais;
        $this->nacionalidad_id = $id;
    }

    public function delete() {
        $nacionalidad = Nacionalidad::find($this->nacionalidad_id);
        $nacionalidad->destroy($this->nacionalidad_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->nacionalidad_id ? 'Nacionalidad Eliminada.' : 'No ha seleccionado una nacionalidad a eliminar.');
    }
}
