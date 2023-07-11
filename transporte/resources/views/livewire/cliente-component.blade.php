<div>
    <div id="page-wrapper">
        <div class="containergit">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="style">Clientes</h2>
                    <a href="#" class="btn btn-celeste"><span class="glyphicon glyphicon-plus"
                            aria-hidden="true"></span> Nuevo</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">

                        <table class="tabla table table-striped table-hover table-condensed" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>Nombre y Apellido</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>E-mail</th>
                                    <th>DNI</th>
                                    <th>Nacionalidad</th>
                                    <th>Provincia</th>
                                    <th>Localidad</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            {{-- <tbody> --}}
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td>{{ $cliente->apellido }}, {{ $cliente->nombre }}</td>
                                        @if($cliente->direccion) <td>{{ $cliente->direccion }}</td> @else <td class="xl:none">-</td> @endif
                                        @if($cliente->telefono)  <td>{{ $cliente->telefono }}</td>  @else <td>-</td> @endif
                                        @if($cliente->email)     <td>{{ $cliente->email }}</td> @else <td>-</td> @endif
                                        <td>{{ $cliente->dni }}</td>
                                        <td>{{ $cliente->nacionalidad->nombre }}</td>
                                        <td>{{ $cliente->provincia->nombre}}</td>
                                        <td>{{ $cliente->localidad->nombre }}</td>
                                        <td>
                                            <div class='wrapper text-center'>
                                                <div class="btn-group" role="group">
                                                    <a href="" class="btn btn-warning" data-toggle="tooltip"
                                                        title="Editar">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </a>
                                                    <button class="btn btn-danger" onclick="eliminar"
                                                        data-toggle="tooltip" title="Eliminar">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            {{-- </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
