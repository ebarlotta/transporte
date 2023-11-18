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

    public function render() {
        return view('livewire.paqueteria.paqueteria-component')->extends('layouts.adminlte');
    }
    public function BuscarDatos($id,$lugar) {
        switch ($lugar) {
            case 'sucursal':     $temp = Sucursal::find($id);     $this->nombresucursal=$temp->nombresucursal; $this->sucursal_id=$id; break;
            case 'tarifa':       $temp = Tarifas::find($id);      $this->descripcionpaquete=$temp->descripcionpaquete; $this->tarifa_id=$id; break;
            case 'encomienda':   $temp = Encomienda::find($id);   $this->sucursaldestino=$temp->sucursaldestino;$this->direcciondestinatario=$temp->direcciondestinatario; $this->encomienda_id=$id; break;
            case 'seguimiento':  $temp = Seguimiento::find($id);  $this->encomienda_id=$temp->encomienda_id; $this->seguimiento_id=$id; break;
        }
    }
    public function CargaDatosAlModal($id,$lugar) {
        if($id) {
            switch($lugar) {
                case 'sucursal': $temp = Sucursal::find($id); 
                                $this->nombresucursal=$temp->nombresucursal;
                                $this->direccionsucursal=$temp->direccionsucursal;
                                $this->telefonosucursal=$temp->telefonosucursal;
                                $this->CP=$temp->CP;
                                $this->responsablesucursal=$temp->responsablesucursal;
                                $this->observaciones=$temp->observaciones;  
                                $this->sucursal_id = $id;
                                break;
                case 'tarifa': $temp = Tarifas::find($id)->get(); 
                                $this->descripcionpaquete=$temp->descripcionpaquete;
                                $this->largo=$temp->largo;
                                $this->ancho=$temp->ancho;
                                $this->alto=$temp->alto;
                                $this->peso=$temp->peso;
                                $this->monto=$temp->monto;
                                $this->tarifa_activo=$temp->activo;
                                $this->tarifa_id = $id;
                                break;
                case 'encomienda': $temp = Encomienda::find($id)->get(); 
                                $this->direccionremitente=$temp->direccionremitente;
                                $this->sucursalorigen=$temp->sucursalorigen;
                                $this->clienteorigen_id=$temp->clienteorigen_id;
                                $this->telefonoremitente=$temp->telefonoremitente;
                                $this->emailremitente=$temp->emailremitente;
                                $this->clientedestino_id=$temp->clientedestino_id;
                                $this->direcciondestinatario=$temp->direcciondestinatario;
                                $this->sucursaldestino=$temp->sucursaldestino;
                                $this->valordeclarado=$temp->valordeclarado;
                                $this->cantidadbultos=$temp->cantidadbultos;
                                $this->encomienda_tarifa_id=$temp->tarifa_id;
                                $this->encomienda_observaciones=$temp->observaciones;
                                $this->encomienda_id = $id;
                                break;
                case 'seguimiento': $temp = Seguimiento::find($id)->get(); 
                                $this->seguimiento_encomienda_id=$temp->encomienda_id;
                                $this->descripcionseguimiento=$temp->descripcionseguimiento;
                                $this->fecha=$temp->fecha;
                                $this->usuario_id=$temp->usuario_id;
                                $this->seguimiento_id = $id;
                                break;
            }
        }
        else {
            switch($lugar) {
                case 'sucursal': $this->sucursal_id=$this->nombresucursal=$this->direccionsucursal=$this->telefonosucursal=$this->CP=$this->responsablesucursal=$this->observaciones=''; break;
                case 'tarifa': $this->tarifa_id=$this->tarifa_id=$this->descripcionpaquete=$this->largo=$this->ancho=$this->alto=$this->peso=$this->monto=$this->tarifa_activo=''; break;
                case 'encomienda': $this->encomienda_id=$this->encomienda_id=$this->direccionremitente=$this->sucursalorigen=$this->clienteorigen_id=$this->telefonoremitente=$this->emailremitente=$this->clientedestino_id=$this->direcciondestinatario=$this->sucursaldestino=$this->valordeclarado=$this->cantidadbultos=$this->encomienda_tarifa_id=$this->encomienda_observaciones=''; break;
                case 'seguimiento': $this->seguimiento_id=$this->seguimiento_id=$this->seguimiento_encomienda_id=$this->descripcionseguimiento=$this->fecha=$this->usuario_id=''; break;
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

    public function store($lugar) {
        switch ($lugar) {
            case 'sucursales' : 
                $this->validate([
                    'nombresucursal' => 'required',
                    'direccionsucursal' => 'required',
                    'telefonosucursal' => 'required',
                    'CP' => 'required',
                    'responsablesucursal' => 'required',
                    'observaciones' =>  'required',
                ]);
                Sucursal::updateOrCreate(['id' => $this->sucursal_id], [
                    'nombresucursal' => $this->nombresucursal,
                    'direccionsucursal' => $this->direccionsucursal,
                    'telefonosucursal' => $this->telefonosucursal,
                    'CP' => $this->CP,
                    'responsablesucursal' => $this->responsablesucursal,
                    'observaciones' => $this->observaciones,
                ]);
                session()->flash('message', $this->sucursal_id ? 'Sucursal Actualizada.' : 'Sucursal Creada.');
                $this->reset();
                break;
            case 'seguimiento' :
                $this->validate([
                    'seguimiento_encomienda_id' => 'required',
                    'descripcionseguimiento' => 'required',
                    'fecha' => 'required',
                    // 'usuario_id' => 'required',
                ]);
                Seguimiento::updateOrCreate(['id' => $this->seguimiento_id], [
                    'encomienda_id' => $this->seguimiento_encomienda_id,
                    'descripcionseguimiento' => $this->descripcionseguimiento,
                    'fecha' => $this->fecha,
                    'usuario_id' => 1,  // ARREGLAR $this->usuario_id,
                ]);
                session()->flash('message', $this->seguimiento_id ? 'Seguimiento Actualizado.' : 'Seguimiento Creado.');
                $this->reset();break;
            case 'encomienda' :                
                $this->validate([
                    'direccionremitente' => 'required',
                    'sucursalorigen' => 'required',
                    'clienteorigen_id' => 'required',
                    'telefonoremitente' => 'required',
                    'emailremitente' => 'required',
                    'clientedestino_id' => 'required',
                    'direcciondestinatario' => 'required',
                    'sucursaldestino' => 'required',
                    'valordeclarado' => 'required',
                    'cantidadbultos' => 'required',
                    'encomienda_tarifa_id' => 'required',
                    'encomienda_observaciones' => 'required',
                ]);
                Encomienda::updateOrCreate(['id' => $this->encomienda_id], [
                    'direccionremitente' => $this->direccionremitente,
                    'sucursalorigen' => $this->sucursalorigen,
                    'clienteorigen_id' => $this->clienteorigen_id,
                    'telefonoremitente' => $this->telefonoremitente,
                    'emailremitente' => $this->emailremitente,
                    'clientedestino_id' => $this->clientedestino_id,
                    'direcciondestinatario' => $this->direcciondestinatario,
                    'sucursaldestino' => $this->sucursaldestino,
                    'valordeclarado' => $this->valordeclarado,
                    'cantidadbultos' => $this->cantidadbultos,
                    'encomienda_tarifa_id' => $this->encomienda_tarifa_id,
                    'encomienda_observaciones' => $this->encomienda_observaciones,
                ]);
                session()->flash('message', $this->encomienda_id ? 'Encomienda Actualizado.' : 'Encomienda Creado.');
                $this->reset();break;
            case 'tarifa' : 
                $this->validate([
                    'descripcionpaquete' => 'required',
                    'largo' => 'required',
                    'ancho' => 'required',
                    'alto' => 'required',
                    'peso' => 'required',
                    'monto' =>  'required',
                    'tarifa_activo' =>  'required',
                ]);
                Tarifas::updateOrCreate(['id' => $this->tarifa_id], [
                    'descripcionpaquete' => $this->descripcionpaquete,
                    'largo' => $this->largo,
                    'ancho' => $this->ancho,
                    'alto' => $this->alto,
                    'peso' => $this->peso,
                    'monto' => $this->monto,
                    'activo' => $this->tarifa_activo,
                ]);
                session()->flash('message', $this->tarifa_id ? 'Tarifas Actualizada.' : 'Tarifas Creada.');
                $this->reset();
                break;
        }
    }

    public function destroy($id, $lugar) {
        switch ($lugar) {
            case 'sucursales' : $sucursal = Sucursal::find($id); $sucursal->destroy($id); $this->sucursal_id=null; session()->flash('message', 'Sucursal Eliminada.'); $this->reset(); break;
            case 'seguimientos' : $seguimiento = Seguimiento::find($id); $seguimiento->destroy($id);  $this->seguimiento_id=null; session()->flash('message', 'Seguimiento Eliminada.'); $this->reset(); break;
            case 'encomiendas' : $encomienda = Encomienda::find($id); $encomienda->destroy($id);  $this->encomienda_id=null; session()->flash('message', 'Encomienda Eliminada.'); $this->reset(); break;
            case 'tarifas' : $tarifa = Tarifas::find($id); $tarifa->destroy($id);  $this->tarifa_id=null; session()->flash('message', 'Tarifa Eliminada.'); $this->reset(); break;
        }
    }
}
