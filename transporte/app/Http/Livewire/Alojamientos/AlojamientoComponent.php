<?php

namespace App\Http\Livewire\Alojamientos;

use App\Models\Alojamiento;
use Livewire\Component;

class AlojamientoComponent extends Component
{
    public $alojamientos;
    public $descripcion, $precio, $ubicaciongps, $fotour;

    public $alojamiento_id;

    public function render()
    {
        $this->alojamientos = Alojamiento::all();
        return view('livewire.alojamientos.alojamiento-component')->extends('layouts.adminlte');
    }

    public function store() {
        $this->validate([
            'descripcion' => 'required',
            'precio' => 'required',
            'ubicaciongps' => 'required',
            // 'fotour' => 'required|integer',
        ]);

        Alojamiento::updateOrCreate(['id' => $this->alojamiento_id], [
        'descripcion' => $this->descripcion,
        'precio' => $this->precio,
        'ubicaciongps' => $this->ubicaciongps,
    ]);
        session()->flash('message', $this->alojamiento_id ? 'Alojamiento Actualizado.' : 'Alojamiento Creado.');
    }

    public function edit($id) {
        $alojamiento = Alojamiento::find($id);
        $this->descripcion = $alojamiento->descripcion;
        $this->precio = $alojamiento->precio;
        $this->ubicaciongps = $alojamiento->ubicaciongps;
        $this->fotour = $alojamiento->fotour;

        $this->alojamiento_id = $id;
    }

    public function delete() {
        $alojamiento = Alojamiento::find($this->alojamiento_id);
        $alojamiento->destroy($this->alojamiento_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->alojamiento_id ? 'Alojamiento Eliminado.' : 'No ha seleccionado un alojamiento a eliminar.');
    }
}
