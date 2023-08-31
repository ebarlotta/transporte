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

            <!-- Modal Paquete Nuevo/Modificar -->
            <div wire:ignore.self class="modal fade" id="ModalNuevoDestino" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" style="width: inherit">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Gestión de Paquetes</h5>
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
                                <input wire:model="fotourl" class="form-control" name="foto" type="file" id="foto">
                            </div>
                            <div class="mb-3">
                                <div>
                                    <label class="form-label">Destinos Relacionados</label>
                                    <button class="btn btn-info" data-dismiss="modal" type="button" data-toggle="modal" data-target="#ModalNueaRelacion"><i class="fa-regular fa-plus"></i>Agregar Destino</button>
                                </div>
                                <div class="d-flex">
                                    @if(($destinospaquete))
                                        @foreach ($destinospaquete as $destino)
                                            <div class="card m-2 p-2" style="min-width: 100px; box-shadow: 5px 5px lightslategray; border-style: solid; border-width: 2px;">
                                                <div class="d-flex">
                                                    <img src="{{ asset($destino->fotourl)}}" alt="" style="width: 40px; height: 40px;">
                                                    <div style="width: 40px; height: 40px;">
                                                        <span wire:click="setDestinoAEliminar({{ $destino->id }})" data-toggle="modal" data-target="#ModalEliminarRelacion" class="px-1" style="margin-left: 23px; background-color: #e98989; border-radius: 7px; text-decoration: none;">&times;</span>
                                                    </div>
                                                </div>
                                                {{ $destino->nombre}}
                                            </div>
                                        @endforeach
                                    @else
                                        No se encontraron Destinos relacionados
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
            <!-- Fin Modal -->

            <!-- Modal Paquete Nuevo/Modificar Relacion -->
            <div wire:ignore.self class="modal fade" id="ModalNueaRelacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    @if($destinosposibles)
                                        <select wire:model="destinosp" name="destinosp" id="destinosp">
                                            <option value="">-</option>
                                            @foreach($destinosposibles as $destinosp)
                                                <option value="{{ $destinosp->id }}">{{ $destinosp->nombre }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                    <button class="btn btn-warning" data-dismiss="modal" type="button">Cerrar</button>
                                    <button class="btn btn-primary" type="button" wire:click="storeRelacion()" data-dismiss="modal">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Modal -->

           <!-- Modal Consulta Eliminar Relacion -->
           <div wire:ignore.self class="modal fade" id="ModalEliminarRelacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="width: inherit">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar relación Paquetes con Destinos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="container">
                        <form action="">
                            <div class="mb-3 mt-3">
                                <label class="form-label" for="nombre">Está seguro de que quiere eliminar la relación?</label>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                                <button class="btn btn-warning" data-dismiss="modal" type="button">Cerrar</button>
                                <button class="btn btn-danger" type="button" wire:click="EliminarRelacion()" data-dismiss="modal">Eliminar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Modal -->

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
                                    <td>
                                        @if("Sin_imagen.jpg"==$paquete->fotourl) 
                                            <img src="img/sin_imagen.jpg" alt="" style="width: 100px; height:100px;">
                                        @else 
                                            {{-- <img src="{{ asset($paquete->fotourl) }}" alt="" style="width: 100px; height:100px;"> --}}
                                        @endif
                                    </td>
                                    <td>
                                        <div class='wrapper text-center'>
                                            <div class="btn-group" role="group">
                                                <button wire:click="edit({{ $paquete->id }})" type="button" class="btn btn-warning"  data-toggle="modal" data-target="#ModalNuevoDestino">
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