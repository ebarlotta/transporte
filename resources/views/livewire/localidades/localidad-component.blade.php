<div>
  <div id="page-wrapper">
    <div class="containergit">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="style">Localidades</h2>
          <button type="button" class="btn btn-info" wire:click="new()" data-toggle="modal" data-target="#ModalNuevaLocalidad">
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
			@if (session()->has('messageBad'))
				<div class="border-t-4  rounded-b px-4 py-3 shadow-md my-3 bg-red-500" role="alert"
						style="background-color: lightcoral;">
						<div class="flex">
								<div>
										<p class="text-xm bg-lightcoral">{{ session('messageBad') }}</p>
								</div>
						</div>
				</div>
			@endif

      <hr>

			<!-- Modal Nuevo -->
      <div wire:ignore.self class="modal fade" id="ModalNuevaLocalidad" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">

          <div class="modal-content" style="width: inherit">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Alta de Localidades</h5>
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

                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                  <button class="btn btn-warning" data-dismiss="modal" type="button">Cerrar</button>
									@if($localidad_id)
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

			<!-- Modal Eliminar -->
      <div wire:ignore.self class="modal fade" id="ModalEliminarLocalidad" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">

          <div class="modal-content" style="width: inherit">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar Localidades</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="container">
              <form action="">
                Segur que quiere eliminar la localidad <b>{{ $nombre }}</b> ?
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
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              @foreach ($localidades as $localidad)
                <tr>
                  <td>{{ $localidad->nombre }}</td>
                  <td>
                    <div class='wrapper text-center'>
                      <div class="btn-group" role="group">
                        <button wire:click="edit({{ $localidad->id }})" type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalNuevaLocalidad">
                          <i class="fa-solid fa-pen-to-square"></i> Editar
                        </button>
                        <button wire:click="BuscarDatosLocalidad({{ $localidad->id }})" class="btn btn-danger" data-toggle="modal" data-target="#ModalEliminarLocalidad">
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
