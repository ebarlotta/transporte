<div>
    <div id="page-wrapper">
        <div class="containergit">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="style">Paquetes</h2>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalNuevoDestino">
                        <i class="fa-regular fa-plus"></i> Nuevo </button>
                    {{-- <a href="#" class="btn btn-celeste"><span class="glyphicon glyphicon-plus"
                            aria-hidden="true"></span>Nuevo</a> --}}
                </div>
            </div>
            <hr>

            <div wire:ignore.self class="modal fade" id="ModalNuevoDestino" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

                <div class="modal-content" style="width: inherit">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alta de Paquetes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="container">
                        <form action="">
                            <div class="mb-3 mt-3">
                                <label class="form-label" for="nombre">Nombre</label>
                                <input wire:model="nombre" class="form-control" name="nombre" type="text" id="nombre">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="descripcion">Descripción</label>
                                <textarea wire:model="descripcion" class="form-control" placeholder="Descripción" aria-label="With textarea" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="clima">Duracion Total</label>
                                <input wire:model="duraciontotal" class="form-control" name="duraciontotal" type="text" id="duraciontotal">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="presupuestoestimado">Presupuesto estimado</label>
                                <input wire:model="presupuestoestimado" class="form-control" name="presupuestoestimado" type="text" id="presupuestoestimado">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="otrosenlaces">Fechas Disponibles</label>
                                <input wire:model="fechasdisponibles" class="form-control" name="fechasdisponibles" type="text" id="fechasdisponibles">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="foto">Foto</label>
                                <input wire:model="fotourl" class="form-control" name="foto" type="text" id="foto">
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
                                    <td>{{ $paquete->nombre }}</td>
                                    <td>{{ $paquete->descripcion }}</td>
                                    <td>{{ $paquete->duraciontotal }}</td>
                                    <td>{{ $paquete->presupuestoestimado }}</td>
                                    <td>{{ $paquete->fechasdisponibles }}</td>
                                    <td>{{ $paquete->fotourl}}</td>
                                    <td>
                                        <div class='wrapper text-center'>
                                            <div class="btn-group" role="group">
                                                <button wire:click="edit({{ $paquete->id }})" type="button"
                                                    class="btn btn-warning" data-toggle="modal"
                                                    
                                                    data-target="#exampleModal">
                                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                                </button>
                                                <button wire:click="isModalConsultar({{ $paquete->id }})"
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