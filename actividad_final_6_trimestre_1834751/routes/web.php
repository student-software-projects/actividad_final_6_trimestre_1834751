<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

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


/*Vista principal*/
Route::view('/', 'home.home')->name('home');


/*Vista crud Conductores/Propietarios*/
Route::get('personas', [PersonaController::class, 'index'])->name('persona.index');
Route::get('personas/crear',[PersonaController::class,'crear'])->name('persona.crear');
Route::post('personas', [PersonaController::class, 'guardar'])->name('persona.guardar');
Route::get('personas/{id}', [PersonaController::class, 'detalle'])->name('persona.detalle');

Route::delete('personas/{id}', [PersonaController::class, 'eliminar'])->name('persona.eliminar');
Route::get('personas/editar/{id}', [PersonaController::class, 'editar'])->name('persona.editar');
Route::put('personas/{id}', [PersonaController::class, 'actualizar'])->name('persona.actualizar');
