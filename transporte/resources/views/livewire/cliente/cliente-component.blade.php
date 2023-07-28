<div>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 flex" style="justify-content: space-evenly;">
                    <h2 class="hstyle"
                        style="font-family:RobotoDraft, sans-serif; font-weight: 400; color: #5E738B; font-size: 30px; margin-top: 20px;
                    margin-bottom: 10px; line-height: 1.1; box-sizing: border-box;">
                        Clientes</h2>
                    {{-- <button wire:click="create()" class="bg-green-300 hover:bg-green-400 text-white-900 font-bold py-2 px-4 rounded my-3"></button> --}}
                    {{-- <a wire:click="isModalCreateChange()" class="btn btn-primary h-3" style="height: 60%; align-content: center; display: flex;"> --}}
                    {{-- <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  --}}
                    {{-- <i class="fa-duotone fa-plus"></i> --}}
                    {{-- <img src="{{ asset('img/logo/plus.png') }}" alt="" width="10px" height="10px" sizes="10px"> --}}
                    {{-- <i class="fa-regular fa-plus"></i>Nuevo --}}
                    {{-- </a> --}}
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa-regular fa-plus"></i>Nuevo</button>

                    <!-- Modal -->
                    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Gestión de Clientes</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">


                                    <form>
                                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                            <div class="mb-4 d-flex flex-wrap">
                                                <div class="col-5 m-2">
                                                    <label
                                                        class="block text-gray-700 text-sm font-bold mb-2">Apellido</label>
                                                    <input type="text"
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        placeholder="Ingrese Apellido" wire:model="apellido">
                                                </div>
                                                <div class="col-5 m-2">
                                                    <label
                                                        class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                                                    <input type="text"
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        placeholder="Ingrese Nombre" wire:model="nombre">
                                                </div>
                                                <div class="col-5 m-2">
                                                    <label
                                                        class="block text-gray-700 text-sm font-bold mb-2">DNI</label>
                                                    <input type="text"
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        placeholder="Ingrese DNI" wire:model="dni">
                                                </div>
                                                <div class="col-5 m-2">
                                                    <label
                                                        class="block text-gray-700 text-sm font-bold mb-2">Dirección</label>
                                                    <input type="text"
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        placeholder="Ingrese Dirección" wire:model="direccion">
                                                </div>
                                                <div class="col-5 m-2">
                                                    <label
                                                        class="block text-gray-700 text-sm font-bold mb-2">Teléfono</label>
                                                    <input type="text"
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        placeholder="Ingrese Teléfono" wire:model="telefono">
                                                </div>
                                                <div class="col-5 m-2">
                                                    <label
                                                        class="block text-gray-700 text-sm font-bold mb-2">E-Mail</label>
                                                    <input type="text"
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        placeholder="Ingrese E-Mail" wire:model="email">
                                                </div>
                                                <div class="col-5 m-2">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2">Fecha de
                                                        Nacimiento</label>
                                                    <input type="date"
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        placeholder="Ingrese Fecha de Nacimiento"
                                                        wire:model="fechanacimiento">
                                                </div>
                                                <div class="col-5 m-2">
                                                    <label
                                                        class="block text-gray-700 text-sm font-bold mb-2">Foto</label>
                                                    <input type="file"
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        placeholder="Ingrese foto" wire:model="foto">
                                                </div>
                                                <div class="col-5 m-2">
                                                    <label
                                                        class="block text-gray-700 text-sm font-bold mb-2">Nacionalidad</label>
                                                    <select name="nacionalidad_id" id=""
                                                        wire:model="nacionalidad_id">
                                                        <option value="" selected>-</option>
                                                        @foreach ($nacionalidades as $nacionalidad)
                                                            <option value="{{ $nacionalidad->id }}">
                                                                {{ $nacionalidad->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-5 m-2">
                                                    <label
                                                        class="block text-gray-700 text-sm font-bold mb-2">Provincia</label>
                                                    <select name="provincia_id" id=""
                                                        wire:model="provincia_id">
                                                        <option value="" selected>-</option>
                                                        @foreach ($provincias as $provincia)
                                                            <option value="{{ $provincia->id }}">
                                                                {{ $provincia->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-5 m-2">
                                                    <label
                                                        class="block text-gray-700 text-sm font-bold mb-2">Localidad</label>
                                                    <select name="localidad_id" id=""
                                                        wire:model="localidad_id">
                                                        <option value="" selected>-</option>
                                                        @foreach ($localidades as $localidad)
                                                            <option value="{{ $localidad->id }}">
                                                                {{ $localidad->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            @error('estadocivil')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                            <button class="btn btn-default"
                                                wire:click="isModalCreateChange()">Cerrar</button>
                                            <a wire:click="store()" class="btn btn-default bg-red-400"><span
                                                    class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                Modificar</a>
                                        </div>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                    <button type="button" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- M odal Estado de cuenta PRUEBA --}}
                    {{-- ====================== --}}
                    <head>
                        <style>
                            h1 {
                                text-align: center;
                                color: #333333;
                            }
                            .cardcontainer {
                                width: 250px;
                                /* height: 200px; */
                                background-color: white;
                                margin-left: auto;
                                margin-right: auto;
                                transition: 0.3s;
                                padding: 10px;
                                margin: 10px;
                            }
                            .cardcontainer:hover {
                                box-shadow: 0 0 45px gray;
                            }

                            .photo {
                                height: 100px;
                                width: 50%;
                            }

                            .photo img {
                                height: 100%;
                                width: 100%;
                            }

                            .txt1 {
                                margin: auto;
                                text-align: center;
                                font-size: 17px;
                            }

                            .content {
                                width: 80%;
                                height: 100px;
                                margin-left: auto;
                                margin-right: auto;
                                position: relative;
                                top: -33px;
                            }

                            .photos {
                                width: 90px;
                                height: 30px;
                                background-color: #E74C3C;
                                color: white;
                                position: relative;
                                top: -30px;
                                padding-left: 10px;
                                font-size: 20px;
                            }

                            .txt4 {
                                font-size: 27px;
                                position: relative;
                                top: 33px;
                            }

                            .txt5 {
                                position: relative;
                                top: 18px;
                                color: #E74C3C;
                                font-size: 23px;
                            }

                            .txt2 {
                                position: relative;
                                top: 10px;
                            }
                            /* .cardcontainer:hover>.content {
                                height: 200px;
                            } */

                            .footer {
                                width: 80%;
                                height: 100px;
                                margin-left: auto;
                                margin-right: auto;
                                background-color: white;
                                position: relative;
                                top: -15px;
                            }

                            .btn {
                                position: relative;
                                top: 20px;
                            }

                            #heart {
                                cursor: pointer;
                            }

                            .like {
                                float: right;
                                font-size: 22px;
                                position: relative;
                                top: 20px;
                                color: #333333;
                            }

                            .fa-gratipay {
                                margin-right: 10px;
                                transition: 0.5s;
                            }

                            .fa-gratipay:hover {
                                color: #E74C3C;
                            }

                            .txt3 {
                                color: gray;
                                position: relative;
                                top: 18px;
                                font-size: 14px;
                            }

                            .comments {
                                float: right;
                                cursor: pointer;
                            }

                            .fa-clock,
                            .fa-comments {
                                margin-right: 7px;
                            }


                            .wrapper1 {
                                background: #EFEFEF;
                                box-shadow: 1px 1px 10px #999;
                                margin: auto;
                                text-align: center;
                                position: relative;
                                -webkit-border-radius: 5px;
                                -moz-border-radius: 5px;
                                border-radius: 5px;
                                margin-bottom: 20px !important;
                                width: 800px;
                                padding-top: 5px;
                            }

                            .scrolls1 {
                                display: flex;
                                flex-wrap: no-wrap;
                                overflow-x: auto;
                                margin: 20px;
                            }
                        </style>
                    </head>
                    <div wire:ignore.self class="modal fade" id="ModalEstadoCuentaPrueba" tabindex="-1"
                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="width: 1000px; max-width: 100%">
                            {{-- <div class="modal-dialog" role="document"  style="width: 1000px"> --}}
                            <div class="modal-content" style="width: inherit">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Gestión de Clientes</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="height: auto;">
                                    <div class="container flex d-flex wrapper1">
                                        <div class="scrolls1">
                                            <div class="cardcontainer" wire:click="DevolverCuotas(1)">
                                                <h5 style="width:200px;">News Card</h5>
                                                <div class="photo">
                                                    <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500"
                                                        width="100px" height="100px">
                                                    <div class="photos">Photos</div>
                                                </div>
                                                <div class="content">
                                                    <p class="txt4">City Lights In Newyork</p>
                                                    <p class="txt5">A city that never sleeps</p>
                                                    <p class="txt3">Texto</p>
                                                </div>
                                                <div class="footer">
                                                    <p><a class="waves-effect waves-light btn" href="#">Read
                                                            More</a><a id="heart"><span class="like"><i
                                                                    class="fab fa-gratipay"></i>Like</span></a></p>
                                                    <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span
                                                            class="comments"><i class="fas fa-comments"></i>45
                                                            Comments</span></p>
                                                </div>
                                            </div>
                                            <div class="cardcontainer">
                                                <h5 style="width:200px;">News Card</h5>
                                                <div class="photo">
                                                    <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500"
                                                        width="100px" height="100px">
                                                    <div class="photos">Photos</div>
                                                </div>
                                                <div class="content">
                                                    <p class="txt4">City Lights In Newyork</p>
                                                    <p class="txt5">A city that never sleeps</p>
                                                    <p class="txt3">Texto</p>
                                                </div>
                                                <div class="footer">
                                                    <p><a class="waves-effect waves-light btn" href="#">Read
                                                            More</a><a id="heart"><span class="like"><i
                                                                    class="fab fa-gratipay"></i>Like</span></a></p>
                                                    <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span
                                                            class="comments"><i class="fas fa-comments"></i>45
                                                            Comments</span></p>
                                                </div>
                                            </div>
                                            <div class="cardcontainer">
                                                <h5 style="width:200px;">News Card</h5>
                                                <div class="photo">
                                                    <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500"
                                                        width="100px" height="100px">
                                                    <div class="photos">Photos</div>
                                                </div>
                                                <div class="content">
                                                    <p class="txt4">City Lights In Newyork</p>
                                                    <p class="txt5">A city that never sleeps</p>
                                                    <p class="txt3">Texto</p>
                                                </div>
                                                <div class="footer">
                                                    <p><a class="waves-effect waves-light btn" href="#">Read
                                                            More</a><a id="heart"><span class="like"><i
                                                                    class="fab fa-gratipay"></i>Like</span></a></p>
                                                    <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span
                                                            class="comments"><i class="fas fa-comments"></i>45
                                                            Comments</span></p>
                                                </div>
                                            </div>
                                            <div class="cardcontainer">
                                                <h5 style="width:200px;">News Card</h5>
                                                <div class="photo">
                                                    <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500"
                                                        width="100px" height="100px">
                                                    <div class="photos">Photos</div>
                                                </div>
                                                <div class="content">
                                                    <p class="txt4">City Lights In Newyork</p>
                                                    <p class="txt5">A city that never sleeps</p>
                                                    <p class="txt3">Texto</p>
                                                </div>
                                                <div class="footer">
                                                    <p><a class="waves-effect waves-light btn" href="#">Read
                                                            More</a><a id="heart"><span class="like"><i
                                                                    class="fab fa-gratipay"></i>Like</span></a></p>
                                                    <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span
                                                            class="comments"><i class="fas fa-comments"></i>45
                                                            Comments</span></p>
                                                </div>
                                            </div>
                                            <div class="cardcontainer">
                                                <h5 style="width:200px;">News Card</h5>
                                                <div class="photo">
                                                    <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500"
                                                        width="100px" height="100px">
                                                    <div class="photos">Photos</div>
                                                </div>
                                                <div class="content">
                                                    <p class="txt4">City Lights In Newyork</p>
                                                    <p class="txt5">A city that never sleeps</p>
                                                    <p class="txt3">Texto</p>
                                                </div>
                                                <div class="footer">
                                                    <p><a class="waves-effect waves-light btn" href="#">Read
                                                            More</a><a id="heart"><span class="like"><i
                                                                    class="fab fa-gratipay"></i>Like</span></a></p>
                                                    <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span
                                                            class="comments"><i class="fas fa-comments"></i>45
                                                            Comments</span></p>
                                                </div>
                                            </div>
                                            <div class="cardcontainer">
                                                <h5 style="width:200px;">News Card</h5>
                                                <div class="photo">
                                                    <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500"
                                                        width="100px" height="100px">
                                                    <div class="photos">Photos</div>
                                                </div>
                                                <div class="content">
                                                    <p class="txt4">City Lights In Newyork</p>
                                                    <p class="txt5">A city that never sleeps</p>
                                                    <p class="txt3">Texto</p>
                                                </div>
                                                <div class="footer">
                                                    <p><a class="waves-effect waves-light btn" href="#">Read
                                                            More</a><a id="heart"><span class="like"><i
                                                                    class="fab fa-gratipay"></i>Like</span></a></p>
                                                    <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span
                                                            class="comments"><i class="fas fa-comments"></i>45
                                                            Comments</span></p>
                                                </div>
                                            </div>
                                            <div class="cardcontainer">
                                                <h5 style="width:200px;">News Card</h5>
                                                <div class="photo">
                                                    <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500"
                                                        width="100px" height="100px">
                                                    <div class="photos">Photos</div>
                                                </div>
                                                <div class="content">
                                                    <p class="txt4">City Lights In Newyork</p>
                                                    <p class="txt5">A city that never sleeps</p>
                                                    <p class="txt3">Texto</p>
                                                </div>
                                                <div class="footer">
                                                    <p><a class="waves-effect waves-light btn" href="#">Read
                                                            More</a><a id="heart"><span class="like"><i
                                                                    class="fab fa-gratipay"></i>Like</span></a></p>
                                                    <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span
                                                            class="comments"><i class="fas fa-comments"></i>45
                                                            Comments</span></p>
                                                </div>
                                            </div>
                                            <div class="cardcontainer">
                                                <h5 style="width:200px;">News Card</h5>
                                                <div class="photo">
                                                    <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500"
                                                        width="100px" height="100px">
                                                    <div class="photos">Photos</div>
                                                </div>
                                                <div class="content">
                                                    <p class="txt4">City Lights In Newyork</p>
                                                    <p class="txt5">A city that never sleeps</p>
                                                    <p class="txt3">Texto</p>
                                                </div>
                                                <div class="footer">
                                                    <p><a class="waves-effect waves-light btn" href="#">Read
                                                            More</a><a id="heart"><span class="like"><i
                                                                    class="fab fa-gratipay"></i>Like</span></a></p>
                                                    <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span
                                                            class="comments"><i class="fas fa-comments"></i>45
                                                            Comments</span></p>
                                                </div>
                                            </div>
                                            <div class="cardcontainer">
                                                <h5 style="width:200px;">News Card</h5>
                                                <div class="photo">
                                                    <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500"
                                                        width="100px" height="100px">
                                                    <div class="photos">Photos</div>
                                                </div>
                                                <div class="content">
                                                    <p class="txt4">City Lights In Newyork</p>
                                                    <p class="txt5">A city that never sleeps</p>
                                                    <p class="txt3">Texto</p>
                                                </div>
                                                <div class="footer">
                                                    <p><a class="waves-effect waves-light btn" href="#">Read
                                                            More</a><a id="heart"><span class="like"><i
                                                                    class="fab fa-gratipay"></i>Like</span></a></p>
                                                    <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span
                                                            class="comments"><i class="fas fa-comments"></i>45
                                                            Comments</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {!! $cuotas !!}
                            </div>
                        </div>
                    </div>

                    {{-- Modal Estado de cuenta --}}
                    {{-- ====================== --}}

                    <style>
                        .card-img-top {
                            border-radius: 30px;
                            padding: 20px;
                            width: 100%;
                            height: 15vw;
                            object-fit: cover;
                        }

                        .card {
                            border-radius: 30px;
                            margin-right: 30px;
                            overflow: hidden;
                            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
                        }

                        .card-body {
                            padding: 25px;
                            margin-top: -15px;
                        }

                        .btn-primary {
                            border-radius: 10px;
                            margin-bottom: 20px;
                        }

                        .btn-primary:hover {
                            background-color: #eb253c;
                            border-color: #000000;
                        }

                        h4 {
                            color: rgb(0, 91, 228);
                            margin-bottom: 10px;
                        }
                    </style>
                    <div wire:ignore.self class="modal fade" id="ModalEstadoCuenta" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="width: 1000px">
                            <div class="modal-content" style="width: inherit">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Gestión de Clientes</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
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
                                                                <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xxl-6 g-4 pl-2 py-5 justify-content-center"
                                                                    style="overflow-x: scroll; overflow-y: hidden; height: 400px; white-space:nowrap">
                                                                    <div
                                                                        style="background:#EFEFEF; box-shadow: 1px 1px 10px #999; margin: auto; text-align: center; position: relative;-webkit-border-radius: 5px;-moz-border-radius: 5px; border-radius: 5px; margin-bottom: 20px !important; width: 800px; padding-top: 5px;">
                                                                        <!-- Inicio de la tarjeta N° 1-->
                                                                        <div class="card ml-2"
                                                                            wire:click="DevolverCuotas(1)">
                                                                            <img src="img/productos/rio.jpg"
                                                                                class="card-img-top" alt="...">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title">Primer Destino
                                                                                </h4>
                                                                                <p class="card-text">Texto</p>
                                                                            </div>
                                                                            <button type="button"
                                                                                class="btn btn-primary">
                                                                                Notifications <span
                                                                                    class="badge badge-light">4</span>
                                                                            </button>
                                                                        </div>
                                                                        <!-- Fin de la tarjeta -->

                                                                        <!-- Inicio de la tarjeta N° 2-->
                                                                        <div class="card">
                                                                            <img src="img/productos/machu pichu.jpg"
                                                                                class="card-img-top" alt="...">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title">Primer Destino
                                                                                </h4>
                                                                                <p class="card-text">Texto</p>
                                                                            </div>
                                                                            <button type="button"
                                                                                class="btn btn-primary">
                                                                                Notifications <span
                                                                                    class="badge badge-light">4</span>
                                                                            </button>
                                                                        </div>
                                                                        <!-- Fin de la tarjeta -->

                                                                        <!-- Inicio de la tarjeta N° 3-->
                                                                        <div class="card">
                                                                            <img src="img/productos/mexico.jpg"
                                                                                class="card-img-top" alt="...">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title">Primer Destino
                                                                                </h4>
                                                                                <p class="card-text">Texto</p>
                                                                            </div>
                                                                            <button type="button"
                                                                                class="btn btn-primary">
                                                                                Notifications <span
                                                                                    class="badge badge-light">4</span>
                                                                            </button>
                                                                        </div>
                                                                        <!-- Fin de la tarjeta -->

                                                                        <!-- Inicio de la tarjeta N° 4-->
                                                                        <div class="card">
                                                                            <img src="img/productos/ny.png"
                                                                                class="card-img-top" alt="...">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title">Primer Destino
                                                                                </h4>
                                                                                <p class="card-text">Texto</p>
                                                                            </div>
                                                                            <button type="button"
                                                                                class="btn btn-primary">
                                                                                Notifications <span
                                                                                    class="badge badge-light">4</span>
                                                                            </button>
                                                                        </div>
                                                                        <!-- Fin de la tarjeta -->

                                                                        <!-- Inicio de la tarjeta N° 5-->
                                                                        <div class="card">
                                                                            <img src="img/productos/ny2.png"
                                                                                class="card-img-top" alt="...">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title">Primer Destino
                                                                                </h4>
                                                                                <p class="card-text">Texto</p>
                                                                            </div>
                                                                            <button type="button"
                                                                                class="btn btn-primary">
                                                                                Notifications <span
                                                                                    class="badge badge-light">4</span>
                                                                            </button>
                                                                        </div>
                                                                        <!-- Fin de la tarjeta -->

                                                                        <!-- Inicio de la tarjeta N° 6-->
                                                                        <div class="card">
                                                                            <img src="img/productos/rio.jpg"
                                                                                class="card-img-top" alt="...">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title">Primer Destino
                                                                                </h4>
                                                                                <p class="card-text">Texto</p>
                                                                            </div>
                                                                            <button type="button"
                                                                                class="btn btn-primary">
                                                                                Notifications <span
                                                                                    class="badge badge-light">4</span>
                                                                            </button>
                                                                        </div>
                                                                        <!-- Fin de la tarjeta -->

                                                                    </div>
                                                                </div>
                                                                {!! $cuotas !!}
                                                                <div class="table-responsive-sm">
                                                                    {{-- <table class="table">
                                                                        @foreach ($cuotas as $cuota)
                                                                        <tr>
                                                                            <td>{{ $cuota[0]}}</td>
                                                                            <td>{{ $cuota[1]}}</td>
                                                                        </tr>
                                                                        @endforeach
                                                                            </table> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                    <button type="button" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (session()->has('message'))
                        <div class="border-t-4  rounded-b px-4 py-3 shadow-md my-3 bg-lime-700" role="alert"
                            style="background-color: lightgreen;">
                            {{-- <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert"> --}}
                            <div class="flex">
                                <div>
                                    <p class="text-xm bg-lightgreen">{{ session('message') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($isModalCreate)
                        @include('livewire.cliente.createcliente')
                    @endif
                    @if ($isModalConsultar)
                        @include('livewire.cliente.consultar')
                    @endif
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="d-none d-lg-inline">
                            <table class="tabla table table-striped table-hover table-condensed" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>Nombre y Apellido</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                        <th>E-mail</th>
                                        <th>DNI</th>
                                        <th>Nacionalidad</th>
                                        <th>Provincia</th>
                                        <th>Localidad</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ $cliente->apellido }}, {{ $cliente->nombre }}</td>
                                            @if ($cliente->direccion)
                                                <td>{{ $cliente->direccion }}</td>
                                            @else
                                                <td>-</td>
                                            @endif
                                            @if ($cliente->telefono)
                                                <td>{{ $cliente->telefono }}</td>
                                            @else
                                                <td>-</td>
                                            @endif
                                            @if ($cliente->email)
                                                <td>{{ $cliente->email }}</td>
                                            @else
                                                <td>-</td>/home/casa-pc/transporte/transporte/public/img/logo
                                            @endif
                                            <td>{{ $cliente->dni }}</td>
                                            <td>{{ $cliente->nacionalidad->nombre }}</td>
                                            <td>{{ $cliente->provincia->nombre }}</td>
                                            <td>{{ $cliente->localidad->nombre }}</td>
                                            <td>
                                                <div class='wrapper text-center'>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalEstadoCuentaPrueba">
                                                            <i class="fa-solid fa-pen-to-square"></i> Estado de cuenta
                                                        </button>
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalEstadoCuenta">
                                                            <i class="fa-solid fa-pen-to-square"></i> Estado de cuenta
                                                        </button>
                                                        <button wire:click="edit({{ $cliente->id }})" type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="fa-solid fa-pen-to-square"></i> Editar
                                                        </button>
                                                        <button wire:click="isModalConsultar({{ $cliente->id }})" class="btn btn-danger">
                                                            <i class="fa-regular fa-circle-xmark"></i> Eliminar
                                                        </button>

                                                        {{-- <a wire:click="edit({{$cliente->id}})" href="#" class="btn btn-warning" data-toggle="tooltip" title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <button class="btn btn-danger" wire:click="isModalConsultar({{$cliente->id}})" title="Eliminar">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </button> --}}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- Para dispositivos de otro tamaño de pantalla --}}
                        {{-- ============================================ --}}
                        <div>
                            <table class="tabla table table-striped table-hover table-condensed" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>Nombre y Apellido</th>
                                        <th>Teléfono</th>
                                        <th>E-mail</th>
                                        <th>DNI</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ $cliente->apellido }}, {{ $cliente->nombre }}</td>
                                            @if ($cliente->telefono)
                                                <td>{{ $cliente->telefono }}</td>
                                            @else
                                                <td>-</td>
                                            @endif
                                            @if ($cliente->email)
                                                <td>{{ $cliente->email }}</td>
                                            @else
                                                <td>-</td>
                                            @endif
                                            <td>{{ $cliente->dni }}</td>
                                            <td>
                                                <div class='wrapper text-center'>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalDetalleCuotas">
                                                            <i class="fa-solid fa-pen-to-square"></i> Estado de cuenta
                                                        </button>
                                                        <button wire:click="edit({{ $cliente->id }})" type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="fa-solid fa-pen-to-square"></i>Editar
                                                        </button>
                                                        <button wire:click="isModalConsultar({{ $cliente->id }})" class="btn btn-danger">
                                                            <i class="fa-regular fa-circle-xmark"></i>Eliminar
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
