<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Cliente;
use App\Models\Destino;
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

    public $FechaVencimiento, $PrecioDelPaquete;
    public $CantidadCuotas=1;

    public $ContClientes=0, $ContDestinos=0, $ContVentas=0;

    public function render()
    {
        $this->ContClientes=Cliente::all()->count();
        $this->ContDestinos=Destino::all()->count();
        $this->ContVentas=Venta::all()->count();
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
        $pieces = explode("-", $pago->descripcion); //extrae el monto de la cuota que se encuentra en la descripción
        //dd(floatval(substr(trim($pieces[1]),1)));
        $pago->montopagado=substr(trim($pieces[1]),1);
        //dd($pago->montopagado);
        $pago->estado="Pagada";
        $pago->save();
        $this->CargarIdVenta($this->idVenta);
    }

    public function ConstructorVenta() {
        $this->listadoPaquetes=Paquete::all();
        $this->listadoClientes=Cliente::all();
        $this->FechaVencimiento = date('Y-m-d'); 
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
        $venta->total = $this->precioPaqueteSeleccionado; //$this->CantidadCuotas;
        $venta->cliente_id=$this->comprarCliente;
        //dd($venta);
        $venta->save();    
        $date=$this->FechaVencimiento;
        for($cont=1; $cont<=$this->CantidadCuotas;$cont++) {
            $pago = new Pago;
            $pago->descripcion = "Cuota ".  $cont . " - $" . number_format($this->precioPaqueteSeleccionado/$this->CantidadCuotas,2, '.', '');
            $pago->venta_id=$venta->id;
            $pago->montopagado=0;
            $pago->fechavencimiento=$date;
            $mod_date = strtotime($date."+ 30 days");
            $date=date('Y-m-d',$mod_date);
            $pago->fechapago =null;
            $pago->estado="Impaga";
            $pago->save();
        }
    }
}
