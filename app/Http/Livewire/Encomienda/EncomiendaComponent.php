<?php

namespace App\Http\Livewire\Encomienda;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Encomienda;
use App\Models\Sucursal;

class EncomiendaComponent extends Component
{

    public $ContClientes=0;
    public $ContEncomiendas=0;

    public $sucursales;
    public $mostrar_sucursales=false;

    public function render()
    {
        $this->ContClientes=Cliente::count();
        $this->ContEncomiendas=Encomienda::count();
        return view('livewire.encomienda.encomienda-component')->extends('layouts.adminlte');
    }

    public function MostrarSucursales() {
        $this->sucursales=Sucursal::all();
        
        $this->mostrar_sucursales=!$this->mostrar_sucursales;

        // if($this->mostrar_sucursales)  { $this->mostrar_sucursales=false; }
        // else { $this->mostrar_sucursales=true;  }
        // dd($this->mostrar_sucursales);
    }
}
