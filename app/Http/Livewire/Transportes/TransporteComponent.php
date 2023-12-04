<?php

namespace App\Http\Livewire\Transportes;

use Livewire\Component;
use App\Models\Transporte;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class TransporteComponent extends Component
{
    use WithFileUploads;
    use WithPagination;

    public function render()
    {
        $this->transportes = Transporte::paginate(10);
        $links = $this->transportes;
        $this->transportes = collect($this->transportes->items());

        // $this->transportes = Transporte::all();
        return view('livewire.transportes.transporte-component',['transportes' => $this->transportes, 'datos'=> $links])->extends('layouts.adminlte');
    }

    public $transportes;
    public $descripcion, $precio, $ubicaciongps, $fotourl, $salida, $llegada, $devolverenotrodestino,$propio;

    public $transporte_id;

    public function nuevo() {
        $this->descripcion = '';
        $this->precio = 0;
        $this->ubicaciongps = '';
        $this->fotourl = 'img/Sin_imagen.jpg';
        $this->salida = null;
        $this->llegada = null;
        $this->devolverenotrodestino = true;
        $this->propio = true;
    }
    public function store() {
        $this->validate([
            'descripcion' => 'required',
            'precio' => 'required',
            'ubicaciongps' => 'required',
            'fotourl' => 'required',
            'salida' => 'required',
            'llegada' => 'required',
            'devolverenotrodestino' => 'required',
        ]);

//dd($this->fotourl);
        // if($this->fotourl) {
        //     // Storage::delete('public/transportes/' . $this->fotourl);
        //     $imagenurl = basename($this->fotourl->store('public/transportes'));
        //     $imagenurl = 'storage/transportes/' . $imagenurl;
        //     //$imagenurl = $this->fotourl;
        // } else {
        //     $imagenurl = 'storage/transportes/Sin_imagen.jpg';
        // }

        //$a = substr(Storage::url($this->fotourl),17); //   ::exists($this->fotourl);
        //dd($a);
        //if (Storage::exists($a)) {
        // dd(Storage::exists('transportes/' . $this->fotourl));
        // if(Storage::exists($this->fotourl)){
        //    $imagenurl = $this->fotourl;
        //}
        //else {
        //    $imagenurl = basename($this->fotourl->store('public/transportes'));
        //    $imagenurl = 'storage/transportes/' . $imagenurl;
        //}

        Transporte::updateOrCreate(['id' => $this->transporte_id], [
        'descripcion' => $this->descripcion,
        'precio' => $this->precio,
        'ubicaciongps' => $this->ubicaciongps,
        //'fotourl' => $imagenurl,
        'salida' => $this->salida,
        'llegada' => $this->llegada,
        'devolverenotrodestino' => $this->devolverenotrodestino,
        'propio' => $this->propio,
    ]);
        session()->flash('message', $this->transporte_id ? 'Transporte Actualizado.' : 'Transporte Creado.');
        $this->reset();
    }

    public function edit($id) {
        $transporte = Transporte::find($id);
        $this->descripcion = $transporte->descripcion;
        $this->precio = $transporte->precio;
        $this->ubicaciongps = $transporte->ubicaciongps;
        $this->fotourl = $transporte->fotourl;
        $this->salida = $transporte->salida;
        $this->llegada = $transporte->llegada;
        $this->devolverenotrodestino = $transporte->devolverenotrodestino;
        $this->propio = $transporte->propio;

        $this->transporte_id = $id;
    }

    public function delete() {
        $transporte = Transporte::find($this->transporte_id);
        $transporte->destroy($this->transporte_id);
        //$this->isModalConsultar(0); // PARA HACER

        session()->flash('message', $this->transporte_id ? 'Transporte Eliminado.' : 'No ha seleccionado un lugar a eliminar.');
        $this->reset();
    }
}
