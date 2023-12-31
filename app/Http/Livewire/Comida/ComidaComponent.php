<?php

namespace App\Http\Livewire\Comida;

use Livewire\Component;
use App\Models\Comida;
use Livewire\WithFileUploads;


class ComidaComponent extends Component
{

    public $comidas;
    public $descripcion, $precio, $ubicaciongps, $fotourl;

    public $comida_id;

    public $ComidaAEliminar;

    use WithFileUploads;

    public function render()
    {
        $this->comidas = Comida::all();
        return view('livewire.comida.comida-component')->extends('layouts.adminlte');;
    }

    public function store() {
        
        $this->validate([
            'descripcion' => 'required',
            'precio' => 'required',
            'ubicaciongps' => 'required',
            'fotourl' => 'required',
        ]);

        if($this->fotourl) {}
        else { $imagenurl = $this->fotourl->store('destino/comidas'); //$this->fotourl = $this->fotourl->store('destino/comidas'); 
        }
        
        Comida::updateOrCreate(['id' => $this->comida_id], [
            'descripcion' => $this->descripcion,
            'precio' => $this->precio,
            'ubicaciongps' => $this->ubicaciongps,
            'fotourl' => $imagenurl,
        ]);
        session()->flash('message', $this->comida_id ? 'Lugar Actualizado.' : 'Lugar Creado.');
    }

    public function edit($id) {
        $comida = Comida::find($id);
        $this->descripcion = $comida->descripcion;
        $this->precio = $comida->precio;
        $this->ubicaciongps = $comida->ubicaciongps;
        if(!$this->fotourl) {
            $this->fotourl = $comida->fotourl;
        }

        $this->comida_id = $id;
    }

    public function delete() {
        $comida = Comida::find($this->comida_id);
        $comida->destroy($this->comida_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->comida_id ? 'Lugar Eliminado.' : 'No ha seleccionado un lugar a eliminar.');
    }

    public function nuevo() {
        $this->descripcion = '';
        $this->precio = '';
        $this->ubicaciongps = '';
        $this->fotourl = null;
    }

    public function isModalConsultar($id) {
        $comida = Comida::find($id);
        $this->ComidaAEliminar = $comida->descripcion;
        $this->comida_id = $id;
    }
}
