<div>
    <div id="page-wrapper">
        <div class="containergit">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="style">Paquetes</h2>
                    <button type="button" class="btn btn-info" wire:click="nuevo()" data-toggle="modal"
                        data-target="#ModalNuevoDestino">
                        <i class="fa-regular fa-plus"></i> Nuevo </button>
                    {{-- <a href="#" class="btn btn-celeste"><span class="glyphicon glyphicon-plus"
                            aria-hidden="true"></span>Nuevo</a> --}}
                </div>
            </div>
            <hr>

            <!-- Modal Paquete Nuevo/Modificar -->
            <div wire:ignore.self class="modal fade" id="ModalNuevoDestino" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Gestión de Paquetes</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @if (session()->has('message'))
                            <div class="border-t-4  rounded-b px-4 py-3 shadow-md my-3 bg-lime-700" role="alert"
                                style="background-color: lightgreen;">
                                <div class="flex">
                                    <div>
                                        <p class="text-xm bg-lightgreen">{{ session('message') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="container">
                            <form action="">
                                <div class="flex d-flex">
                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="nombre">Nombre</label>
                                        <input wire:model="nombrepaquete" class="form-control" name="nombrepaquete"
                                            type="text" id="nombrepaquete">
                                        @error('nombrepaquete')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label" for="Transportes">Transportes Relacionados</label>
                                        <select class="form-control" name="" id=""
                                            wire:model="transporte_id">
                                            <option value="1">Ninguno</option>
                                            @foreach ($transportes as $transporte)
                                                <option value="{{ $transporte->id }}">{{ $transporte->descripcion }}
                                                </option>
                                                {{-- <td>{{ date("d/m/Y", strtotime($transporte->salida)); }}</td>
                                            <td>{{ date("d/m/Y", strtotime($transporte->llegada)); }}</td> --}}
                                            @endforeach
                                        </select>
                                        @error('transporte_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="descripcion">Descripción</label>
                                    <textarea wire:model="descripcion" class="form-control" placeholder="Descripción" aria-label="With textarea" rows="3"></textarea>
                                    @error('descripcion')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex d-flex">
                                    <div class="mb-3 col-4">
                                        <label class="form-label" for="clima">Duración Total (días)</label>
                                        <input wire:model="duraciontotal" class="form-control" name="duraciontotal" type="text" id="duraciontotal">
                                        @error('Duraciontotal')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label" for="presupuestoestimado">Presupuesto estimado</label>
                                        <input wire:model="presupuestoestimado" class="form-control" name="presupuestoestimado" type="text" id="presupuestoestimado">
                                        @error('presupuestoestimado')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label" for="otrosenlaces">Fechas Disponibles</label>
                                        <input wire:model="fechasdisponibles" class="form-control" name="fechasdisponibles" type="text" id="fechasdisponibles">
                                        @error('fechasdisponibles')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex d-flex">
                                    <div class="mb-3 col-6">
                                        <div class="">
                                            <label class="form-label mr-3" for="foto">Foto</label>
                                            <div>
                                                @if(is_null($fotourl))
                                                {{-- entro --}}
                                                    {{-- <input wire:model="fotourl" class="form-control mr-3" name="fotourl" type="file" id="fotourl" accept="image/*"> --}}
                                                    <div wire:loading wire:target="fotourl">
                                                        <strong class="font-bold">Imágen cargando!!</strong>
                                                        {{-- <img src="{{ $fotourl->temporaryUrl() }}" width="50px;"> --}}
                                                    </div>
                                                @else
                                                    @if ($fotourl == 'Sin_imagen.jpg')
                                                        <img src="img/Sin_imagen.jpg" class="mr-3" width="70px;">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalModificarFoto">
                                                            <i class="fa-regular fa-plus"></i> Cambiar Foto
                                                        </button>
                                                    @else
                                                        <img src="{{ asset($fotourl) }}" class="mr-3" width="70px;">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalModificarFoto">
                                                            <i class="fa-regular fa-plus"></i> Cambiar Foto
                                                        </button>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div>
                                            <label class="form-label col-12">Destinos Relacionados</label>
                                            <button class="btn btn-info form-control col-3" data-dismiss="modal" type="button" wire:click="ConstructorDestinos()" data-toggle="modal" data-target="#ModalNueaRelacion"><i class="fa-regular fa-plus"></i>Agregar Destino</button>
                                            @error('descripcion')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="d-flex flex-wrap align-self-center">
                                            @if ($destinospaquete)
                                                @foreach ($destinospaquete as $destino)
                                                    <div class="card m-2 p-2"
                                                        style="min-width: 100px; box-shadow: 5px 5px lightslategray; border-style: solid; border-width: 2px;">
                                                        <div class="d-flex">
                                                            <img src="{{ asset($destino->fotourl) }}" alt=""
                                                                style="width: 40px; height: 40px;">
                                                            <div style="width: 40px; height: 40px;">
                                                                <span wire:click="setDestinoAEliminar({{ $destino->id }})" data-toggle="modal" data-target="#ModalEliminarRelacion" class="px-1"
                                                                    style="margin-left: 23px; background-color: #e98989; border-radius: 7px; text-decoration: none;">&times;</span>
                                                            </div>
                                                        </div>
                                                        {{ $destino->nombre }}
                                                    </div>
                                                @endforeach
                                            @else
                                                No se encontraron Destinos relacionados
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                    <button class="btn btn-warning" data-dismiss="modal"
                                        type="button">Cerrar</button>
                                    <button class="btn btn-primary" type="button" wire:click="store()"
                                        data-dismiss="modal">Guardar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Fin Modal -->

            <!-- Modal Paquete Nuevo/Modificar Relacion -->
            <div wire:ignore.self class="modal fade" id="ModalNueaRelacion" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Relacionar Paquetes con Destinos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="container">
                            <form action="">
                                <div class="mb-3 mt-3">
                                    <label class="form-label" for="nombre">Destinos</label>
                                    @if ($destinosposibles)
                                        <select wire:model="destinosp" name="destinosp" id="destinosp">
                                            <option value="">-</option>
                                            @foreach ($destinosposibles as $destinosp)
                                                <option value="{{ $destinosp->id }}">{{ $destinosp->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                    <button class="btn btn-warning" data-dismiss="modal"
                                        type="button">Cerrar</button>
                                    <button class="btn btn-primary" type="button" wire:click="storeRelacion()"
                                        data-dismiss="modal">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Modal -->

            <!-- Modal Consulta Eliminar Relacion -->
            <div wire:ignore.self class="modal fade" id="ModalEliminarRelacion" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar relación Paquetes con Destinos
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="container">
                            <form action="">
                                <div class="mb-3 mt-3">
                                    <label class="form-label" for="nombre">Está seguro de que quiere eliminar la
                                        relación?</label>
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                    <button class="btn btn-warning" data-dismiss="modal"
                                        type="button">Cerrar</button>
                                    <button class="btn btn-danger" type="button" wire:click="EliminarRelacion()"
                                        data-dismiss="modal">Eliminar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Modal -->


            <!-- Modal Consulta eliminar Paquete-->
            <div wire:ignore.self class="modal fade" id="ModalEliminarPaquete" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Paquete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="container">
                            <form action="">
                                <div class="mb-3 mt-3">
                                    Está seguro de eliminar el Paquete: <label>{{ $PaqueteAEliminar }} ?</label>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                    <button class="btn btn-warning" data-dismiss="modal"
                                        type="button">Cerrar</button>
                                    <button class="btn btn-danger" type="button" wire:click="delete()"
                                        data-dismiss="modal">Eliminar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Fin Modal -->

            <!-- Modal Modificar foto Paquete-->
            <div wire:ignore.self class="modal fade" id="ModalModificarFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modificar Foto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="container">
                            <form action="">
                                <div class="mb-3 mt-3">
                                    <input wire:model="fotourl" class="form-control mr-3" name="fotourl"
                                        type="file" id="fotourl" accept="image/*">
                                    <div wire:loading wire:target="fotourl">
                                        <strong class="font-bold">Imágen cargando!!</strong>
                                        {{-- <img src="{{ $fotourl->temporaryUrl() }}" width="50px;"> --}}
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                    <button class="btn btn-warning" data-dismiss="modal"
                                        type="button">Cerrar</button>
                                    <button class="btn btn-danger" type="button" wire:click="ModificarFoto()"
                                        data-dismiss="modal">Guardar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-sm-none">
                    @foreach ($paquetes as $paquete)
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card card-resalte">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="media-body text-left">
                                                <h3 class="primary">{{ $paquete->descripcion }}</h3>
                                                <span>{{ $paquete->descripcion }}</span>
                                                <span>{{ $paquete->duraciontotal }}</span>
                                            </div>
                                            <div class="align-self-center">
                                                @if (!is_null($paquete->fotourl))
                                                    @if ($paquete->fotourl == 'Sin_imagen.jpg')
                                                        <img src="img/Sin_imagen.jpg" alt="" width="50px;">
                                                    @else
                                                        <img src="{{ $paquete->fotourl }}" alt=""
                                                            width="50px;">
                                                    @endif
                                                @endif
                                            </div>
                                            <div class="align-self-center">
                                                <i class="icon-book-open primary font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        {{-- <div class="progress mt-1 mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> --}}
                                        <div class='mt-3 text-center'>
                                            <div class="btn-group" role="group">
                                                <button wire:click="edit({{ $paquete->id }})" type="button"
                                                    class="btn btn-warning" data-toggle="modal"
                                                    data-target="#ModalNuevoDestino">
                                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                                </button>
                                                <button wire:click="isModalConsultar({{ $paquete->id }})"
                                                    class="btn btn-danger" data-toggle="modal"
                                                    data-target="#ModalEliminarPaquete">
                                                    <i class="fa-regular fa-circle-xmark"></i> Eliminar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="d-none d-sm-block col-lg-12">
                    {{-- <div class="visible-lg visible-xl col-lg-12"> --}}
                    <div class="table-responsive">
                        <table class="tabla table table-striped table-hover table-condensed" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Duración Total</th>
                                    <th>Presupuesto Estimado</th>
                                    <th>Fechas Disponibles</th>
                                    <th>Foto</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            @foreach ($paquetes as $paquete)
                                <tr>
                                    <td>{{ $paquete->nombrepaquete }}</td>
                                    <td>{{ $paquete->descripcion }}</td>
                                    <td>{{ $paquete->duraciontotal }}</td>
                                    <td>{{ $paquete->presupuestoestimado }}</td>
                                    <td>{{ $paquete->fechasdisponibles }}</td>
                                    <td>
                                        @if ('Sin_imagen.jpg' == $paquete->fotourl)
                                            <img src="img/Sin_imagen.jpg" alt=""
                                                style="width: 100px; height:100px;">
                                        @else
                                            <img src="{{ asset($paquete->fotourl) }}" alt=""
                                                style="width: 100px; height:100px;">
                                        @endif
                                    </td>
                                    <td>
                                        <div class='wrapper text-center'>
                                            <div class="btn-group" role="group">
                                                <button wire:click="edit({{ $paquete->id }})" type="button"
                                                    class="btn btn-warning" data-toggle="modal"
                                                    data-target="#ModalNuevoDestino">
                                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                                </button>
                                                <button wire:click="isModalConsultar({{ $paquete->id }})"
                                                    class="btn btn-danger" data-toggle="modal"
                                                    data-target="#ModalEliminarPaquete">
                                                    <i class="fa-regular fa-circle-xmark"></i> Eliminar
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
