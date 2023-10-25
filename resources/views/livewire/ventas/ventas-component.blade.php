<div>
    <link rel="stylesheet" type="text/css" href="{{asset('css/ventas/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ventas/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ventas/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ventas/colors.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <style>
        .card-resalte:hover {
        background: #b7d6ed;
        color: #fff;
        transform: scale(1.05);
        transition: 300ms;
        z-index: 9;
    }
    </style>
    <div class="grey-bg container-fluid">
        <section id="minimal-statistics">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Minimal Statistics Cards</h4>
                    <p>Statistics on minimal cards.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <a href="{{route('destinos')}}">
                        <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-pointer danger font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        {{-- @if($ContDestinos) --}}
                                        <h3>{{ $ContDestinos }}</h3>
                                        {{-- @endif --}}
                                        <span>Destinos *</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
                <!-- gg -->
                <div class="col-xl-3 col-sm-6 col-12">
                    <a href="{{route('clientes')}}">
                    <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body" href="clientes">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="success">{{ $ContClientes }}</h3>
                                        <span>Clientes</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-user success font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-graph success font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $ContVentas }}</h3>
                                        <span>Ventas Realizas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-pointer danger font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>423</h3>
                                        <span>Total Visits</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger">278</h3>
                                        <span>New Projects</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-rocket danger font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="col-xl-12 col-md-12" wire:click="MostrarListadoPaquetes()">
                        <div class="card card-resalte">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="success">156</h3>
                                            <span>Paquetería</span>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-user success font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="warning">64.89 %</h3>
                                        <span>Conversion Rate</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-pie-chart warning font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="primary">423</h3>
                                        <span>Support Tickets</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-support primary font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="primary">278</h3>
                                        <span>New Posts</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-book-open primary font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="warning">156</h3>
                                        <span>New Comments</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-bubbles warning font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 35%"
                                        aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="success">64.89 %</h3>
                                        <span>Bounce Rate</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-cup success font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger">423</h3>
                                        <span>Total Visits</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-direction danger font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="stats-subtitle">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Statistics With Subtitle</h4>
                    <p>Statistics on minimal cards with Title &amp; Sub Title.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-md-12" wire:click="MostrarListadoVentas()">
                    <div class="card overflow-hidden">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <div class="media align-items-stretch">
                                    <div class="align-self-center">
                                        <i class="icon-pencil primary font-large-2 mr-2"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Total Ventas</h4>
                                        Aca van los datos
                                        <span>Monthly blog posts</span>
                                    </div>
                                    <div class="align-self-center">
                                        <button type="button" class="btn btn-info mr-4" data-toggle="modal" wire:click="ConstructorVenta()" data-target="#ModalGestionVentas">
                                        Gestionar Ventas
                                        </button>
                                    </div>
                                    <div class="align-self-center">
                                        <h1>18,000</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if($mostrarlistadoventas)
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <div class="media align-items-stretch">
                                    <div class="media-body">
                                        <h4>Listado de Paquetes Vendidos</h4>
                                        <table class="table table-hover text-nowrap">
                                            <tr>
                                                <td>Fecha</td>
                                                <td>Cliente</td>
                                                <td>Total</td>
                                                <td>Opciones</td>
                                            </tr>
                                            @foreach ($listadoVentas as $venta)
                                            <tr>
                                                <td>{{ date('d-m-Y',strtotime($venta->fecha))}}</td>
                                                <td>{{ $venta->apellido . ', ' . $venta->nombre }}</td>
                                                <td>$ {{ number_format($venta->total,2)}}</td>
                                                <td>
                                                    <button type="button" wire:click="CargarIdVenta({{$venta->id}})" class="btn btn-info" data-toggle="modal" data-target="#ModalGestionPagos">
                                                        Gestionar Pagos
                                                    </button>
                                                    {{-- <button type="button" wire:click="CargarIdVenta({{$venta->id}})" class="btn btn-warning" data-toggle="modal" data-target="#ModalGestionPagos">
                                                        Imprimir chequera
                                                    </button> --}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if($mostrarlistadopaqueteria)
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-content">
                            <div class="card-body cleartfix">
                                <div class="media align-items-stretch">
                                    <div class="media-body">
                                        <h4>Listado de Paquetes</h4>
                                        <table class="table table-hover text-nowrap">
                                            <tr>
                                                <td>Fecha</td>
                                                <td>Cliente</td>
                                                <td>Total</td>
                                                <td>Opciones</td>
                                            </tr>
                                            @foreach ($listadopaqueteria as $venta)
                                            <tr>
                                                <td>{{ date('d-m-Y',strtotime($venta->fecha))}}</td>
                                                <td>{{ $venta->apellido . ', ' . $venta->nombre }}</td>
                                                <td>$ {{ number_format($venta->total,2)}}</td>
                                                <td>
                                                    <button type="button" wire:click="CargarIdVenta({{$venta->id}})" class="btn btn-info" data-toggle="modal" data-target="#ModalGestionPagos">
                                                        Gestionar Pagos
                                                    </button>
                                                    {{-- <button type="button" wire:click="CargarIdVenta({{$venta->id}})" class="btn btn-warning" data-toggle="modal" data-target="#ModalGestionPagos">
                                                        Imprimir chequera
                                                    </button> --}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Modal Gestión de Paquetería -->
            <!-- ====================== -->
            <div wire:ignore.self class="modal fade" id="ModalGestionPagos" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title">Gestión de Envío de Paquetes</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <table class="table table-hover text-nowrap mx-2">
                            <tr class="bg-green-500">
                                <th>Vencimiento</th>
                                <th>Descripción</th>
                                <th>Monto</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                            @if($pagos)
                                @foreach ($pagos as $pago)
                                    {{-- Si la cuota aparece pagada entonces la pinta e verde --}}
                                    @if($pago->estado=="Pagada")
                                        <tr style="background-color: lightgreen;">
                                    @else
                                        @if($pago->fechavencimiento>now())
                                            <tr style="background-color: beige;">
                                        @else
                                            <tr style="background-color: pink;">
                                        @endif
                                    @endif
                                        <td>{{ date('d-m-Y',strtotime($pago->fechavencimiento)) }}</td>
                                        <td>{{ $pago->descripcion }}</td>
                                        <td style="text-align: right">$ <label>{{ $pago->montopagado }}</label></td>
                                        @if($pago->fechapago)
                                            <td>{{ date('d-m-Y',strtotime($pago->fechapago)) }}</td>
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>{{ $pago->estado }}</td>
                                        <td>
                                            @if($pago->estado == "Pagada")
                                                {{-- <button class="btn bg-slate-500" disabled >Registrar Pago</button> --}}
                                                <button class="btn-warning" wire:click="ImprimirComprobante({{ $pago->id }})">Imprimir Comp.</button>
                                            @else
                                                <button class="btn-primary" wire:click="RegistrarPago({{ $pago->id }})">Registrar Pago</button>
                                                <button class="btn-primary" data-toggle="modal" data-target="#ModalAsentandoPagosParciales" wire:click="CapturarIdPago({{ $pago->id }})">Pago Parcial</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>No hay cuotas generadas</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>

            <!-- Modal Asentando Pagos Parciales -->
            <!-- =============================== -->
            <div wire:ignore.self class="modal fade" id="ModalAsentandoPagosParciales" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Pago parcial de cuota</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <p class="my-3 mx-auto">
                            Ingrese el monto a abonar por la cuota seleccionada:
                            <input type="text" wire:model="Parcial" style="text-align: right;">
                        </p>
                        <button type="button" class="btn btn-info m-2" wire:click="RegistrarPagoParcial()" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="ModalVentasExitosa" data-target="ModalGestionVentas" >Registrar Pago</button>
                        <br>
                    </div>
                </div>
            </div>

            <!-- Modal Gestión de Ventas -->
            <!-- ====================== -->
            <div wire:ignore.self class="modal fade" id="ModalGestionVentas" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog" role="document" style="width: 1000px; max-width: 100%">
                    <div class="modal-content " style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title">Gestión de Ventas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="row">
                            <!-- card de paquetes turisticos -->
                            <div class="col-xl-5 col-md-5 m-4">
                                <div class="card overflow-hidden card-resalte">
                                    <div class="card-content">
                                        <div class="card-body cleartfix">
                                            <div class="media align-items-stretch">
                                                <div class="align-self-center">
                                                    <i class="icon-pencil primary font-large-2 mr-2"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4>Paquetes Turísticos</h4>
                                                    Aca van los datos
                                                    <span>Monthly blog posts</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card de viajes aereos -->
                            <div class="col-xl-5 col-md-5 m-4">
                                <div class="card overflow-hidden card-resalte">
                                    <div class="card-content">
                                        <div class="card-body cleartfix">
                                            <div class="media align-items-stretch">
                                                <div class="align-self-center">
                                                    <i class="icon-pencil primary font-large-2 mr-2"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4>Viajes Aéreos</h4>
                                                    Aca van los datos
                                                    <span>Monthly blog posts</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- listado de paquetes -->
                            <div class="col-xl-4 col-md-4 m-4">
                                <input class="form-control mx-3 btn col-11 align-self-center bg-red-200 mb-2" type="text" value="" placeholder="Buscar Paquete" wire:model="FiltroCliente">
                                @if($ocultarPaquetes)
                                @else
                                @if($listadoPaquetes)
                                    @foreach ($listadoPaquetes as $paquete)
                                        <div class="card overflow-hidden card-resalte" wire:click="SeleccionoPaquete({{$paquete->id}})">
                                            <div class="card-content rounded" style="background-color: #cda3a3;">
                                                <div class="card-body cleartfix">
                                                    <div class="media align-items-stretch">
                                                        <div class="align-self-center">
                                                            <i class="icon-pencil primary font-large-2 mr-2"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6>{{ $paquete->nombre }}</h6>
                                                            <span>{{ $paquete->descripcion}}</span>
                                                        </div>
                                                        <div class="align-self-center">
                                                            <img class="m-2" src="{{ asset($paquete->fotourl)}}" alt="" style="width: 50px; height:50px ;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                @endif
                            </div>
                            <!-- listado de clientes -->
                            <div class="col-xl-4 col-md-4 m-4">
                                <input class="form-control mx-3 btn col-11 align-self-center bg-red-200 mb-2" type="text" value="" placeholder="Buscar Cliente">
                                @if($ocultarClientes)
                                @else
                                @if($comprarPaquete)
                                <input class="form-control mx-3 btn col-11 align-self-center bg-red-200" type="text" value="" placeholder="Buscar Persona">

                                    @foreach($listadoClientes as $cliente)
                                    <div class="col-xl-12 col-md-12 m-4">
                                        <h6  wire:click="SeleccionoCliente({{$cliente->id}})" class="card-resalte">{{ $cliente->apellido }}, {{ $cliente->nombre }}</h6>
                                                {{-- <div class="card overflow-hidden card-resalte" wire:click="SeleccionoCliente({{$cliente->id}})">
                                                    <div class="card-content rounded" style="background-color: #a6c49a;">
                                                        <div class="card-body cleartfix">
                                                            <div class="media align-items-stretch">
                                                                <div class="media-body">
                                                                    <h6>{{ $cliente->apellido }}, {{ $cliente->nombre }}</h6>
                                                                    <span>{{ $paquete->descripcion}}</span>
                                                                </div>
                                                                <div class="align-self-center">
                                                                    <img class="m-2" src="{{ asset('fotourl')}}" alt="" style="width: 50px; height:50px ;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}


                                    </div>
                                    @endforeach
                                @else
                                    Seleccione un paquete
                                @endif
                                @endif
                            </div>
                            <div class="col-xl-12 col-md-12 m-4">
                                @if($comprarPaquete>0 && $comprarCliente>0 and $precioPaqueteSeleccionado>0)
                                    Monto del Paquete: $ <input class="btn" type="text" value="203" wire:model="precioPaqueteSeleccionado">
                                    @if(!$ocultarVenta)
                                    <table>
                                        <tr>
                                            <td>Fecha Vencimiento</td>
                                            <td>Cantidad Cuotas</td>
                                            <td>Acción</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-control" type="date" name="FechaVencimiento" id="FechaVencimiento" wire:model="FechaVencimiento">
                                            </td>
                                            <td>
                                                <select  class="form-control" name="CantidadCuotas" id="CantidadCuotas" wire:model="CantidadCuotas">
                                                    <option value="1" selected>1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info" wire:click="RealizarVenta()" data-toggle="modal" data-target="#ModalVentasExitosa">
                                                    Realizar Venta </button>
                                            </td>
                                        </tr>
                                    </table>
                                    Monto de la cuota <input class="btn" type="text" value="{{ $precioPaqueteSeleccionado/$CantidadCuotas }}" disabled>
                                    @endif

                                @else
                                    Debe seleccionar un paquete y una persona
                                @endif
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mr-2 mb-2">
                            <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="ModalGestionVentas" >Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Felicitando la compra -->
            <!-- =========================== -->
            <div wire:ignore.self class="modal fade" id="ModalVentasExitosa" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title">Felicitaciones</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <p class="my-3 mx-auto">
                            Gracias por adquirir el paquete!!!
                        </p>
                        <button type="button" class="btn btn-info m-2" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="ModalVentasExitosa" data-target="ModalGestionVentas" >Cerrar</button>
                        <br>
                    </div>
                </div>
            </div>


        </section>
    </div>
</div>
