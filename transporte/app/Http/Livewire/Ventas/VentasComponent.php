<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Cliente;
use App\Models\Venta;
use Livewire\Component;
use App\Models\Pago;

class VentasComponent extends Component
{
    public $mostrarventas=false;
    public $listadoVentas;
    public $pagos;
    public $idVenta;

    public function render()
    {
        return view('livewire.ventas.ventas-component')->extends('layouts.adminlte');
    }

    public function MostrarListado() {
        $this->listadoVentas = Cliente::join('ventas', 'clientes.id', '=', 'ventas.cliente_id')->get();
        // $this->listadoVentas = Venta::join('clientes', 'ventas.cliente_id', '=', 'clientes.id')->get();
        //$this->listadoVentas = Venta::all();
        // dd($this->listadoVentas);
        $this->mostrarventas=!$this->mostrarventas;
        // dd($this->listadoVentas->cliente_nombre());
    }

    public function CargarIdVenta($idVenta) {
        $this->idVenta = $idVenta;
        $this->pagos = Pago::where('venta_id','=',$idVenta)->orderby('fechavencimiento')->get();
        //dd($this->pagos);
    }

    public function RegistrarPago($id) {
        //dd($id);
        $pago = Pago::find($id);
        $pago->fechapago = date("Y-m-d");
        $pago->montopagado=1000;
        $pago->estado="Pagada";
        $pago->save();
        $this->CargarIdVenta($this->idVenta);
    }
}
