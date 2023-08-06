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
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="precio">Precio</label>
                                <input wire:model="precio" class="form-control" name="precio" type="text" id="precio">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="foto">Foto</label>
                                <input wire:model="fotourl" class="form-control" name="foto" type="text" id="foto">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="ubicaciongps">Ubicacion GPS</label>
                                <input wire:model="ubicaciongps" class="form-control" name="ubicaciongps" type="text" id="ubicaciongps">
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
                                    <td>{{ $alojamiento->fotourl}}</td>
                                    <td>
                                        <div class='wrapper text-center'>
                                            <div class="btn-group" role="group">
                                                <a href="" class="btn btn-warning" data-toggle="tooltip" title="Editar">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar
                                                </a>
                                                <button class="btn btn-danger" onclick="eliminar" data-toggle="tooltip" title="Eliminar">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>Eliminar
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