<?php

namespace App\Http\Livewire\Alojamientos;

use App\Models\Alojamiento;
use Livewire\Component;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class AlojamientoComponent extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $alojamientos;
    public $descripcion, $precio, $ubicaciongps, $fotourl;

    public $alojamiento_id;

    public $AlojamientoAEliminar;

    public $latitud;
    public $longitud;

    public $mostrarMapa=false;

    public function render()
    {
        $this->alojamientos = Alojamiento::paginate(4);
        $links = $this->alojamientos;
        $this->alojamientos = collect($this->alojamientos->items());
        // $this->alojamientos = Alojamiento::all();
        return view('livewire.alojamientos.alojamiento-component',['alojamientos' => $this->alojamientos, 'datos'=> $links])->extends('layouts.adminlte');
    }

    public function store() {
        $this->ubicaciongps = $this->latitud . "," . $this->longitud;
        $this->validate([
            'descripcion' => 'required',
            'precio' => 'required',
            'ubicaciongps' => 'required',
            'fotourl' => 'required',
        ]);

        if(Storage::exists($this->fotourl)){
            $imagenurl = $this->fotourl;
        }
        else {
            $imagenurl = basename($this->fotourl->store('public/alojamientos'));
            $imagenurl = 'storage/alojamientos/' . $imagenurl;
        }

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
        Storage::delete($this->fotourl);
        $alojamiento->destroy($this->alojamiento_id);

        session()->flash('message', $this->alojamiento_id ? 'Alojamiento Eliminado.' : 'No ha seleccionado un alojamiento a eliminar.');
        $this->reset();
    }

    public function nuevo() {
        $this->fotourl = "";
        $this->descripcion = '';
        $this->precio = '';
        $this->ubicaciongps = '';
        $this->fotourl = '';
    }

    public function isModalConsultar($id) {
        $alojamiento = Alojamiento::find($id);
        $this->AlojamientoAEliminar = $alojamiento->descripcion;
        $this->alojamiento_id = $id;
    }

    public function ActualizarCoordenadas() {
        // $this->latitud = $_SESSION['latitud'];
        // $this->longitud = $_SESSION['longitud'];
        $this->mostrarMapa = true;
        // $this->latitud = $_SESSION['latitud'];
        // dd($this->latitud . $this->longitud);
    }

}
