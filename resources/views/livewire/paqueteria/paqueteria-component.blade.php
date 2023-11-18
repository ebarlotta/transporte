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
                                            <div class="d-flex flex justify-content-between">
                                                <h4>Gestión de Sucursales</h4>
                                                <button type="button" class="btn btn-info" data-toggle="modal" wire:click="CargaDatosAlModal(0,'sucursal')" data-target="#ModalAltaModificacionSucursales">
                                                    <i class="fa-regular fa-plus"></i> Nuevo 
                                                </button>
                                            </div>
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
                                                            <button type="button" class="btn btn-warning" wire:click="CargaDatosAlModal({{$sucursal->id}},'sucursal')" data-toggle="modal" data-target="#ModalAltaModificacionSucursales">
                                                            <i class="fa-solid fa-pen-to-square"></i> Editar
                                                            </button>
                                                            <button wire:click="BuscarDatos({{$sucursal->id}},'sucursal')" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminarSucursales">
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
                                            <div class="d-flex flex justify-content-between">
                                                <h4>Gestión de Tarifas</h4>
                                                <button type="button" class="btn btn-info" data-toggle="modal" wire:click="CargaDatosAlModal(0,'tarifa')" data-target="#ModalAltaModificacionTarifas">
                                                    <i class="fa-regular fa-plus"></i> Nuevo 
                                                </button>
                                            </div>
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
                                                    <td>{{ $tarifa->descripcionpaquete }}</td>
                                                    <td>{{ $tarifa->largo }}</td>
                                                    <td>{{ $tarifa->ancho }}</td>
                                                    <td>{{ $tarifa->alto }}</td>
                                                    <td>{{ $tarifa->peso }}</td>
                                                    <td>{{ $tarifa->monto }}</td>
                                                    <td>{{ $tarifa->activo }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-warning" wire:click="CargaDatosAlModal({{$tarifa->id}},'tarifa')" data-toggle="modal" data-target="#ModalAltaModificacionTarifas">
                                                            <i class="fa-solid fa-pen-to-square"></i> Editar
                                                            </button>
                                                            <button wire:click="BuscarDatos({{$tarifa->id}},'tarifa')" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminarTarifas">
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
                                            <div class="d-flex flex justify-content-between">
                                                <h4>Gestión de Seguimientos</h4>
                                                <button type="button" class="btn btn-info" data-toggle="modal" wire:click="CargaDatosAlModal(0,'seguimiento')" data-target="#ModalAltaModificacionSeguimientos">
                                                    <i class="fa-regular fa-plus"></i> Nuevo 
                                                </button>
                                            </div>
                                            <table class="table table-hover text-nowrap">
                                                <tr>
                                                    <td>encomienda_id</td>
                                                    <td>Descripcion</td>
                                                    <td>Fecha</td>
                                                    <td>Usuario</td>
                                                    <td>Opciones</td>
                                                </tr>
                                                @foreach ($seguimientos as $seguimiento)
                                                <tr> 	 	 	 	 	
                                                    <td>{{ $seguimiento->encomienda_id }}</td>
                                                    <td>{{ $seguimiento->descripcionseguimiento }}</td>
                                                    <td>{{ substr($seguimiento->fecha,8,2)."-".substr($seguimiento->fecha,5,2)."-".substr($seguimiento->fecha,0,4) }}</td>
                                                    <td>{{ $seguimiento->usuario_id }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                            <button type="button" wire:click="CargaDatosAlModal({{$seguimiento->id}},'seguimiento')" class="btn btn-warning" data-toggle="modal" data-target="#ModalAltaModificacionSeguimientos">
                                                            <i class="fa-solid fa-pen-to-square"></i> Editar
                                                            </button>
                                                            <button wire:click="BuscarDatos({{$seguimiento->id}},'seguimiento')" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminarSeguimientos">
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
                                            <div class="d-flex flex justify-content-between">
                                                <h4>Gestión de Encomiendas</h4>
                                                <button type="button" class="btn btn-info" data-toggle="modal" wire:click="CargaDatosAlModal(0,'encomienda')" data-target="#ModalAltaModificacionEncomiendas">
                                                    <i class="fa-regular fa-plus"></i> Nuevo 
                                                </button>
                                            </div>
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
                                                            <button  type="button" class="btn btn-warning" wire:click="CargaDatosAlModal({{$encomienda->id}},'encomienda')" data-toggle="modal" data-target="#ModalAltaModificacionEncomiendas">
                                                            <i class="fa-solid fa-pen-to-square"></i> Editar
                                                            </button>
                                                            <button wire:click="BuscarDatos({{$encomienda->id}},'encomienda')" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminarEncomiendas">
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

            <!-- Modal Alta/Modificación Seguimientos -->
            <!-- ================================== -->
            <div wire:ignore.self class="modal fade" id="ModalAltaModificacionSeguimientos" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title">Alta/Modificación Seguimientos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div>
                            <label for="">seguimiento_encomienda_id</label>
                            <input type="text" class="form-control" wire:model="seguimiento_encomienda_id">
                        </div>
                        <div>
                            <label for="">descripcionseguimiento</label>
                            <input type="text" class="form-control" wire:model="descripcionseguimiento">
                        </div>
                        <div>
                            <label for="">fecha</label>
                            <input type="date" class="form-control" wire:model="fecha">
                        </div>
                        <div>
                            <label for="">usuario_id</label>
                            <input type="text" class="form-control" wire:model="usuario_id" disabled>
                        </div>
                        <div>
                            <button type="button" class="btn btn-info" wire:click="store('seguimiento')">
                                <i class="fa-solid fa-pen-to-square"></i>Guardar
                            </button>
                            <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">
                                <i class="fa-solid fa-pen-to-square"></i>Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Eliminar Seguimientos -->
            <!-- ====================== -->
            <div wire:ignore.self class="modal fade" id="ModalEliminarSeguimientos" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title">Eliminar Seguimientos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div>
                            Está seguro de que quiere eliminar el seguimiento cuyo número de encomienda es: <b>{{ $encomienda_id }}</b>?
                        </div>
                        <div>
                            <button type="button" class="btn btn-danger">
                                <i class="fa-solid fa-pen-to-square"></i>Eliminar
                            </button>
                            <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">
                                <i class="fa-solid fa-pen-to-square"></i>Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Alta/Modificación Encomiendas -->
            <!-- ================================== -->
            <div wire:ignore.self class="modal fade" id="ModalAltaModificacionEncomiendas" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title">Alta/Modificación Encomiendas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div>
                            <label for="">direccionremitente</label>
                            <input type="text" class="form-control" wire:model="direccionremitente">
                        </div>
                        <div>
                            <label for="">sucursalorigen</label>
                            <input type="text" class="form-control" wire:model="sucursalorigen">
                        </div>
                        <div>
                            <label for="">clienteorigen_id</label>
                            <input type="text" class="form-control" wire:model="clienteorigen_id">
                        </div>
                        <div>
                            <label for="">telefonoremitente</label>
                            <input type="text" class="form-control" wire:model="telefonoremitente">
                        </div>
                        <div>
                            <label for="">emailremitente</label>
                            <input type="text" class="form-control" wire:model="emailremitente">
                        </div>
                        <div>
                            <label for="">clientedestino_id</label>
                            <input type="text" class="form-control" wire:model="clientedestino_id">
                        </div>
                        <div>
                            <label for="">direcciondestinatario</label>
                            <input type="text" class="form-control" wire:model="direcciondestinatario">
                        </div>
                        <div>
                            <label for="">sucursaldestino</label>
                            <input type="text" class="form-control" wire:model="sucursaldestino">
                        </div>
                        <div>
                            <label for="">valordeclarado</label>
                            <input type="text" class="form-control" wire:model="valordeclarado">
                        </div>
                        <div>
                            <label for="">cantidadbultos</label>
                            <input type="text" class="form-control" wire:model="cantidadbultos">
                        </div>
                        <div>
                            <label for="">tarifa_id</label>
                            <input type="text" class="form-control" wire:model="encomienda_tarifa_id">
                        </div>
                        <div>
                            <label for="">observaciones</label>
                            <input type="text" class="form-control" wire:model="encomienda_observaciones">
                        </div>
                        <div>
                            <button type="button" class="btn btn-info" wire:click="store('encomienda')">
                                <i class="fa-solid fa-pen-to-square"></i>Guardar
                            </button>
                            <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">
                                <i class="fa-solid fa-pen-to-square"></i>Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Eliminar Encomiendas -->
            <!-- ====================== -->
            <div wire:ignore.self class="modal fade" id="ModalEliminarEncomiendas" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title">Eliminar Encomiendas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div>
                            Está seguro de que quiere eliminar la encomienda con sucursal de destino <b>{{ $sucursaldestino }}</b> y dirección de destinatario <b>{{  $direcciondestinatario }}</b>?
                        </div>
                        <div>
                            <button type="button" class="btn btn-danger">
                                <i class="fa-solid fa-pen-to-square"></i>Eliminar
                            </button>
                            <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">
                                <i class="fa-solid fa-pen-to-square"></i>Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Alta/Modificación Tarifas -->
            <!-- ================================== -->
            <div wire:ignore.self class="modal fade" id="ModalAltaModificacionTarifas" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title">Alta/Modificación Tarifas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div>
                            <label for="">descripcionpaquete</label>
                            <input type="text" class="form-control" wire:model="descripcionpaquete">
                        </div>
                        <div>
                            <label for="">largo</label>
                            <input type="text" class="form-control" wire:model="largo">
                        </div>
                        <div>
                            <label for="">ancho</label>
                            <input type="text" class="form-control" wire:model="ancho">
                        </div>
                        <div>
                            <label for="">alto</label>
                            <input type="text" class="form-control" wire:model="alto">
                        </div>
                        <div>
                            <label for="">peso</label>
                            <input type="text" class="form-control" wire:model="peso">
                        </div>
                        <div>
                            <label for="">monto</label>
                            <input type="text" class="form-control" wire:model="monto">
                        </div>
                        <div>
                            <label for="">Activa</label>
                            <input type="text" class="form-control" wire:model="tarifa_activo">
                        </div>
                        <div>
                            <button type="button" class="btn btn-info" wire:click="store('tarifa')">
                                <i class="fa-solid fa-pen-to-square"></i>Guardar
                            </button>
                            <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">
                                <i class="fa-solid fa-pen-to-square"></i>Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Eliminar Tarifas -->
            <!-- ====================== -->
            <div wire:ignore.self class="modal fade" id="ModalEliminarTarifas" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title">Eliminar Tarifas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div>
                            Está seguro de que quiere eliminar la tarifa <b>{{ $descripcionpaquete }}</b>?
                        </div>
                        <div>
                            <button type="button" class="btn btn-danger">
                                <i class="fa-solid fa-pen-to-square"></i>Eliminar
                            </button>
                            <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">
                                <i class="fa-solid fa-pen-to-square"></i>Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Alta/Modificación Sucursales -->
            <!-- ================================== -->
            <div wire:ignore.self class="modal fade" id="ModalAltaModificacionSucursales" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title">Alta/Modificación Sucursales</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div>
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" wire:model="nombresucursal">
                        </div>
                        <div>
                            <label for="">Dirección</label>
                            <input type="text" class="form-control" wire:model="direccionsucursal">
                        </div>
                        <div>
                            <label for="">Teléfono</label>
                            <input type="text" class="form-control" wire:model="telefonosucursal">
                        </div>
                        <div>
                            <label for="">Código Postal</label>
                            <input type="text" class="form-control" wire:model="CP">
                        </div>
                        <div>
                            <label for="">Responsable</label>
                            <input type="text" class="form-control" wire:model="responsablesucursal">
                        </div>
                        <div>
                            <label for="">Observaciones</label>
                            <input type="text" class="form-control" wire:model="observaciones">
                        </div>
                        <div>
                            <label for="">Activa</label>
                            <input type="text" class="form-control" wire:model="activo">
                        </div>
                        <div>
                            <button type="button" class="btn btn-info" wire:click="store('sucursales')">
                                <i class="fa-solid fa-pen-to-square"></i>Guardar
                            </button>
                            <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">
                                <i class="fa-solid fa-pen-to-square"></i>Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Eliminar Sucursales -->
            <!-- ================================== -->
            <div wire:ignore.self class="modal fade" id="ModalEliminarSucursales" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title">Eliminar Sucursales</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div>
                            Está seguro de que quiere eliminar la sucursal <b>{{ $nombresucursal }}</b>?
                        </div>
                        <div>
                            <button type="button" class="btn btn-danger" wire:click="destroy({{$sucursal_id}},'sucursales')">
                                <i class="fa-solid fa-pen-to-square"></i>Eliminar
                            </button>
                            <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">
                                <i class="fa-solid fa-pen-to-square"></i>Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>

</div>
