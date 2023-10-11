<div>
    <div id="page-wrapper">
        <div class="containergit">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="style">Servicios</h2>
                    <button type="button" class="btn btn-info" wire:click="nuevo()" data-toggle="modal" data-target="#ModalNuevaServicio">
                        <i class="fa-regular fa-plus"></i> Nuevo </button>
                </div>
            </div>
            <hr>
            <!-- modal Alta/Modificacion de Servicios -->
            <div wire:ignore.self class="modal fade" id="ModalNuevaServicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

                <div class="modal-content" style="width: inherit">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alta de Servicios</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="container">
                        <form action="">
                            <div class="mb-3 mt-3">
                                <label class="form-label" for="descripcion">Descripción</label>
                                <input wire:model="descripcion" class="form-control" name="descripcion" type="text" id="descripcion">
                            </div>
                            <div class="mb-3 mt-3">
                                <div class="d-flex">
                                    <label class="form-label" for="foto">Foto</label>
                                    <input wire:model="fotourl" class="form-control" name="fotourl" type="file" id="fotourl" accept="image/*">
                                    <div wire:loading wire:target="fotourl">
                                        <strong class="font-bold">Imágen cargando!!</strong>
                                        {{-- <img src="{{ $fotourl->temporaryUrl() }}" width="50px;"> --}}
                                    </div>
                                    @if($fotourl) 
                                        <img src="{{ asset($fotourl) }}" width="50px;">
                                    @endif
                                </div>
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
            <div wire:ignore.self class="modal fade" id="ModalEliminarServicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
    
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Servicio</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="container">
                            <form action="">
                                <div class="mb-3 mt-3">
                                    Está seguro de eliminar el Servicio: <label>{{ $ServicioAEliminar }} ?</label>
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
                                    <th>Descripción</th>
                                    <th>Ícono</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            @foreach ($servicios as $servicio)
                                <tr>
                                    <td>{{ $servicio->descripcion }}</td>
                                    <td class="col-1"><img src="{{ 'storage/'.$servicio->fotourl }}" width="50px" height="50px"></td>
                                    <td>
                                        <div class='wrapper text-center'>
                                            <div class="btn-group" role="group">
                                                <button wire:click="edit({{ $servicio->id }})" type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalNuevaServicio">
                                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                                </button>
                                                <button wire:click="isModalConsultar({{ $servicio->id }})" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminarServicio">
                                                    <i class="fa-regular fa-circle-xmark"></i> Eliminar
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $datos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
