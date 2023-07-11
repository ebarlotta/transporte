<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Localidad;
use App\Models\Nacionalidad;
use App\Models\Provincia;

class ClienteComponent extends Component
{
    public $clientes;
    public $isModalCreate=false;
    public $apellido, $nombre, $direccion, $dni, $telefono, $email, $fechanacimiento, $nacionalidad_id, $provincia_id, $localidad_id;

    public $nacionalidades, $provincias, $localidades;

    public function render()
    {
        $this->clientes = Cliente::all();
        $this->nacionalidades = Nacionalidad::all();
        $this->provincias = Provincia::all();
        $this->localidades = Localidad::all();
        //dd($this->clientes);
        return view('livewire.cliente.cliente-component');
    }

    public function isModalCreateChange() {
        $this->isModalCreate = !$this->isModalCreate;
    }
}
