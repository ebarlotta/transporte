<div>
    <div id="page-wrapper">
        <div class="containergit">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="style">Destinos</h2>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalNuevoDestino">
                        <i class="fa-regular fa-plus"></i> Nuevo </button>
                </div>
            </div>
            <hr>

            <!-- Modal Nuevo/Modificar -->
            <div wire:ignore.self class="modal fade" id="ModalNuevoDestino" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" style="width: inherit">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Alta de Destinos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="container">
                            <form action="">
                                <div class="mb-3 mt-3">
                                    <label class="form-label" for="nombre">Nombre</label>
                                    <input wire:model="nombre" class="form-control" name="nombre" type="text"
                                        id="nombre">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="descripcion">Descripción</label>
                                    <textarea wire:model="descripcion" class="form-control" placeholder="Descripción" aria-label="With textarea"
                                        rows="5"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="clima">Clima</label>
                                    <input wire:model="clima" class="form-control" name="clima" type="text"
                                        id="clima">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="mejorepocaparavisitar">Mejor épora para
                                        visitar</label>
                                    <input wire:model="mejorepocaparavisitar" class="form-control"
                                        name="mejorepocaparavisitar" type="text" id="mejorepocaparavisitar">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="ubicaciongps">Ubicacion GPS</label>
                                    <input wire:model="ubicaciongps" class="form-control" name="ubicaciongps" type="text" id="ubicaciongps">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="presupuestoestimado">Presupuesto estimado</label>
                                    <input wire:model="presupuestoestimado" class="form-control"
                                        name="presupuestoestimado" type="text" id="presupuestoestimado">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="otrosenlaces">Otros Enlaces</label>
                                    <input wire:model="otrosenlaces" class="form-control" name="otrosenlaces"
                                        type="text" id="otrosenlaces">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="pais_id">País</label>
                                    <select wire:model="pais_id" name="pais_id" id="pais_id">
                                        <option value="">-</option>
                                        @foreach ($paises as $pais)
                                            <option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="foto">Foto</label>
                                    <input wire:model="fotourl" class="form-control" name="foto" type="file"
                                        id="foto" accept="image/*">
                                    <div wire:loading wire:target="fotourl">
                                        <strong class="font-bold">Imágen cargando!!</strong>
                                    </div>
                                    {{-- @if($fotourl) --}}
                                        {{-- <img src="{{ $fotourl->temporaryUrl() }}" alt="" style="height: 100px; width: 100px;"> --}}
                                    {{-- @endif --}}
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

            <!-- Modal Eliminar -->
            <div wire:ignore.self class="modal fade" id="ModalEliminarDestino" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="width: inherit">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Destino</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                    <form action="">
                    Seguro que quiere eliminar el destino <b>{{ $nombreparaeliminar }}</b> ?
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
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Clima</th>
                                    <th>Mejor época para visitar</th>
                                    <th>Ubicación GPS</th>
                                    <th>Presupuesto estimado</th>
                                    <th>Otros Enlaces</th>
                                    <th>País</th>
                                    <th>Foto</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOApHGNbLGntMdhoCPR5XstY2ggi73N_Q&callback=initMap&libraries=&v=weekly" defer></script>
                            <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script> --}}
                            @foreach ($destinos as $destino)
                                <tr>
                                    <td class="align-middle">{{ $destino->nombre }}</td>
                                    <td class="align-middle">{{ $destino->descripcion }}</td>
                                    <td class="align-middle">{{ $destino->clima }}</td>
                                    <td class="align-middle">{{ $destino->mejorepocaparavisitar }}</td>
                                    <td class="align-middle">
                                        <?php $porciones = explode(",", $destino->ubicaciongps);
                                            $altitud = $porciones[0];
                                            $latitud = $porciones[1];
                                        ?>
                                        <iframe src="https://maps.google.com/?ll=<?php echo $altitud?>,<?php echo $latitud?>&z=14&t=m&output=embed" frameborder="0" style="width: 300px;height: 100px;"></iframe>
                                    </td>
                                    <td class="align-middle">{{ $destino->presupuestoestimado }}</td>
                                    <td class="align-middle">{{ $destino->otrosenlaces }}</td>
                                    <td class="align-middle">{{ $destino->pais_id }}</td>
                                    <td class="align-middle">
                                        @if("Sin_imagen.jpg"==$destino->fotourl) 
                                            <img src="img/sin_imagen.jpg" alt="" style="width: 100px; height:100px;">
                                        @else 
                                            <img src="{{ asset($destino->fotourl) }}" alt="" style="width: 100px; height:100px;">
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <div class='wrapper text-center'>
                                            <div class="btn-group" role="group">
                                                <button wire:click="edit({{ $destino->id }})" type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalNuevoDestino">
                                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                                </button>
                                                <button wire:click="BuscarDatosDestinoParaEliminar({{ $destino->id }})" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminarDestino">
                                                    <i class="fa-regular fa-circle-xmark"></i> Eliminar
                                                </button>
{{-- 
                                                <a href="" class="btn btn-warning" data-toggle="tooltip" title="Editar" data-toggle="modal" data-target="#ModalNuevoDestino">
                                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                                </a>
                                                <button class="btn btn-danger" onclick="eliminar"
                                                    data-toggle="tooltip" title="Eliminar">
                                                    <i class="fa-regular fa-circle-xmark"></i> Eliminar
                                                </button> --}}
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
