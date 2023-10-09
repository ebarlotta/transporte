<?php

namespace App\Http\Livewire\Comida;

use Livewire\Component;
use App\Models\Comida;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class ComidaComponent extends Component
{

    use WithFileUploads;
    use WithPagination;

    public $comidas;
    public $descripcion, $precio, $ubicaciongps, $fotourl;

    public $comida_id;

    public $ComidaAEliminar;

    

    public function render()
    {
        $this->comidas = Comida::paginate(4);
        $links = $this->comidas;
        $this->comidas = collect($this->comidas->items());

        return view('livewire.comida.comida-component',['comidas' => $this->comidas, 'datos'=> $links])->extends('layouts.adminlte');;
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
            $imagenurl = basename($this->fotourl->store('public/comidas'));
            $imagenurl = 'storage/comidas/' . $imagenurl;
        }
        
        Comida::updateOrCreate(['id' => $this->comida_id], [
            'descripcion' => $this->descripcion,
            'precio' => $this->precio,
            'ubicaciongps' => $this->ubicaciongps,
            'fotourl' => $imagenurl,
        ]);
        session()->flash('message', $this->comida_id ? 'Lugar Actualizado.' : 'Lugar Creado.');
        $this->reset();
    }

    public function edit($id) {
        $this->resetValidation();
        $comida = Comida::find($id);
        $this->descripcion = $comida->descripcion;
        $this->precio = $comida->precio;
        $this->ubicaciongps = $comida->ubicaciongps;
        $this->fotourl = $comida->fotourl;

        $this->comida_id = $id;
    }

    public function delete() {
        $comida = Comida::find($this->comida_id);
        Storage::delete($this->fotourl);
        $comida->destroy($this->comida_id);

        session()->flash('message', $this->comida_id ? 'Lugar Eliminado.' : 'No ha seleccionado un lugar a eliminar.');
    }

    public function nuevo() {
        $this->descripcion = '';
        $this->precio = '';
        $this->ubicaciongps = '';
        $this->fotourl = '';
    }

    public function isModalConsultar($id) {
        $comida = Comida::find($id);
        $this->ComidaAEliminar = $comida->descripcion;
        $this->comida_id = $id;
    }
}
