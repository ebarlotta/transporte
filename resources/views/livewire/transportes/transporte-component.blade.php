<div>
    <div id="page-wrapper">
        <div class="containergit">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="style">Transportes</h2>
                    <button type="button" class="btn btn-info" wire:click="nuevo()" data-toggle="modal" data-target="#ModalNuevaTransporte">
                        <i class="fa-regular fa-plus"></i> Nuevo </button>
                </div>
            </div>
            <hr>

            <!-- Modal Nuevo/Modificar transporte -->
            <div wire:ignore.self class="modal fade" id="ModalNuevaTransporte" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

                <div class="modal-content" style="width: inherit">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alta de Transportes</h5>
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

                            <div class="mb-3">
                                <label class="form-label" for="precio">Precio</label>
                                <input wire:model="precio" class="form-control"
                                    name="precio" type="text" id="precio">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="ubicaciongps">Ubicacion GPS</label>
                                <input wire:model="ubicaciongps" class="form-control" name="ubicaciongps"
                                    type="text" id="ubicaciongps">
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label" for="fotourl">Foto</label>
                                <input wire:model="fotourl" class="form-control" name="fotourl" type="text" id="fotourl">
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label" for="salida">Salida</label>
                                <input wire:model="salida" class="form-control" name="salida" type="date" id="salida">
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label" for="llegada">Llegada</label>
                                <input wire:model="llegada" class="form-control" name="llegada" type="date" id="llegada">
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label" for="devolverenotrodestino">Devolver en otro destino</label>
                                <input wire:model="devolverenotrodestino" class="" name="devolverenotrodestino" type="checkbox" id="devolverenotrodestino">
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

            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="tabla table table-striped table-hover table-condensed" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Ubicación GPS</th>
                                    <th>Foto</th>
                                    <th>Salida</th>
                                    <th>Llegada</th>
                                    <th>Devolver en otro destino</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            @foreach ($transportes as $transporte)
                                <tr>
                                    <td>{{ $transporte->descripcion }}</td>
                                    <td>{{ $transporte->precio }}</td>
                                    <td>{{ $transporte->ubicaciongps }}</td>
                                    <td>{{ $transporte->fotourl }}</td>
                                    <td>{{ date("d/m/Y", strtotime($transporte->salida)); }}</td>
                                    <td>{{ date("d/m/Y", strtotime($transporte->llegada)); }}</td>
                                    <td>
                                        @if($transporte->devolverenotrodestino)
                                        <input type="checkbox" name="switch" class="form-control" checked style="height: 20px; width: 20px; background-color: #0E9700;  border-radius: 3px;">
                                        @else 
                                        <input type="checkbox" name="switch" class="form-control" checked style="height: 20px; width: 20px; background-color: #FE0006;  border-radius: 3px;">
                                        @endif
                                    </td>
                                    <td>
                                        <div class='wrapper text-center'>
                                            <div class="btn-group" role="group">
                                                <button wire:click="edit({{ $transporte->id }})" type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalNuevaTransporte">
                                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                                </button>
                                                <button wire:click="isModalConsultar({{ $transporte->id }})"
                                                    class="btn btn-danger"
                                                    >
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
