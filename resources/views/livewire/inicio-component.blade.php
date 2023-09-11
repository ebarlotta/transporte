<!doctype html>
    <lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio Trasporte</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>

<!-- INICIA NAVBAR -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid bg-warning">
        <a class="navbar-brand text-center justify-center" href="#">
            <img src="img/logo/logomaxbus.png" alt="" width="80" height="65" class="d-inline-block align-text-bottom ml-3 pl-5">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Paquetes</a></li>
                        <li><a class="dropdown-item" href="#">Escapadas</a></li>
                        <li><a class="dropdown-item" href="#">Pasajes</a></li>
                        <li><a class="dropdown-item" href="#">Encomiendas</a></li>

                        <li><a class="dropdown-item" href="#">Alquileres</a></li>
                        <li><a class="dropdown-item" href="#">Algo Mas</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    </ul>
                </li>

                <a class="nav-link" href="#">Amigos</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Nosotros</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Staff</a></li>
                        <li><a class="dropdown-item" href="#">Contactenos</a></li>
                        <li><a class="dropdown-item" href="#">Ubicacion</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Algo Mas</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clientes">Clientes ;-)</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscador" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

<!-- FINALIZA NAVBAR -->

<body>

    <!-- CARRUCEL INICIO -->

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider/slider1.jpg" class="d-block w-100" style="height: 350px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Nombre de la 1° Imagen</h5>
                    <p>Texto que describe la primer imagen</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slider/slider2.jpg" class="d-block w-100" style="height: 350px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slider/slider3.jpg" class="d-block w-100" style="height: 350px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- CARRUCEL FIN -->

    <br>

    <!-- INICIA CARDS -->

    <style>
        img {
            .max-width: 100%;
        }
    .card {
        border-radius: 15px;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }

    .card-boby {
        border-radius: 15px;
        padding: 25%;
        margin-top: -5px;
    }
    .card:hover {
        transform: scale(1.05);
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }
    </style>

    <div class="container-fluid">



            <div class="d-flex justify-content-center row row-cols-xs-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6">


                <!-- CARD 1 -->

                    <div class="card p-2 m-3 shadow">
                        <img src="img/productos/ny.png" class="card-img-top h-100 w-100 rounded-md" stalt="...">
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                cards content.</p>
                            <h5 class="text-center">12 Cuotas de $ 4300</h5>
                            <div class="text-right">
                                <a href="#" class="btn btn-primary justify-content-right">Comprar</a>
                            </div>
                        </div>
                    </div>

                <!-- CARD 2 -->

                    <div class="card p-2 m-3 shadow">
                        <img src="img/productos/ny2.png" class="card-img-top h-100 w-100 rounded-md" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                cards content.</p>
                            <h5 class="text-center">12 Cuotas de $ 4300</h5>
                            <a href="#" class="btn btn-primary justify-content-right">Comprar</a>
                        </div>
                    </div>

                <!-- CARD 3 -->

                    <div class="card p-2 m-3 shadow">
                        <img src="img/productos/mexico.jpg" class="card-img-top h-100 w-100 rounded-md" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                    the cards content.</p>
                            <h5 class="text-center">12 Cuotas de $ 4300</h5>
                            <a href="#" class="btn btn-primary justify-content-right">Comprar</a>
                        </div>
                    </div>

                <!-- CARD 4 -->

                    <div class="card p-2 m-3 shadow">
                        <img src="img/productos/rio.jpg" class="card-img-top h-100 w-100 rounded-md" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                    the cards content.</p>
                            <h5 class="text-center">12 Cuotas de $ 4300</h5>
                            <a href="#" class="btn btn-primary justify-content-right">Comprar</a>
                        </div>
                    </div>

                <!-- CARD 5 -->

                    <div class="card p-2 m-3 shadow">
                        <img src="img/productos/rio.jpg" class="card-img-top h-100 w-100 rounded-md" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the cards content.</p>
                            <h5 class="text-center">12 Cuotas de $ 4300</h5>
                            <a href="#" class="btn btn-primary justify-content-right">Comprar</a>
                        </div>
                    </div>

                <!-- CARD 6 -->

                    <div class="card p-2 m-3 shadow">
                        <img src="img/productos/rio.jpg" class="card-img-top h-100 w-100 rounded-md" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the cards content.</p>
                            <h5 class="text-center">12 Cuotas de $ 4300</h5>
                                <a href="#" class="btn btn-primary justify-content-right">Comprar</a>
                        </div>
                    </div>

                <!-- CARD 7 -->

                    <div class="card p-2 m-3 shadow">
                        <img src="img/productos/rio.jpg" class="card-img-top h-100 w-100 rounded-md" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the cards content.</p>
                            <h5 class="text-center">12 Cuotas de $ 4300</h5>
                            <a href="#" class="btn btn-primary justify-content-right">Comprar</a>
                        </div>
                    </div>

                <!-- CARD 8 -->

                    <div class="card p-2 m-3 shadow">
                        <img src="img/productos/rio.jpg" class="card-img-top h-100 w-100 rounded-md" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Card title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the cards content.</p>
                            <h5 class="text-center">12 Cuotas de $ 4300</h5>
                            <a href="#" class="btn btn-primary justify-content-right">Comprar</a>
                        </div>
                    </div>
            </div>

    </div>

    <!-- FIN DE CARDS -->



    <!-- INICIA FOOTER -->




    <!-- INICIA FOOTER -->




            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
            </script>

    </body>



</html>
