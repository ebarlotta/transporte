<?php

namespace App\Http\Livewire\Servicios;

use Livewire\Component;
use App\Models\Servicio;
use Illuminate\Support\Facades\Storage;

use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ServicioComponent extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $servicios;
    public $descripcion, $precio, $ubicaciongps, $fotourl;

    public $servicio_id;

    public $ServicioAEliminar;

    public function render()
        {
            $this->servicios = Servicio::all();
            return view('livewire.servicios.servicio-component',['servicios' => $this->servicios, 'datos'=> $links])->extends('layouts.adminlte');
        }
    public function store() {
        $this->validate([
            'descripcion' => 'required',
            'fotourl' => 'required',
        ]);

        // if($this->fotourl) {} else {$this->fotourl = $this->fotourl->store('destino/servicios'); }
        if(Storage::exists($this->fotourl)){
            $imagenurl = $this->fotourl;
        }
        else {
            $imagenurl = basename($this->fotourl->store('public/servicios'));
            $imagenurl = 'storage/comidas/' . $imagenurl;
        }

        
        Servicio::updateOrCreate(['id' => $this->servicio_id], [
        'descripcion' => $this->descripcion,
        'fotourl' => $imagenurl,
    ]);
        session()->flash('message', $this->servicio_id ? 'Servicio Actualizado.' : 'Servicio Creado.');
        $this->reset();
    }

    public function edit($id) {
        $servicio = Servicio::find($id);
        $this->descripcion = $servicio->descripcion;
        $this->fotourl = $servicio->fotourl;

        $this->servicio_id = $id;
    }

    public function delete() {        
        $servicio = Servicio::find($this->servicio_id);
        Storage::delete($this->fotourl);
        $servicio->destroy($this->servicio_id);

        session()->flash('message', $this->servicio_id ? 'Servicio Eliminado.' : 'No ha seleccionado un lugar a eliminar.');
        $this->servicio_id = null;
        $this->reset();
    }

    public function isModalConsultar($id) {
        $servicio = Servicio::find($id);
        $this->ServicioAEliminar = $servicio->descripcion;
        $this->servicio_id = $id;
    }

    public function nuevo() {
        $this->descripcion = '';
        $this->fotourl = '';

        $this->servicio_id = null;
    }
}
