<?php

namespace App\Http\Livewire\Paqueteria;

use App\Models\Encomienda;
use App\Models\Seguimiento;
use Livewire\Component;
use App\Models\Sucursal;
use App\Models\Tarifas;

class PaqueteriaComponent extends Component
{
    public $mostrar_sucursales=false;
    public $mostrar_encomiendas=false;
    public $mostrar_seguimiento=false;
    public $mostrar_tarifas=false;


    public $sucursales,$encomiendas,$tarifas,$seguimientos;

    public $ContClientes,$ContEncomiendas;

    public function render()
    {
        return view('livewire.paqueteria.paqueteria-component')->extends('layouts.adminlte');
    }

    public function MostrarSucursales() {
        $this->sucursales=Sucursal::all();
        $this->mostrar_sucursales=!$this->mostrar_sucursales;
        $this->mostrar_encomiendas=false;
        $this->mostrar_tarifas=false;
        $this->mostrar_seguimiento=false;
    }
    public function MostrarTarifas() {
        $this->tarifas=Tarifas::all();
        $this->mostrar_tarifas=!$this->mostrar_tarifas;
        $this->mostrar_seguimiento=false;
        $this->mostrar_encomiendas=false;
        $this->mostrar_sucursales=false;
    }
    public function MostrarEncomiendas() {
        $this->encomiendas=Encomienda::all();
        $this->mostrar_encomiendas=!$this->mostrar_encomiendas;
        $this->mostrar_tarifas=false;
        $this->mostrar_seguimiento=false;
        $this->mostrar_sucursales=false;
    }
    public function MostrarSeguimientos() {
        $this->seguimientos=Seguimiento::all();
        $this->mostrar_seguimiento=!$this->mostrar_seguimiento;
        $this->mostrar_encomiendas=false;
        $this->mostrar_tarifas=false;
        $this->mostrar_sucursales=false;
    }
}
