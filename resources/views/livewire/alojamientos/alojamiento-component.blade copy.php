<div>
    <?php session_start(); ?>
    <div id="page-wrapper">
        <div class="containergit">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="style">Alojamientos</h2>
                    <button type="button" class="btn btn-info" wire:click="nuevo()" data-toggle="modal" data-target="#ModalNuevoAlojamiento">
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
            <div wire:ignore.self class="modal fade" id="ModalNuevoAlojamiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <textarea wire:model="descripcion" class="form-control" placeholder="Descripción" aria-label="With textarea" rows="5">{{ old('descripcion') }}</textarea>
                                @error('descripcion') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="precio">Precio</label>
                                <input wire:model="precio" class="form-control" name="precio" type="text" id="precio" value="{{ old('precio') }}">
                                @error('precio') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="mb-3">
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
                                @error('fotourl') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <div class="mb-3 d-flex">
                                
                                <div class="col-9">
                                    <label class="form-label" for="ubicaciongps">Ubicacion GPS</label>
                                    <input wire:model="ubicaciongps" class="form-control" name="ubicaciongps" type="text" id="ubicaciongps" readonly="true" value="{{ $_SESSION['latitud'] }}">
                                </div>
                                <div class="col-3 align-bottom">
                                    {{-- <p>Dale un vistazo <a href="../mapa/basico1.html" target="_blank">Ver Mapa</a>.</p> --}}
                                <a class="btn btn-info" href="#" onClick="window.open('../mapa/basico1.html', 'Ubicación', 'width=400, height=400')" wire:click="ActualizarCoordenadas()">Capturar Coordenada</a>
                                    {{-- <a href="ventana = window.open('../mapa/basico1.html', 'nombre', 'height=320, width=780'); ventana.focus();">Link</a> --}}
                                </div>
                                {{-- <button href="../mapa/basico.html"></button> --}}
                                @error('ubicaciongps') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            {{-- <div><label for="">Valor de Sesion</label><pre><?php if(isset($_SESSION['latitud'])) { echo $_SESSION['latitud']; }; ?></pre></div> --}}
                            {{-- <button onclick="alert('<?php echo $_SESSION['latitud']; ?>')">Boton</button> --}}
                            <input type="text" name="" id="" value="{{ $latitud }}" wire:model="longitud">
                            <input type="text" name="" id="" value="{{ $longitud }}" wire:model="latitud">
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
                                    <td>
                                        <?php 
                                            $porciones = explode(",", $alojamiento->ubicaciongps);
                                            $altitud = $porciones[0];
                                            $latitud = $porciones[1];
                                        ?>
                                        <iframe src="https://maps.google.com/?ll=<?php echo $altitud?>,<?php echo $latitud?>&z=14&t=m&output=embed"    frameborder="0" style="width: 300px;height: 100px;"></iframe>
                                    </td>
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
                                                    class="btn btn-warning" data-toggle="modal" data-target="#ModalNuevoAlojamiento">
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
                        {{ $datos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>