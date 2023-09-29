<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap -->
    <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
