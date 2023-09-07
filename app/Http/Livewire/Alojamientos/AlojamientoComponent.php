<?php

namespace App\Http\Livewire\Alojamientos;

use App\Models\Alojamiento;
use Livewire\Component;
use Livewire\WithFileUploads;

class AlojamientoComponent extends Component
{
    public $alojamientos;
    public $descripcion, $precio, $ubicaciongps, $fotourl;

    public $alojamiento_id;

    use WithFileUploads;

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
            'fotourl' => 'required',
        ]);
        $this->fotourl = $this->fotourl->store('destino/alojamiento');
        
        Alojamiento::updateOrCreate(['id' => $this->alojamiento_id], [
        'descripcion' => $this->descripcion,
        'precio' => $this->precio,
        'ubicaciongps' => $this->ubicaciongps,
        'fotourl' => $this->fotourl,
    ]);
        session()->flash('message', $this->alojamiento_id ? 'Alojamiento Actualizado.' : 'Alojamiento Creado.');
    }

    public function edit($id) {
        $alojamiento = Alojamiento::find($id);
        $this->descripcion = $alojamiento->descripcion;
        $this->precio = $alojamiento->precio;
        $this->ubicaciongps = $alojamiento->ubicaciongps;
        $this->fotourl = $alojamiento->fotourl;

        $this->alojamiento_id = $id;
    }

    public function delete() {
        $alojamiento = Alojamiento::find($this->alojamiento_id);
        $alojamiento->destroy($this->alojamiento_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->alojamiento_id ? 'Alojamiento Eliminado.' : 'No ha seleccionado un alojamiento a eliminar.');
    }
}
