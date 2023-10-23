<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .miDiv {
            /* width: 100px; */
            background-color: lightblue;
            transition: height 10s;
            height: auto;
        }
    </style>

    <!-- Bootstrap -->
    <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
    <link href="{{ asset('css/fonts.bunny.net.css') }}/" rel="stylesheet">
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" />
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" /> --}}
    
    {{-- https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/webfonts/fa-regular-400.woff2
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/webfonts/fa-solid-900.woff2
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/webfonts/fa-regular-400.ttf
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/webfonts/fa-solid-900.ttf --}}

    <link href="{{ asset('css/svg-with-js.min.css') }}" rel="stylesheet" />
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/svg-with-js.min.css" rel="stylesheet" /> --}}
    

    <!-- Tailwind -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    <title>{{ config('app.name', 'Travel Git') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/fonts.googleapis.com.css') }}">
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <!-- Styles -->

    @livewireStyles

    <!-- Scripts -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    // <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="js/jquery.mask.js"></script>

    <!-- Mapas -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBC4wBNOxS1ylbmlFwPR_ab5Z0X3R6_BYo&callback=Function.prototype"></script>

</head>
{{-- @extends(adminlte::class) --}}
@extends('adminlte::page')
@section('content')

    <div class="bg-gray-100 h-full">

        <!-- Page Content -->
        <main>
            {{-- @yield('content')  Desactivado --}}
        </main>
    </div>
@stop
@stack('modals')

@livewireScripts
</body>
<script>
    var map;
    var markers = []; // Array para almacenar los marcadores adicionales

    // Función para inicializar el mapa
    function initMap() {
        // Coordenadas para centrar el mapa (por ejemplo, Nueva York)
        var myLatLng = {
            lat: 40.7128,
            lng: -74.0060
        };

        // Crea un mapa con las opciones de configuración
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 12 // Nivel de zoom
        });

        // // Crea un marcador en el mapa (no draggable)
        // var mainMarker = new google.maps.Marker({
        //     position: myLatLng,
        //     map: map,
        //     title: 'Marcador Principal',
        //     draggable: false // El marcador no se puede arrastrar
        // });

        // Agrega un evento de clic al mapa para agregar marcadores adicionales
        google.maps.event.addListener(map, 'click', function(event) {
            if (markers.length < 1) { // Limita la cantidad de marcadores adicionales a 5
                addMarker(event.latLng);
            } else {
                alert('Ya se ha agregado 1 marcador.');
            }
        });
    }

    // Función para agregar un marcador adicional
    function addMarker(location) {
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            title: 'Marcador Adicional',
            draggable: true // Los marcadores adicionales son arrastrables
        });

        markers.push(marker); // Agrega el marcador al array de marcadores

        // Agrega un evento de clic al marcador para eliminarlo
        google.maps.event.addListener(marker, 'click', function() {
            removeMarker(marker);
        });
    }

    // Función para eliminar un marcador adicional
    function removeMarker(marker) {
        marker.setMap(null); // Elimina el marcador del mapa
        var index = markers.indexOf(marker);
        if (index !== -1) {
            markers.splice(index, 1); // Elimina el marcador del array de marcadores
        }
    }

    // // Agrega un evento de clic al botón para enviar las posiciones
    // document.getElementById('enviarPosiciones').addEventListener('click', function() {
    //     // Recopila las posiciones de los marcadores y las convierte en un array de objetos LatLng
    //     if (markers.length) {
    //         var positions = markers.map(function(marker) {
    //             return {
    //                 lat: marker.getPosition().lat(),
    //                 lng: marker.getPosition().lng()
    //             };
    //         });

    //         // Convierte el array de posiciones en una cadena JSON
    //         var positionsJSON = JSON.stringify(positions);

    //         // Redirige a otra página y envía los datos como parámetro en la URL
    //         ////window.location.href = 'otra_pagina.php?positions=' + encodeURIComponent(positionsJSON);

    //         $_SESSION['latitud'] = lat;
    //         $_SESSION['longitud'] = lng;


    //     } else {
    //         alert('Debe seleccionar un marcador en el mapa para poder enviar los datos');
    //     }
    //     alert($_SESSION['latitud'] + "," + $_SESSION['longitud']);
    // });

    function agregarMarcador() {
    // Agrega un evento de clic al botón para enviar las posiciones
        // Recopila las posiciones de los marcadores y las convierte en un array de objetos LatLng
        if (markers.length) {
            var positions = markers.map(function(marker) {

                document.getElementById('latitud').value = marker.getPosition().lat();
                document.getElementById('longitud').value = marker.getPosition().lng();
                return {
                    lat: marker.getPosition().lat(),
                    lng: marker.getPosition().lng()
                };
            });

            // Convierte el array de posiciones en una cadena JSON
            var positionsJSON = JSON.stringify(positions);

            // Redirige a otra página y envía los datos como parámetro en la URL
            ////window.location.href = 'otra_pagina.php?positions=' + encodeURIComponent(positionsJSON);

            // $_SESSION['latitud'] = lat;
            // $_SESSION['longitud'] = lng;


        } else {
            alert('Debe seleccionar un marcador en el mapa para poder enviar los datos');
        }
        // alert($_SESSION['latitud'] + "," + $_SESSION['longitud']);
    
    }
    // Llama a la función initMap cuando la página se carga
    // google.maps.event.addEventListener('load', initMap);
    google.maps.event.addDomListener(window, 'load', initMap);

</script>

<script>
    function expandContainer() {
      // Cambiar la altura al 100% al hacer clic en el botón
      const container = document.querySelector('.scrollable-container');
      container.style.height = '100%';
      container.style.transition = 'height 10s';
    }
    function contraerContainer() {
      // Cambiar la altura al 100% al hacer clic en el botón
      const container = document.querySelector('.scrollable-container');
      container.style.height = '93px';
      container.style.transition = 'height 1s';
      console.log('volvio');
    }

    // $(document).ready(function() {
    // var estado = false;

    function abrir() {

    // $('#btn-toggle').on('click', function() {
        $('.seccionToggle').slideToggle();

        if (estado == true) {
            $(this).text("Abrir");
            $('body').css({
                "overflow": "auto"
            });
            estado = false;
            console.log('Abrir');
        } else {
            $(this).text("Cerrar");
            $('body').css({
                "overflow": "hidden"
            });
            estado = true;
            console.log('Cerrar');
        }
    }
    // });
// });

  </script>
</html>
