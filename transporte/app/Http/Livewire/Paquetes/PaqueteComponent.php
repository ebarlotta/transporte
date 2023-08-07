<?php

namespace App\Http\Livewire\Paquetes;

use Livewire\Component;
use App\Models\Paquete;

class PaqueteComponent extends Component
{
    public function render()
    {
        $this->paquetes = Paquete::all();
        return view('livewire.paquetes.paquete-component');
    }

    public $paquetes;
    public $descripcion, $precio, $duraciontotal, $presupuestoestimado, $fechasdisponibles, $fotourl;

    public $paquete_id;

    public function store() {
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'duraciontotal' => 'required',
            'presupuestoestimado' => 'required',
            'fechasdisponibles' => 'required',
            'fotourl' => 'required',
        ]);

        Paquete::updateOrCreate(['id' => $this->paquete_id], [
        'descripcion' => $this->descripcion,
        'precio' => $this->precio,
        'duraciontotal' => $this->duraciontotal,
        'presupuestoestimado' => $this->presupuestoestimado,
        'fechasdisponibles' => $this->fechasdisponibles,
        'fotourl' => $this->fotourl,
    ]);
        session()->flash('message', $this->paquete_id ? 'Paquete Actualizado.' : 'Paquete Creado.');
    }

    public function edit($id) {
        $paquete = Paquete::find($id);
        $this->descripcion = $paquete->descripcion;
        $this->precio = $paquete->precio;
        $this->duraciontotal = $paquete->duraciontotal;
        $this->presupuestoestimado = $paquete->presupuestoestimado;
        $this->fechasdisponibles = $paquete->fechasdisponibles;
        $this->fotourl = $paquete->fotourl;

        $this->paquete_id = $id;
    }

    public function delete() {
        $paquete = Paquete::find($this->paquete_id);
        $paquete->destroy($this->paquete_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->paquete_id ? 'Paquete Eliminado.' : 'No ha seleccionado un lugar a eliminar.');
    }
}
