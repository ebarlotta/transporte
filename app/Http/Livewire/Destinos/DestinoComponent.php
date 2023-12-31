<?php

namespace App\Http\Livewire\Destinos;

use Livewire\Component;
use App\Models\Destino;
use App\Models\Nacionalidad;

use Livewire\WithFileUploads;

class DestinoComponent extends Component
{
    use WithFileUploads;

    public $destinos;
    public $descripcion, $clima, $ubicaciongps, $fotourl;
    public $nombre, $mejorepocaparavisitar, $presupuestoestimado, $otrosenlaces, $pais_id;  
    public $destino_id;
    public $nombreparaeliminar;

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
            'fotourl' => 'image|max:2048',
            'mejorepocaparavisitar' => 'required',
            'presupuestoestimado' => 'required|integer',
            'otrosenlaces' => 'required',
            'pais_id' => 'required',
        ]);
        $imagenurl = $this->fotourl->store('destino');
        //dd($imagenurl);
        Destino::updateOrCreate(['id' => $this->destino_id], [
        'nombre' => $this->nombre,
        'descripcion' => $this->descripcion,
        'clima' => $this->clima,
        'fotourl'=> $imagenurl,
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

    
    public function BuscarDatosDestinoParaEliminar($id) {
        $destino = Destino::find($id);
        $this->nombreparaeliminar = $destino->nombre;
        $this->destino_id = $id;
    }

    // public function delete() {
    //     $localidad = Localidad::find($this->localidad_id);
    //     $clientes = Cliente::where('localidad_id','=', $this->localidad_id)->get();
    //     if(count($clientes)) {
    //         session()->flash('messageBad', ' No se puede eliminar la Localidad ya que pertenece a otra tabla');
    //     } else {
    //         $localidad->destroy($this->localidad_id);
    //         session()->flash('message', $this->localidad_id ? 'Localidad Eliminada.' : 'No ha seleccionado una localidad a eliminar.');
    //     }
    // }

    public function delete() {
        $destino = Destino::find($this->destino_id);
        $destino->destroy($this->destino_id);

        session()->flash('message', $this->destino_id ? 'Destino Eliminado.' : 'No ha seleccionado un lugar a eliminar.');
    }
}
