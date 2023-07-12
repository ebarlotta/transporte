<div>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 flex" style="justify-content: space-evenly;">
                    <h2 class="hstyle" style="font-family:RobotoDraft, sans-serif; font-weight: 400; color: #5E738B; font-size: 30px; margin-top: 20px;
                    margin-bottom: 10px; line-height: 1.1; box-sizing: border-box;">Clientes</h2>
                    {{-- <button wire:click="create()" class="bg-green-300 hover:bg-green-400 text-white-900 font-bold py-2 px-4 rounded my-3"></button> --}}
                    {{-- <a wire:click="isModalCreateChange()" class="btn btn-primary h-3" style="height: 60%; align-content: center; display: flex;"> --}}
                        {{-- <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  --}}
                        {{-- <i class="fa-duotone fa-plus"></i> --}}
                        {{-- <img src="{{ asset('img/logo/plus.png') }}" alt="" width="10px" height="10px" sizes="10px"> --}}
                        {{-- <i class="fa-regular fa-plus"></i>Nuevo --}}
                    {{-- </a> --}}
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa-regular fa-plus"></i>Nuevo</button>

                    <!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Gestión de Clientes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="mb-4 d-flex flex-wrap">
                        <div class="col-5 m-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Apellido</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Ingrese Apellido" wire:model="apellido">
                        </div>
                        <div class="col-5 m-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Ingrese Nombre" wire:model="nombre">
                        </div>
                        <div class="col-5 m-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2">DNI</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Ingrese DNI" wire:model="dni">
                        </div>
                        <div class="col-5 m-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Dirección</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Ingrese Dirección" wire:model="direccion">
                        </div>
                        <div class="col-5 m-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Teléfono</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Ingrese Teléfono" wire:model="telefono">
                        </div>
                        <div class="col-5 m-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2">E-Mail</label>
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Ingrese E-Mail" wire:model="email">
                        </div>
                        <div class="col-5 m-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Fecha de Nacimiento</label>
                            <input type="date"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Ingrese Fecha de Nacimiento" wire:model="fechanacimiento">
                        </div>
                        <div class="col-5 m-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Foto</label>
                            <input type="file"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Ingrese foto" wire:model="foto">
                        </div>
                        <div class="col-5 m-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Nacionalidad</label>
                            <select name="nacionalidad_id" id="" wire:model="nacionalidad_id">
                                <option value="" selected>-</option>
                                @foreach ($nacionalidades as $nacionalidad)
                                    <option value="{{ $nacionalidad->id }}">{{ $nacionalidad->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-5 m-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Provincia</label>
                            <select name="provincia_id" id="" wire:model="provincia_id">
                                <option value="" selected>-</option>
                                @foreach ($provincias as $provincia)
                                    <option value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-5 m-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Localidad</label>
                            <select name="localidad_id" id="" wire:model="localidad_id">
                                <option value="" selected>-</option>
                                @foreach ($localidades as $localidad)
                                    <option value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @error('estadocivil')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <button class="btn btn-default" wire:click="isModalCreateChange()">Cerrar</button>
                    <a wire:click="store()" class="btn btn-default bg-red-400"><span class="glyphicon glyphicon-plus"
                       aria-hidden="true"></span> Modificar</a>
                </div>
            </form>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-primary">Actualizar</button>
        </div>
      </div>
    </div>
  </div>

                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch Default Modal
                        </button> --}}


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
                                                        <button wire:click="edit({{$cliente->id}})" type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i> Estado de cuenta</button>
                                                        <button wire:click="edit({{$cliente->id}})" type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i> Editar</button>

                                                        <button wire:click="isModalConsultar({{$cliente->id}})" class="btn btn-danger">
                                                            <i class="fa-regular fa-circle-xmark"></i> Eliminar</button>

                                                        {{-- <a wire:click="edit({{$cliente->id}})" href="#" class="btn btn-warning" data-toggle="tooltip" title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <button class="btn btn-danger" wire:click="isModalConsultar({{$cliente->id}})" title="Eliminar">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </button> --}}
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
                                                        <button wire:click="edit({{$cliente->id}})" type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i> Estado de cuenta</button>
                                                        <button wire:click="edit({{$cliente->id}})" type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-pen-to-square"></i> Editar</button>

                                                        <button wire:click="isModalConsultar({{$cliente->id}})" class="btn btn-danger">
                                                            <i class="fa-regular fa-circle-xmark"></i> Eliminar</button>
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
