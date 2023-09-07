<div>
    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
            style="background-color: beige; ">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
            <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <form class="h-100">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4 d-flex flex-wrap">
                            <div class="col-12 m-2">
                                Seguro que quiere eliminar al Cliente {{$apellido}}, {{$nombre}} ?
                            </div>
                        </div>
                        <button class="btn btn-default" wire:click="isModalConsultar(0)">Cerrar</button>
                        <a wire:click="delete()" class="btn btn-default bg-red-400"><span class="glyphicon glyphicon-plus"
                           aria-hidden="true"></span>Eliminar</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

            <a wire:click="isModalCreateChange()" class="btn btn-default"><span class="glyphicon glyphicon-plus"
                    aria-hidden="true"></span> Cerrar</a>
            {{-- <x-guardar></x-guardar>
                   <x-cerrar></x-cerrar> --}}
        </div>
    </div>
</div>
