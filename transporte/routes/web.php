<?php

use App\Http\Livewire\ClienteComponent;
use App\Http\Livewire\Servicios\ServiciosComponent;
use App\Http\Livewire\Alojamientos\AlojamientoComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('livewire.inicio-component');
});

Route::get('clientes',ClienteComponent::class)->name('clientes');
Route::get('servicios',ServiciosComponent::class)->name('servicios');
Route::get('alojamientos',AlojamientoComponent::class)->name('alojamientos');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
