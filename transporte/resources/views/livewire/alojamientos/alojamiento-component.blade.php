<div>
    <div id="page-wrapper">
        <div class="containergit">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="style">Alojamientos</h2>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalEstadoCuentaPrueba">
                        Nuevo
                    </button>
                    {{-- <a href="#" class="btn btn-celeste"><span class="glyphicon glyphicon-plus"
                            aria-hidden="true"></span>Nuevo</a> --}}
                </div>
            </div>
            <hr>

            <div wire:ignore.self class="modal fade" id="ModalEstadoCuentaPrueba" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="width: 100%; margin-right: 50px; max-width: 100%">
                {{-- <div class="modal-dialog" role="document"  style="width: 1000px"> --}}
                <div class="modal-content" style="width: inherit">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alta de Alojamientos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="height: auto;">
                        <div class="container flex d-flex wrapper1">
                            <div class="scrolls1">
                                Espacio para solicitar los datos del alojamiento
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="tabla table table-striped table-hover table-condensed" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>Ubicación GPS</th>
                                    <th>Foto</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            @foreach ($alojamientos as $alojamiento)
                                <tr>
                                    <td>{{ $alojamiento->descripcion }}</td>
                                    {{-- @if($alojamiento->direccion) <td>{{ $alojamiento->direccion }}</td> @else <td class="xl:none">-</td> @endif
                                    @if($alojamiento->telefono)  <td>{{ $alojamiento->telefono }}</td>  @else <td>-</td> @endif
                                    @if($alojamiento->email)     <td>{{ $alojamiento->email }}</td> @else <td>-</td> @endif --}}
                                    <td>{{ $alojamiento->precio }}</td>
                                    <td>{{ $alojamiento->ubicaciongps }}</td>
                                    <td>{{ $alojamiento->fotourl}}</td>
                                    <td>
                                        <div class='wrapper text-center'>
                                            <div class="btn-group" role="group">
                                                <a href="" class="btn btn-warning" data-toggle="tooltip" title="Editar">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                <button class="btn btn-danger" onclick="eliminar" data-toggle="tooltip" title="Eliminar">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </div>
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
