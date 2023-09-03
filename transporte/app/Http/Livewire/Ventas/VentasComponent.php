<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Cliente;
use App\Models\Venta;
use Livewire\Component;
use App\Models\Pago;
use App\Models\Paquete;


class VentasComponent extends Component
{
    public $mostrarventas=false;
    public $listadoVentas;
    public $listadoPaquetes;
    public $listadoClientes;
    public $pagos;
    public $idVenta;
    public $comprarPaquete, $comprarCliente, $precioPaqueteSeleccionado;

    public $ocultarPaquetes=false;
    public $ocultarClientes=false;
    public $ocultarVenta=true;

    public $FechaVencimiento, $CantidadCuotas;

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

    public function ConstructorVenta() {
        $this->listadoPaquetes=Paquete::all();
        $this->listadoClientes=Cliente::all();
    }

    public function SeleccionoPaquete($id) {
        $this->comprarPaquete=$id;
        $paquete =  Paquete::where('id','=',$id)->get('presupuestoestimado');
        //dd($paquete[0]['presupuestoestimado']);
        $this->precioPaqueteSeleccionado = $paquete[0]['presupuestoestimado'];
    }

    public function SeleccionoCliente($id) {
        $this->comprarCliente=$id;
        $this->ocultarPaquetes=!$this->ocultarPaquetes;
        $this->ocultarClientes=!$this->ocultarClientes;
        $this->ocultarVenta=!$this->ocultarVenta;
    }

    public function RealizarVenta() {
        $venta = new Venta;
        $venta->fecha = date("Y-m-d");
        $venta->total = $this->precioPaqueteSeleccionado;
        $venta->cliente_id=$this->comprarCliente;
        //dd($venta);
        $venta->save();    

        $date=date('y-m-d');
        for($cont=1; $cont<=$this->CantidadCuotas;$cont++) {
            $pago = new Pago;
            $pago->descripcion = "Cuota ".  $cont;
            $pago->venta_id=$venta->id;
            $pago->montopagado=0;
            $mod_date = strtotime($date."+ 30 days");
            $pago->fechavencimiento=date('Y-m-d',$mod_date);
            $date=$pago->fechavencimiento; //Toma la fecha para la siguiente cuota
            $pago->fechapago =null;
            $pago->estado="Impaga";
            $pago->save();
            
        }
    }
}
