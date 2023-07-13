<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ColaboradoresController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\ClientesController;

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

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function() {
        return view('pages/utility/404');
    });    


    Route::get('/colaboradores', [ColaboradoresController::class, 'index'])->name('colaboradores.index');
    Route::post('/colaboradores/agregar/', [ColaboradoresController::class, 'store']);
    Route::get('/colaboradores/agregar/', [ColaboradoresController::class, 'create'])->name('colaboradores.create');
    Route::get('/colaboradores/eliminar/{id_colaborador}', [ColaboradoresController::class, 'delete'])->name('colaboradores.eliminar');

    Route::get('/proyectos', [ProyectosController::class, 'index'])->name('proyectos.index');
    Route::post('/proyectos/agregar/', [ProyectosController::class, 'store']);
    Route::get('/proyectos/agregar/', [ProyectosController::class, 'create'])->name('proyectos.create');
    Route::get('/proyectos/eliminar/{id_proyecto}', [ProyectosController::class, 'delete'])->name('proyectos.eliminar');

    Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
    Route::post('/clientes/agregar/', [ClientesController::class, 'store']);
    Route::get('/clientes/agregar/', [ClientesController::class, 'create'])->name('clientes.create');
    Route::get('/clientes/eliminar/{id_cliente}', [ClientesController::class, 'delete'])->name('clientes.eliminar');


});