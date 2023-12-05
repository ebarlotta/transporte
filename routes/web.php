<?php

use App\Http\Livewire\ClienteComponent;
use App\Http\Livewire\Alojamientos\AlojamientoComponent;
use App\Http\Livewire\Comida\ComidaComponent;
use App\Http\Livewire\Destinos\DestinoComponent;
use App\Http\Livewire\Encomienda\EncomiendaComponent;
use App\Http\Livewire\Localidades\LocalidadComponent;
use App\Http\Livewire\Nacionalidades\NacionalidadComponent;
use App\Http\Livewire\Paquetes\PaqueteComponent;
use App\Http\Livewire\Provincias\ProvinciaComponent;
use App\Http\Livewire\Restricciones\RestriccionComponent;
use App\Http\Livewire\Servicios\ServicioComponent;
use App\Http\Livewire\Transportes\TransporteComponent;
use App\Http\Livewire\Ventas\VentasComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\InicioComponent;
use App\Http\Livewire\Seguimiento\SegumientoComponent;
use App\Http\Livewire\Sucursal\SucursalComponent;
use App\Http\Livewire\Tarifa\TarifaComponent;
use App\Http\Livewire\Paqueteria\PaqueteriaComponent;

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

Route::get('inicio',InicioComponent::class)->name('inicio');

Route::group(['middleware' => 'admin'], function () {
Route::get('alojamientos',AlojamientoComponent::class)->name('alojamientos');
Route::get('comidas',ComidaComponent::class)->name('comidas');
Route::get('clientes',ClienteComponent::class)->name('clientes');
Route::get('destinos',DestinoComponent::class)->name('destinos');
Route::get('localidades',LocalidadComponent::class)->name('localidades');
Route::get('nacionalidades',NacionalidadComponent::class)->name('nacionalidades');
Route::get('provincias',ProvinciaComponent::class)->name('provincias');
Route::get('restricciones',RestriccionComponent::class)->name('restricciones');
Route::get('servicios',ServicioComponent::class)->name('servicios');
Route::get('transportes',TransporteComponent::class)->name('transportes');
Route::get('paquetes',PaqueteComponent::class)->name('paquetes');
Route::get('ventas',VentasComponent::class)->name('ventas');
Route::get('sucursales',SucursalComponent::class)->name('sucursales');
Route::get('seguimiento',SegumientoComponent::class)->name('seguimiento');
Route::get('tarifas',TarifaComponent::class)->name('tarifas');
// Route::get('menu-paqueteria',EncomiendaComponent::class)->name('menu-paqueteria');
Route::get('encomiendas',EncomiendaComponent::class)->name('encomiendas');
Route::get('paqueteria',PaqueteriaComponent::class)->name('paqueteria');

Route::get('pdf/deuda', [VentasComponent::class, 'GenerarListadoVentasPDF']);
Route::get('pdf/csv', [VentasComponent::class, 'GenerarCSV']);

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
