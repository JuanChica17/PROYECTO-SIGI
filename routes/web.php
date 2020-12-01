<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\InmuebleController;
use App\Http\Controllers\InquilinoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\VentaController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('sigi');
});

Route::get('/alquileres', [AlquilerController::class, 'index'])->name('alquileres.index');

Route::get('/contratos', [ContratoController::class, 'index'])->name('contratos.index');

Route::get('/facturaciones', [FacturacionController::class, 'index'])->name('facturaciones.index');

Route::get('/inmuebles', [InmuebleController::class, 'index'])->name('inmuebles.index');

Route::get('/inquilinos', [InquilinoController::class, 'index'])->name('inquilinos.index');

Route::get('/pagos', [PagoController::class, 'index'])->name('pagos.index');

Route::get('/propietarios', [PropietarioController::class, 'index'])->name('propietarios.index');

Route::get('/ventas', [VentaController::class, 'index'])->name('ventas.index');


