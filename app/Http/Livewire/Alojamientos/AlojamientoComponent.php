<?php

namespace App\Http\Livewire\Alojamientos;

use App\Models\Alojamiento;
use Livewire\Component;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class AlojamientoComponent extends Component
{
    public $alojamientos;
    public $descripcion, $precio, $ubicaciongps, $fotourl;

    public $alojamiento_id;

    public $AlojamientoAEliminar;

    public $latitud;
    public $longitud;

    use WithFileUploads;
    use WithPagination;

    public function render()
    {
        $this->alojamientos = Alojamiento::paginate(2);
        $links = $this->alojamientos;
        $this->alojamientos = collect($this->alojamientos->items());
        // $this->alojamientos = Alojamiento::all();
        return view('livewire.alojamientos.alojamiento-component',['alojamientos' => $this->alojamientos, 'datos'=> $links])->extends('layouts.adminlte');
    }

    public function store() {
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
            $imagenurl = $this->fotourl->store('destino/alojamiento');
        }

        Alojamiento::updateOrCreate(['id' => $this->alojamiento_id], [
        'descripcion' => $this->descripcion,
        'precio' => $this->precio,
        'ubicaciongps' => $this->ubicaciongps,
        'fotourl' => $imagenurl,
    ]);

        $this->reset();
        session()->flash('message', $this->alojamiento_id ? 'Alojamiento Actualizado.' : 'Alojamiento Creado.');
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

        dd($this->latitud . $this->longitud);
    }

}
