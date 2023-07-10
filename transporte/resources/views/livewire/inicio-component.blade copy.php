<!doctype html>
<html lang="en">

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
        <a class="navbar-brand" href="#">
            <img src="/public/img/logo/logomaxbus.png" alt="" width="30" height="24"
                class="d-inline-block align-text-top">Max Bus</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Productos</a>
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
                    <a class="nav-link disabled">Apagado</a>
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
    <!-- <h3>Inicio Trasporte</h3> -->

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
                <img src="/img/slider/slider1.jpg" class="d-block w-100" style="height: 350px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Nombre de la 1° Imagen</h5>
                    <p>Texto que describe la primer imagen</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/slider/slider2.jpg" class="d-block w-100" style="height: 350px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/slider/slider3.jpg" class="d-block w-100" style="height: 350px" alt="...">
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
    <div class="container">


    </div>
    <br>

    <!-- INICIA CARDS -->

    <div class="row col-12">

        <!-- CARD 1 -->
        <div class="col xs-12 ms-4 md-4 lg-4 xl-3" style="height: 25rem;">
            <div class="card" style="width: 25rem; max-height: 100%">
                <img src="/img/productos/ny.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        cards content.</p>
                    <h3 class="text-center">12 Cuotas de $ 4300</h3>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col xs-12 ms-4 md-4 lg-4 xl-3">
            <div class="card" style="width: 25rem; max-height: 100%;">
                <img src="/img/productos/ny2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        cards content.</p>
                    <h3 class="text-center">12 Cuotas de $ 4300</h3>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col xs-12 ms-4 md-4 lg-4 xl-3" style="height: 25rem">
                <div class="card" style="width: 25rem; max-height: 100%">
                    <img src="/img/productos/mexico.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the cards content.</p>
                        <h3 class="text-center">12 Cuotas de $ 4300</h3>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="col xs-12 ms-4 md-4 lg-4 xl-3" style="height: 25rem;">
                <div class="card" style="width: 25rem; max-height: 100%;">
                    <img src="/img/productos/rio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the cards content.</p>
                        <h3 class="text-center">12 Cuotas de $ 4300</h3>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>



        </div>

        <!-- INICIA CARDS -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>

</body>

<!-- CREO QUE ACA VA Footer -->




<!-- FIN DEL Footer -->


</body>

</html>

</html>
