<?php

namespace App\Http\Livewire\Alojamientos;

use App\Models\Alojamiento;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AlojamientoComponent extends Component
{
    public $alojamientos;
    public $descripcion, $precio, $ubicaciongps, $fotourl;

    public $alojamiento_id;

    public $AlojamientoAEliminar;

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
            'fotourl' => 'required|image',
        ]);

        if(Storage::exists($this->fotourl)){
            //Storage::delete($this->fotourl);
            $imagenurl = $this->fotourl;
        }
        else {
            $imagenurl = $this->fotourl->store('destino/alojamiento');
        }

        // if($this->fotourl) {}
        // else { $this->fotourl = $this->fotourl->store('destino/alojamiento'); }
        // dd($this->fotourl);
        Alojamiento::updateOrCreate(['id' => $this->alojamiento_id], [
        'descripcion' => $this->descripcion,
        'precio' => $this->precio,
        'ubicaciongps' => $this->ubicaciongps,
        'fotourl' => $imagenurl,
    ]);

        session()->flash('message', $this->alojamiento_id ? 'Alojamiento Actualizado.' : 'Alojamiento Creado.');
        $this->reset();
    }

    public function edit($id) {
        $this->resetValidation();
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

    public function nuevo() {
        //$this->descripcion = '';
        //$this->precio = '';
        //$this->ubicaciongps = '';
        //$this->reset('fotourl');
        
        $this->fotourl = "";
    }

    public function isModalConsultar($id) {
        $alojamiento = Alojamiento::find($id);
        $this->AlojamientoAEliminar = $alojamiento->descripcion;
        $this->alojamiento_id = $id;
    }

}
