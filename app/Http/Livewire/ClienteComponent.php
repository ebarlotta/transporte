<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Localidad;
use App\Models\Nacionalidad;
use App\Models\Provincia;

class ClienteComponent extends Component
{
    public $clientes, $cliente_id;
    public $isModalCreate=false;
    public $isModalConsultar=false; 
    public $apellido, $nombre, $direccion, $dni, $telefono, $email, $fechanacimiento, $nacionalidad_id, $provincia_id, $localidad_id;

    public $nacionalidades, $provincias, $localidades;

    public $cuotas;

    public function render()
    {
        $this->clientes = Cliente::all();
        $this->nacionalidades = Nacionalidad::all();
        $this->provincias = Provincia::all();
        $this->localidades = Localidad::all();
        return view('livewire.cliente.cliente-component')->extends('layouts.adminlte');
    }

    public function edit($id) {
        $cliente = Cliente::find($id);
        $this->apellido = $cliente->apellido;
        $this->nombre = $cliente->nombre;
        $this->direccion = $cliente->direccion;
        $this->dni = $cliente->dni;
        $this->telefono = $cliente->telefono;
        $this->email = $cliente->email;
        $this->fechanacimiento = $cliente->fechanacimiento;
        $this->nacionalidad_id = $cliente->nacionalidad_id;
        $this->provincia_id = $cliente->provincia_id;
        $this->localidad_id = $cliente->localidad_id;
        $this->cliente_id = $id;
    }

    public function store() {
        $this->validate([
            'apellido' => 'required',
            'nombre' => 'required',
            'dni' => 'required',
            'nacionalidad_id' => 'required|integer',
            'provincia_id' => 'required|integer',
            'localidad_id' =>  'required|integer',
        ]);

        Cliente::updateOrCreate(['id' => $this->cliente_id], [
        'apellido' => $this->apellido,
        'nombre' => $this->nombre,
        'direccion' => $this->direccion,
        'dni' => $this->dni,
        'telefono' => $this->telefono,
        'email' => $this->email,
        'fechanacimiento' => $this->fechanacimiento,
        'nacionalidad_id' => $this->nacionalidad_id,
        'provincia_id' => $this->provincia_id,
        'localidad_id' => $this->localidad_id,
    ]);
        session()->flash('message', $this->cliente_id ? 'Cliente Actualizado.' : 'Cliente Creado.');
        $this->isModalCreateChange();
    }

    public function delete() {
        $cliente = Cliente::find($this->cliente_id);
        $cliente->destroy($this->cliente_id);
        $this->isModalConsultar(0);
    }
    
    public function DevolverCuotas($id) {
        $this->cuotas = ['cuota 1' => 100, 'cuota 2' => 100, 'cuota 3' => 100];
        $this->cuotas = json_encode($this->cuotas);
    }

    public function Consultar($id) {
        $cliente = Cliente::find($id);
        $this->nombre = $cliente->nombre;
        $this->apellido = $cliente->apellido;
        $this->cliente_id = $id;
    }
        public function isModalCreateChange() {
        $this->isModalCreate = !$this->isModalCreate;
    }

    public function isModalConsultar($id) {
        if($id<>0) {
        $this->isModalConsultar = !$this->isModalConsultar;
        $this->Consultar($id);
        } else {
            $this->isModalConsultar =false;
        }
    }

}
