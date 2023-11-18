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
                    <h4 class="text-uppercase aling-center">Sistema de Paqueteria</h4>
                    <p>Logistica de distibucion de Encomiendas</p>
                </div>
            </div>
            <div class="row">

                <!-- gg -->
                <div class="col-xl-3 col-sm-6 col-12">
                    <a href="{{route('clientes')}}">
                    <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body" href="clientes">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        @if($ContClientes)
                                            <h3>{{ $ContClientes }}</h3>
                                        @endif
                                        <span>Nuevo Envio</span>
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
                    <a href="{{route('destinos')}}">
                        <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-pointer danger font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        @if($ContEncomiendas)
                                            <h3>{{ $ContEncomiendas }}</h3>
                                        @else
                                            <h3>0</h3>
                                        @endif
                                        <span>Cliente de Encomienda</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
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
                                        {{--  <h3>{{ $ContVentas }}</h3>  --}}
                                        <span>Consutas de Envios</span>
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
                                        <span>Comprobantes *</span>
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
                                        <span>Reportes de Ventas</span>
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
                                            <span>Reportes de Envios</span>
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
                                        <span>Estadisticas de Ventas</span>
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
                                        <span>Estadisticas de Envio</span>
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
                <div class="col-xl-3 col-sm-6 col-12" wire:click="MostrarSucursales()">
                    <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="primary">278</h3>
                                        <span>Gestión Sucursales</span>
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
                <div class="col-xl-3 col-sm-6 col-12" wire:click="MostrarSeguimientos()">
                    <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="warning">156</h3>
                                        <span>Gestión de Seguimientos</span>
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

                <div class="col-xl-3 col-sm-6 col-12" wire:click="MostrarEncomiendas()">
                    <div class="card card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="success">64.89 %</h3>
                                        <span>Gestión de Encomiendas</span>
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
                <div class="col-xl-3 col-sm-6 col-12" wire:click="MostrarTarifas()">
                    <div class="card-resalte">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger">423</h3>
                                        <span>Gestión de Tarifas</span>
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

            {{-- Card ocultable --}}
            @if($mostrar_sucursales)
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="card overflow-hidden">
                            <div class="card-content">
                                <div class="card-body cleartfix">
                                    <div class="media align-items-stretch">
                                        <div class="media-body">
                                            <h4>Gestión de Sucursales</h4>
                                            <table class="table table-hover text-nowrap">
                                                <tr>
                                                    <td>Nombre</td>
                                                    <td>Dirección</td>
                                                    <td>Teléfono</td>
                                                    <td>Código Postal</td>
                                                    <td>Responsable</td>
                                                    <td>Observaciones</td>
                                                    <td>Opciones</td>
                                                </tr>
                                                @foreach ($sucursales as $sucursal)
                                                <tr> 	 	 	 	 	
                                                    <td>{{ $sucursal->nombresucursal }}</td>
                                                    <td>{{ $sucursal->direccionsucursal }}</td>
                                                    <td>{{ $sucursal->telefonosucursal }}</td>
                                                    <td>{{ $sucursal->CP }}</td>
                                                    <td>{{ $sucursal->responsablesucursal }}</td>
                                                    <td>{{ $sucursal->observaciones }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                            <button wire:click="edit(1)" type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalNuevaLocalidad">
                                                            <i class="fa-solid fa-pen-to-square"></i> Editar
                                                            </button>
                                                            <button wire:click="BuscarDatosLocalidad(1)" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminarLocalidad">
                                                            <i class="fa-regular fa-circle-xmark"></i> Eliminar
                                                            </button>
                                                        </div>
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

            {{-- Card ocultable --}}
            @if($mostrar_tarifas)
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="card overflow-hidden">
                            <div class="card-content">
                                <div class="card-body cleartfix">
                                    <div class="media align-items-stretch">
                                        <div class="media-body">
                                            <h4>Gestión de Tarifas</h4>
                                            <table class="table table-hover text-nowrap">
                                                <tr>
                                                    <td>descripcionpaquete</td>
                                                    <td>largo</td>
                                                    <td>ancho</td>
                                                    <td>alto</td>
                                                    <td>peso</td>
                                                    <td>monto</td>
                                                    <td>activo</td>
                                                    <td>Opciones</td>
                                                </tr>
                                                @foreach ($tarifas as $tarifa)
                                                <tr> 	 	 	 	 	
                                                    <td>{{ $sucursal->descripcionpaquete }}</td>
                                                    <td>{{ $sucursal->largo }}</td>
                                                    <td>{{ $sucursal->ancho }}</td>
                                                    <td>{{ $sucursal->alto }}</td>
                                                    <td>{{ $sucursal->peso }}</td>
                                                    <td>{{ $sucursal->monto }}</td>
                                                    <td>{{ $sucursal->activo }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                            <button wire:click="edit(1)" type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalNuevaLocalidad">
                                                            <i class="fa-solid fa-pen-to-square"></i> Editar
                                                            </button>
                                                            <button wire:click="BuscarDatosLocalidad(1)" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminarLocalidad">
                                                            <i class="fa-regular fa-circle-xmark"></i> Eliminar
                                                            </button>
                                                        </div>
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

            {{-- Card ocultable --}}
            @if($mostrar_seguimiento)
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="card overflow-hidden">
                            <div class="card-content">
                                <div class="card-body cleartfix">
                                    <div class="media align-items-stretch">
                                        <div class="media-body">
                                            <h4>Gestión de Seguimientos</h4>
                                            <table class="table table-hover text-nowrap">
                                                <tr>
                                                    <td>encomienda_id</td>
                                                    <td>Descripcion</td>
                                                    <td>Fecha</td>
                                                    <td>Opciones</td>
                                                </tr>
                                                @foreach ($seguimientos as $seguimiento)
                                                <tr> 	 	 	 	 	
                                                    <td>{{ $seguimiento->encomienda_id }}</td>
                                                    <td>{{ $seguimiento->descripcionseguimiento }}</td>
                                                    <td>{{ $seguimiento->fecha }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                            <button wire:click="edit(1)" type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalNuevaLocalidad">
                                                            <i class="fa-solid fa-pen-to-square"></i> Editar
                                                            </button>
                                                            <button wire:click="BuscarDatosLocalidad(1)" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminarLocalidad">
                                                            <i class="fa-regular fa-circle-xmark"></i> Eliminar
                                                            </button>
                                                        </div>
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

            {{-- Card ocultable --}}
            @if($mostrar_encomiendas)
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="card overflow-hidden">
                            <div class="card-content">
                                <div class="card-body cleartfix">
                                    <div class="media align-items-stretch">
                                        <div class="media-body">
                                            <h4>Gestión de Encomiendas</h4>
                                            <table class="table table-hover text-nowrap">
                                                <tr>
                                                    <td>direccionremitente</td>
                                                    <td>sucursalorigen</td>
                                                    <td>clienteorigen_id</td>
                                                    <td>telefonoremitente</td>
                                                    <td>emailremitente</td>
                                                    <td>clientedestino_id</td>
                                                    <td>direcciondestinatario</td>
                                                    <td>sucursaldestino</td>
                                                    <td>valordeclarado</td>
                                                    <td>cantidadbultos</td>
                                                    <td>tarifa_id</td>
                                                    <td>observaciones</td>
                                                    <td>Opciones</td>
                                                </tr>
                                                @foreach ($encomiendas as $encomienda)
                                                <tr> 	 	 	 	 	
                                                    <td>{{ $encomienda->direccionremitente }}</td>
                                                    <td>{{ $encomienda->sucursalorigen }}</td>
                                                    <td>{{ $encomienda->clienteorigen_id }}</td>
                                                    <td>{{ $encomienda->telefonoremitente }}</td>
                                                    <td>{{ $encomienda->emailremitente }}</td>
                                                    <td>{{ $encomienda->clientedestino_id }}</td>
                                                    <td>{{ $encomienda->direcciondestinatario }}</td>
                                                    <td>{{ $encomienda->sucursaldestino }}</td>
                                                    <td>{{ $encomienda->valordeclarado }}</td>
                                                    <td>{{ $encomienda->cantidadbultos }}</td>
                                                    <td>{{ $encomienda->tarifa_id }}</td>
                                                    <td>{{ $encomienda->observaciones }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                            <button wire:click="edit(1)" type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalNuevaLocalidad">
                                                            <i class="fa-solid fa-pen-to-square"></i> Editar
                                                            </button>
                                                            <button wire:click="BuscarDatosLocalidad(1)" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminarLocalidad">
                                                            <i class="fa-regular fa-circle-xmark"></i> Eliminar
                                                            </button>
                                                        </div>
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



        </section>

    </div>

</div>
