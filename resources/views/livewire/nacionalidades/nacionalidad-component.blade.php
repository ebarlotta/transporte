<div>
    <div id="page-wrapper">
        <div class="containergit">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="style">Nacionalidades</h2>
                    <button type="button" class="btn btn-info" wire:click="new()" data-toggle="modal" data-target="#ModalNuevaNacionalidad">
                        <i class="fa-regular fa-plus"></i> Nuevo </button>
                </div>
            </div>
            <hr>

            <div wire:ignore.self class="modal fade" id="ModalNuevaNacionalidad" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

                <div class="modal-content" style="width: inherit">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alta de Nacionalidades</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="container">
                        <form action="">
                            <div class="mb-3 mt-3">
                                <label class="form-label" for="codigopais">Código de País</label>
                                <input wire:model="codigopais" class="form-control" name="codigopais" type="text" id="codigopais">
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label" for="nombre">Nombre</label>
                                <input wire:model="nombre" class="form-control" name="nombre" type="text" id="nombre">
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                <button class="btn btn-warning" data-dismiss="modal" type="button">Cerrar</button>
                                @if($nacionalidad_id)
										<button class="btn btn-primary" type="button" wire:click="store()" data-dismiss="modal">Actualizar</button>	
									@else
                  	                    <button class="btn btn-primary" type="button" wire:click="store()" data-dismiss="modal">Guardar</button>
									@endif
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
                                    <th>Código de País</th>
                                    <th>Nombre</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            @foreach ($nacionalidades as $nacionalidad)
                                <tr>
                                    <td>{{ $nacionalidad->codigopais }}</td>
                                    <td>{{ $nacionalidad->nombre }}</td>
                                    <td>
                                        <div class='wrapper text-center'>
                                            <div class="btn-group" role="group">
                                                <button wire:click="edit({{ $nacionalidad->id }})" type="button" class="btn btn-warning"  data-toggle="modal" data-target="#ModalNuevaNacionalidad">
                                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                                </button>
                                                <button wire:click="isModalConsultar({{ $nacionalidad->id }})" class="btn btn-danger">
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