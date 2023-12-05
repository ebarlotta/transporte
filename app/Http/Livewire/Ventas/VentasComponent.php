<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Cliente;
use App\Models\Destino;
use App\Models\Venta;
use Livewire\Component;
use App\Models\Pago;
use App\Models\Paquete;
use App\Models\Transporte;
// use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
// use Barryvdh\DomPDF\PDF;
// use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as PDF;


class VentasComponent extends Component
{
    public $mostrarlistadoventas=false;
    public $mostrarlistadopaqueteria=false;

    public $listadoVentas;
    public $listadoPaquetes;
    public $listadopaqueteria;
    public $listadoClientes;
    public $pagos;
    public $idVenta;
    public $comprarPaquete, $comprarCliente, $precioPaqueteSeleccionado;

    public $ocultarPaquetes=false;
    public $ocultarClientes=false;
    public $ocultarVenta=true;

    public $FechaVencimiento, $PrecioDelPaquete;
    public $CantidadCuotas=1;
    public $Parcial;
    public $idcuotadepagoparcial;

    public $ContClientes=0;
    public $ContDestinos=0;
    public $ContVentas=0;

    public $FiltroCliente, $FiltroPaquete;

    public function render()
    {
        $this->ContClientes=Cliente::all()->count();
        $this->ContDestinos=Destino::all()->count();
        $this->ContVentas=Venta::all()->count();
    //dd($this->ContClientes);
    // $this->ContDestinos = 0;
        return view('livewire.ventas.ventas-component')->with(['ContClientes'=>$this->ContClientes, 'ContDestinos' => $this->ContDestinos, 'ContVentas'=>$this->ContVentas])->extends('layouts.adminlte');
    }

    public function FiltrarPaquete() {
        if(strlen($this->FiltroPaquete)>0) {
            $this->listadoPaquetes = Paquete::where('nombre', 'like', '%'.$this->FiltroPaquete .'%')->get();
        // dd($this->listadoPaquetes); 
        }
        else {
            $this->listadoPaquetes = Paquete::all();
        }
    }

    public function FiltrarCliente() {
        if(strlen($this->FiltroCliente)>0) {
            $this->listadoClientes = Cliente::where('apellido', 'like', '%'.$this->FiltroCliente .'%')
            ->orwhere('nombre', 'like', '%'.$this->FiltroCliente .'%')
            ->orwhere('dni', 'like', '%'.$this->FiltroCliente .'%')
            ->get();
        //dd($this->listadoClientes); 
        }
        else {
            $this->listadoClientes = Cliente::all();
        }
    }

    public function LimpiarVariables() {
        // $this->comprarPaquete=null;
        $this->FiltroPaquete='';//Borra el paquete seleccionado
        $this->FiltrarPaquete();  //Recupera el listado completo de paquetes
        $this->listadoClientes=''; //Borra el cliente seleccionado
        $this->FiltrarCliente(); //Recupera el listado completo de clientes
        // $this->comprarCliente=null;
        // $this->precioPaqueteSeleccionado=null;
        return redirect('ventas');
    }
    public function MostrarListadoPaquetes() {
        $this->listadopaqueteria = Cliente::join('ventas', 'clientes.id', '=', 'ventas.cliente_id')->get();
        // $this->listadoVentas = Venta::join('clientes', 'ventas.cliente_id', '=', 'clientes.id')->get();
        //$this->listadoVentas = Venta::all();
        // dd($this->listadoVentas);
        $this->mostrarlistadopaqueteria=!$this->mostrarlistadopaqueteria;
        // dd($this->listadoVentas->cliente_nombre());
    }

    public function MostrarListadoVentas() {
        $this->listadoVentas = Cliente::join('ventas', 'clientes.id', '=', 'ventas.cliente_id')
        ->join('paquetes', 'paquetes.id', '=', 'ventas.paquete_id')->get();
        
        // $this->listadoVentas = Venta::join('clientes', 'ventas.cliente_id', '=', 'clientes.id')->get();
        //$this->listadoVentas = Venta::all();
        // dd($this->listadoVentas);
        $this->mostrarlistadoventas=!$this->mostrarlistadoventas;
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

    public function CapturarIdPago($id) {
        $this->idcuotadepagoparcial = $id;
    }
    public function RegistrarPagoParcial() {
        //dd($id);
                
        // Ahora modifica la cuota original disminuyendo el saldo que queda por pagar
        $pago = Pago::find($this->idcuotadepagoparcial);
        $pieces = explode("-", $pago->descripcion); //extrae el monto de la cuota que se encuentra en la descripción
        
        $pago->montopagado=substr(trim($pieces[1]),1);
        $descripcion = trim($pieces[0]) . ' - $' . (substr(trim($pieces[1]),1)-$this->Parcial);
        $pago->descripcion = $descripcion;
        $pago->fechapago = date("Y-m-d");
        $pago->montopagado=$this->Parcial;
        $this->idVenta = $pago->venta_id;
        $fechavencimiento = $pago->fechavencimiento;
        $pago->save();
        //dd($pago);

        //Genera un nuevo registro con el pago parcial de la cuota
        $pago = new Pago;
        $pago->fechapago = date("Y-m-d");
        $pago->montopagado = $this->Parcial;
        $pago->estado="Pagada";
        //$pieces = explode("-", $pago->descripcion); //extrae el monto de la cuota que se encuentra en la descripción
        $pago->descripcion = '*    ' . trim($pieces[0]) . ' - ' . trim($pieces[1]) . " A cta" . " - $" .$this->Parcial;
        $pago->venta_id = $this->idVenta;
        $pago->fechavencimiento = $fechavencimiento;
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
        $venta->paquete_id = $this->comprarPaquete;
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

    public function LeerParcial($dato) {
        $this->Parcial = $dato;
    }
    public function GenerarListadoVentasPDF() {
        // $pdf = app('dompdf.wrapper');
        // $pdf = FacadePdf::make('dompdf.wrapper');

        // $pdf->loadHTML('<h1>Styde.net</h1>');
        // $data = [
            // 'titulo' => 'Styde.net'
        // ];
$registros=10;
$saldo =1000;
$operacion='AFEPS-40595';
        $pdf = PDF::loadView('livewire.ventas.pdf_view',compact('registros','saldo','operacion'));

        return $pdf->stream('archivo.pdf');
    }

    public function GenerarCSV() {

        //Nombre del archivo que generaremos
        $fileName = 'InvTransactionsInterface.csv';
        //Arreglo que contendrá las filas de datos
        $arrayDetalle = Array();

        //Estos son los datos que recibimos del modelo que queremos leer, aquí ustedes cámbienlo por el modelo que necesiten
        $items=Cliente::all();

        //El encabezado que le dice al explorador el tipo de archivo que estamos generando
        $headers = array(
                    "Content-type"        => "text/csv",
                    "Content-Disposition" => "attachment; filename=$fileName",
                    "Pragma"              => "no-cache",
                    "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                    "Expires"             => "0"
        );
        //recorremos los registros y con ellos llenamos nuestro arreglo arrayDetall
        // apellido	nombre	tipo_documento	descripcion_documento	numero_documento	sexo	menor	nacionalidad	tripulante	ocupa_butaca
        
        foreach ($items as $item){
            $arrayDetalle[] = array('apellido' => $item->apellido,
                            'nombre'  => "$item->nombre",
                            'tipo_documento'  => 'DNI',
                            'descripcion_documento'  => null,
                            'numero_documento'  => $item->dni,
                            'sexo'  => $item->sexo,
                            'menor'  => $this->menor($item->fechanacimiento),
                            'nacionalidad'  => 'AR',
                            'tripulante'  => 0,
                            'ocupa_butaca'  => 1
                            );
                            // dd($item->nacionalidad());
        }

        //construyamos un arreglo para la información de las columnas
        $columns = array('apellido',
                        'nombre',
                        'tipo_documento',
                        'descripcion_documento',
                        'numero_documento',
                        'sexo',
                        'menor',
                        'nacionalidad',
                        'tripulante',
                        'ocupa_butaca');
        $callback = function() use($arrayDetalle, $columns) {
            $file = fopen('php://output', 'w');
            //si no quieren que el csv muestre el titulo de columnas omitan la siguiente línea.
            fputcsv($file, $columns);
                    foreach ($arrayDetalle as $item) {
                        fputcsv($file, $item);
                    }
                    fclose($file);
                };
        return response()->stream($callback, 200, $headers);                      
    }

    public function menor($fechanacimiento) {    
        if((date("Y")-date("Y", strtotime($fechanacimiento))) < 18 ){
            return 0;
        }else{
            return 1;
        }
    }
}
