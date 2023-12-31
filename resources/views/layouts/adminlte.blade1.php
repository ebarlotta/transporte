<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/svg-with-js.min.css" rel="stylesheet" />

{{-- <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOApHGNbLGntMdhoCPR5XstY2ggi73N_Q&callback=initMap&libraries=&v=weekly" defer></script> --}}
    {{-- <link rel="stylesheet" href="./style.css"/> --}}
    {{-- <script src="./app.js"></script> --}}
<script>
    "use strict";
function initMap() {
//   const myLatLng = {
//     lat: -32.889259338378906,
//     lng: -68.84587097167969
//   };
//   const myLatLng1 = {
//     lat: -32.8880613,
//     lng: -68.8572878
//   };
//   const map = new google.maps.Map(document.getElementById("gmp-map"), {
//     zoom: 14,
//     center: myLatLng,
//     fullscreenControl: false,
//     zoomControl: true,
//     streetViewControl: false
//   });
//   new google.maps.Marker({
//     position: myLatLng,
//     map,
//     title: "My location",
//     width:5,
//     opacity:0.5,
//     size:0.2
//   });
}
</script>




    <!-- Tailwind -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="js/jquery.mask.js"></script>

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

</html>
