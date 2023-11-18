<?php

namespace App\Http\Livewire\Paqueteria;

use App\Models\Encomienda;
use App\Models\Seguimiento;
use Livewire\Component;
use App\Models\Sucursal;
use App\Models\Tarifas;

class PaqueteriaComponent extends Component
{
    //Variables para mostrar/ocultar
    public $mostrar_sucursales=false;
    public $mostrar_encomiendas=false;
    public $mostrar_seguimiento=false;
    public $mostrar_tarifas=false;

    //Listados
    public $sucursales,$encomiendas,$tarifas,$seguimientos;

    //Atributos
    public $sucursal_id, $nombresucursal, $direccionsucursal, $telefonosucursal, $CP, $responsablesucursal, $observaciones, $activo; //Sucursales
    public $tarifa_id, $descripcionpaquete, $largo, $ancho, $alto, $peso, $monto, $tarifa_activo; //Tarifas
    public $encomienda_id, $direccionremitente, $sucursalorigen, $clienteorigen_id, $telefonoremitente, $emailremitente, $clientedestino_id, $direcciondestinatario, $sucursaldestino, $valordeclarado, $cantidadbultos, $encomienda_tarifa_id, $encomienda_observaciones; // Encomiendas
    public $seguimiento_id, $seguimiento_encomienda_id, $descripcionseguimiento, $fecha, $usuario_id;  // Seguimientos

    public $ContClientes,$ContEncomiendas;

    public function render()
    {
        return view('livewire.paqueteria.paqueteria-component')->extends('layouts.adminlte');
    }

    public function BuscarDatos($id,$lugar) {
        switch ($lugar) {
            case 'sucursal':     $temp = Sucursal::find($id)->get('nombresucursal');                            $this->nombresucursal=$temp[0]['nombresucursal']; $this->sucursal_id=$id; break;
            case 'tarifa':       $temp = Tarifas::find($id)->get('descripcionpaquete');                         $this->descripcionpaquete=$temp[0]['descripcionpaquete']; $this->tarifa_id=$id; break;
            case 'encomienda':   $temp = Encomienda::find($id)->get();   $this->sucursaldestino=$temp[0]['sucursaldestino'];$this->direcciondestinatario=$temp[0]['direcciondestinatario']; $this->encomienda_id=$id; break;
            case 'seguimiento':  $temp = Seguimiento::find($id)->get('encomienda_id');                          $this->encomienda_id=$temp[0]['encomienda_id']; $this->seguimiento_id=$id; break;
        }
    }

    public function CargaDatosAlModal($id,$lugar) {
        if($id) {
            switch($lugar) {
                case 'sucursal': $temp = Sucursal::find($id)->get(); 
                                $this->nombresucursal=$temp[0]['nombresucursal'];
                                $this->direccionsucursal=$temp[0]['direccionsucursal'];
                                $this->telefonosucursal=$temp[0]['telefonosucursal'];
                                $this->CP=$temp[0]['CP'];
                                $this->responsablesucursal=$temp[0]['responsablesucursal'];
                                $this->observaciones=$temp[0]['observaciones'];  break;
                case 'tarifa': $temp = Tarifas::find($id)->get(); 
                                $this->descripcionpaquete=$temp[0]['descripcionpaquete'];
                                $this->largo=$temp[0]['largo'];
                                $this->ancho=$temp[0]['ancho'];
                                $this->alto=$temp[0]['alto'];
                                $this->peso=$temp[0]['peso'];
                                $this->monto=$temp[0]['monto'];
                                $this->tarifa_activo=$temp[0]['activo'];
                                break;
                case 'encomienda': $temp = Encomienda::find($id)->get(); 
                                $this->direccionremitente=$temp[0]['direccionremitente'];
                                $this->sucursalorigen=$temp[0]['sucursalorigen'];
                                $this->clienteorigen_id=$temp[0]['clienteorigen_id'];
                                $this->telefonoremitente=$temp[0]['telefonoremitente'];
                                $this->emailremitente=$temp[0]['emailremitente'];
                                $this->clientedestino_id=$temp[0]['clientedestino_id'];
                                $this->direcciondestinatario=$temp[0]['direcciondestinatario'];
                                $this->sucursaldestino=$temp[0]['sucursaldestino'];
                                $this->valordeclarado=$temp[0]['valordeclarado'];
                                $this->cantidadbultos=$temp[0]['cantidadbultos'];
                                $this->encomienda_tarifa_id=$temp[0]['tarifa_id'];
                                $this->encomienda_observaciones=$temp[0]['observaciones'];
                                break;
                case 'seguimiento': $temp = Seguimiento::find($id)->get(); 
                                $this->seguimiento_encomienda_id=$temp[0]['encomienda_id'];
                                $this->descripcionseguimiento=$temp[0]['descripcionseguimiento'];
                                $this->fecha=$temp[0]['fecha'];
                                $this->usuario_id=$temp[0]['usuario_id'];
                                break;
            }
        }
        else {
            switch($lugar) {
                case 'sucursal': $this->nombresucursal=$this->direccionsucursal=$this->telefonosucursal=$this->CP=$this->responsablesucursal=$this->observaciones=''; break;
                case 'tarifa': break;
                case 'encomienda': break;
                case 'seguimiento': break;
            }
        }
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
