<div>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 flex" style="justify-content: space-evenly;">
                    <h2 class="hstyle" style="font-family:RobotoDraft, sans-serif; font-weight: 400; color: #5E738B; font-size: 30px; margin-top: 20px;
                    margin-bottom: 10px; line-height: 1.1; box-sizing: border-box;">Clientes</h2>
                    {{-- <button wire:click="create()" class="bg-green-300 hover:bg-green-400 text-white-900 font-bold py-2 px-4 rounded my-3"></button> --}}
                    <a wire:click="isModalCreateChange()" class="btn btn-primary h-3" style="height: 60%; align-content: center; display: flex;">
                        {{-- <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  --}}
                        <i class="fa-duotone fa-plus"></i>
                        {{-- <img src="{{ asset('img/logo/plus.png') }}" alt="" width="10px" height="10px" sizes="10px"> --}}
                        Nuevo
                    </a>
                    @if (session()->has('message'))
                        <div class="border-t-4  rounded-b px-4 py-3 shadow-md my-3 bg-lime-700" role="alert" style="background-color: lightgreen;">
                            {{-- <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert"> --}}
                            <div class="flex">
                                <div>
                                    <p class="text-xm bg-lightgreen">{{ session('message') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($isModalCreate)
                        @include('livewire.cliente.createcliente')
                    @endif
                    @if ($isModalConsultar)
                        @include('livewire.cliente.consultar')
                    @endif
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="d-none d-lg-inline">
                            <table class="tabla table table-striped table-hover table-condensed" cellspacing="0" width="100%">
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
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ $cliente->apellido }}, {{ $cliente->nombre }}</td>
                                            @if($cliente->direccion) <td>{{ $cliente->direccion }}</td> @else <td>-</td> @endif
                                            @if($cliente->telefono)  <td>{{ $cliente->telefono }}</td>  @else <td>-</td> @endif
                                            @if($cliente->email)     <td>{{ $cliente->email }}</td> @else <td>-</td> @endif
                                            <td>{{ $cliente->dni }}</td>                                            
                                            <td>{{ $cliente->nacionalidad->nombre }}</td>                                            
                                            <td>{{ $cliente->provincia->nombre}}</td>                                            
                                            <td>{{ $cliente->localidad->nombre }}</td>                                            
                                            <td>
                                                <div class='wrapper text-center'>
                                                    <div class="btn-group" role="group">
                                                        <a wire:click="edit({{$cliente->id}})" href="#" class="btn btn-warning" data-toggle="tooltip" title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <button class="btn btn-danger" wire:click="isModalConsultar({{$cliente->id}})" title="Eliminar">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <table class="tabla table table-striped table-hover table-condensed" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nombre y Apellido</th>
                                        <th>Teléfono</th>
                                        <th>E-mail</th>
                                        <th>DNI</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ $cliente->apellido }}, {{ $cliente->nombre }}</td>
                                            @if($cliente->telefono)  <td>{{ $cliente->telefono }}</td>  @else <td>-</td> @endif
                                            @if($cliente->email)     <td>{{ $cliente->email }}</td> @else <td>-</td> @endif
                                            <td>{{ $cliente->dni }}</td>                                            
                                            <td>
                                                <div class='wrapper text-center'>
                                                    <div class="btn-group" role="group">
                                                        <a wire:click="edit({{$cliente->id}})" href="#" class="btn btn-warning" data-toggle="tooltip" title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <button class="btn btn-danger" wire:click="isModalConsultar({{$cliente->id}})" title="Eliminar">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
