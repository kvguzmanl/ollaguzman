<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\SucursalController;
use App\Models\Area;

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
    return view('welcome');
});

//Controlador de recurso para area
Route::get('/area', [AreaController::class, "index"]);

//Controlador de recurso para sucursal
Route::get('/sucursal', [SucursalController::class, "index"]);

Auth::routes();

//Controladores de vistas con arreglos asociativos
Route::get('/sucursal/index', [SucursalController::class, "data"]);
Route::get('/empleado/index', [EmpleadoController::class, "data"]);
Route::get('/area/index', [AreaController::class, "data"]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
