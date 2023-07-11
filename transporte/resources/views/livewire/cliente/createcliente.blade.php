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
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4 d-flex flex-wrap">
                            <div class="col-5 m-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Apellido</label>
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Ingrese Apellido" wire:model="apellido">
                            </div>
                            <div class="col-5 m-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Ingrese Nombre" wire:model="nombre">
                            </div>
                            <div class="col-5 m-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">DNI</label>
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Ingrese DNI" wire:model="dni">
                            </div>
                            <div class="col-5 m-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Dirección</label>
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Ingrese Dirección" wire:model="direccion">
                            </div>
                            <div class="col-5 m-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Teléfono</label>
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Ingrese Teléfono" wire:model="telefono">
                            </div>
                            <div class="col-5 m-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">E-Mail</label>
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Ingrese E-Mail" wire:model="email">
                            </div>
                            <div class="col-5 m-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Fecha de Nacimiento</label>
                                <input type="date"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Ingrese Fecha de Nacimiento" wire:model="fechanacimiento">
                            </div>
                            <div class="col-5 m-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Foto</label>
                                <input type="file"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Ingrese foto" wire:model="foto">
                            </div>
                            <div class="col-5 m-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Nacionalidad</label>
                                <select name="nacionalidad_id" id="" wire:model="nacionalidad_id">
                                    <option value="" selected>-</option>
                                    @foreach ($nacionalidades as $nacionalidad)
                                        <option value="{{ $nacionalidad->id }}">{{ $nacionalidad->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-5 m-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Provincia</label>
                                <select name="provincia_id" id="" wire:model="provincia_id">
                                    <option value="" selected>-</option>
                                    @foreach ($provincias as $provincia)
                                        <option value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-5 m-2">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Localidad</label>
                                <select name="localidad_id" id="" wire:model="localidad_id">
                                    <option value="" selected>-</option>
                                    @foreach ($localidades as $localidad)
                                        <option value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @error('estadocivil')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <button class="btn btn-default" wire:click="isModalCreateChange()">Cerrar</button>
                        <a wire:click="isModalCreateChange()" class="btn btn-default bg-red-400"><span class="glyphicon glyphicon-plus"
                           aria-hidden="true"></span> Cerrar2</a>
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
