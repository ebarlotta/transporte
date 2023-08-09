<?php

namespace App\Http\Livewire\Destinos;

use Livewire\Component;
use App\Models\Destino;
use App\Models\Nacionalidad;

class DestinoComponent extends Component
{
    public $destinos;
    public $descripcion, $clima, $ubicaciongps, $fotourl;
    public $nombre, $mejorepocaparavisitar, $presupuestoestimado, $otrosenlaces, $pais_id;  
    public $destino_id;

    public $paises;

    public function render()
    {
        $this->paises = Nacionalidad::all();
        //dd($this->paises);
        $this->destinos = Destino::all();
        return view('livewire.destinos.destino-component')->extends('layouts.adminlte');
    }

    public function store() {
        $this->validate([
            'descripcion' => 'required',
            'clima' => 'required',
            'ubicaciongps' => 'required',
            //'fotourl' => 'required|integer',
            'mejorepocaparavisitar' => 'required',
            'presupuestoestimado' => 'required|integer',
            'otrosenlaces' => 'required',
            'pais_id' => 'required',
        ]);
        Destino::updateOrCreate(['id' => $this->destino_id], [
        'nombre' => $this->nombre,
        'descripcion' => $this->descripcion,
        'clima' => $this->clima,
        'ubicaciongps' => $this->ubicaciongps,
        'mejorepocaparavisitar' => $this->mejorepocaparavisitar,
        'presupuestoestimado' => $this->presupuestoestimado,
        'otrosenlaces' => $this->otrosenlaces,
        'pais_id' => $this->pais_id,
    ]);
        session()->flash('message', $this->destino_id ? 'Destino Actualizado.' : 'Destino Creado.');
    }

    public function edit($id) {
        $destino = Destino::find($id);
        $this->nombre = $destino->nombre;
        $this->descripcion = $destino->descripcion;
        $this->clima = $destino->clima;
        $this->ubicaciongps = $destino->ubicaciongps;
        $this->fotourl = $destino->fotourl;
        $this->mejorepocaparavisitar = $destino->mejorepocaparavisitar;
        $this->presupuestoestimado = $destino->presupuestoestimado;
        $this->otrosenlaces = $destino->otrosenlaces;
        $this->pais_id = $destino->pais_id;

        $this->destino_id = $id;
    }

    public function delete() {
        $destino = Destino::find($this->destino_id);
        $destino->destroy($this->destino_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->destino_id ? 'Destino Eliminado.' : 'No ha seleccionado un lugar a eliminar.');
    }
}
