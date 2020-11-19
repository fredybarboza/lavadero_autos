<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perfilController;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\notificacionesController;
use App\Http\Controllers\seguirLavadoController;
use App\Http\Controllers\historialController;
use App\Http\Controllers\ayudaController;

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

Route::get('/', [inicioController::class,'inicio']);
Route::get('ayuda',[ayudaController::class,'ayuda']);
//Perfil del usuario
Route::get('perfil',[perfilController::class,'perfil']);
Route::get('perfil/notificaciones',[notificacionesController::class,'notificaciones']);
Route::get('perfil/seguirlavado',[seguirLavadoController::class,'seguirLavado']);
Route::get('perfil/historial',[historialController::class,'historial']);
