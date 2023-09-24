<div>
    <div id="page-wrapper">
        <div class="containergit">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="style">Alojamientos</h2>
                    <button type="button" class="btn btn-info" wire:click="nuevo()" data-toggle="modal" data-target="#ModalEstadoCuentaPrueba">
                        <i class="fa-regular fa-plus"></i> Nuevo </button>
                </div>
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

            <!-- Modal Alta/Modificación -->
            <div wire:ignore.self class="modal fade" id="ModalEstadoCuentaPrueba" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                <div class="modal-content" style="width: inherit">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alta de Alojamientos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="container">
                        <form action="">
                            <div class="mb-3 mt-3">
                                <label class="form-label" for="descripcion">Descripción</label>
                                <textarea wire:model="descripcion" class="form-control" placeholder="Descripción" aria-label="With textarea" rows="5"></textarea>
                                @error('descripcion') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="precio">Precio</label>
                                <input wire:model="precio" class="form-control" name="precio" type="text" id="precio">
                                @error('precio') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="foto">Foto</label>
                                <input wire:model="fotourl" class="form-control" name="foto" type="file" id="foto">
                                @error('fotourl') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="ubicaciongps">Ubicacion GPS</label>
                                <input wire:model="ubicaciongps" class="form-control" name="ubicaciongps" type="text" id="ubicaciongps">
                                @error('ubicaciongps') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                <button class="btn btn-warning" data-dismiss="modal" type="button">Cerrar</button>
                                <button class="btn btn-primary" type="button" wire:click="store()" data-dismiss="modal">Guardar</button>
                            </div>

                        </form>
                    </div>

                </div>
                </div>
            </div>

            <!-- Modal Consulta eliminar -->
            <div wire:ignore.self class="modal fade" id="ModalEliminarAlojamiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
    
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Alojamiento</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="container">
                            <form action="">
                                <div class="mb-3 mt-3">
                                    Está seguro de eliminar el Alojamiento: <label>{{ $AlojamientoAEliminar }} ?</label>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                    <button class="btn btn-warning" data-dismiss="modal" type="button">Cerrar</button>
                                    <button class="btn btn-danger" type="button" wire:click="delete()" data-dismiss="modal">Eliminar</button>
                                </div>
                            </form>
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
                                    <td>{{ $alojamiento->precio }}</td>
                                    <td>{{ $alojamiento->ubicaciongps }}</td>
                                    <td>
                                        @if($alojamiento->fotourl <> 'Sin_imagen.jpg')
                                            <img src="{{ $alojamiento->fotourl}}" alt="" style="width: 100px; height:100px;">
                                        @else
                                            <img src="/img/sin_imagen.jpg" alt="" style="width: 100px; height:100px;">
                                        @endif
                                    </td>
                                    <td>
                                        <div class='wrapper text-center'>
                                            <div class="btn-group" role="group">
                                                <button wire:click="edit({{ $alojamiento->id }})" type="button"
                                                    class="btn btn-warning" data-toggle="modal" data-target="#ModalEstadoCuentaPrueba">
                                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                                </button>
                                                <button wire:click="isModalConsultar({{ $alojamiento->id }})" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminarAlojamiento">
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