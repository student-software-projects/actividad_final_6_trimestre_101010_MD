<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\InformeController;



/**********Index o ventana inicial**************/
Route::view('/', 'main.main')->name('main');



/**********************************CRUD VEHICULOS******************************************************/
Route::get('vehiculos', [VehiculoController::class, 'index'])->name('vehicle.index');
Route::get('vehiculos/crear',[VehiculoController::class,'crear'])->name('vehicle.crear');
Route::get('vehiculos/{id}', [VehiculoController::class, 'detalle'])->name('vehicle.detalle');
Route::get('vehiculos/editar/{id}', [VehiculoController::class, 'editar'])->name('vehicle.editar');
Route::put('vehiculos/{id}', [VehiculoController::class, 'actualizar'])->name('vehicle.actualizar');
Route::delete('vehiculos/{id}', [VehiculoController::class, 'eliminar'])->name('vehicle.eliminar');
Route::post('vehiculos', [VehiculoController::class, 'guardar'])->name('vehicle.guardar');

/**************************************************************************************************************/

/*************************CRUD PROPIETARIOS/CONDUCTORES*********************************************************/

Route::get('personas', [PersonaController::class, 'index'])->name('person.index');
Route::get('personas/crear',[PersonaController::class,'crear'])->name('person.crear');
Route::post('personas', [PersonaController::class, 'guardar'])->name('person.guardar');
Route::get('personas/{id}', [PersonaController::class, 'detalle'])->name('person.detalle');

Route::delete('personas/{id}', [PersonaController::class, 'eliminar'])->name('person.eliminar');
Route::get('personas/editar/{id}', [PersonaController::class, 'editar'])->name('person.editar');
Route::put('personas/{id}', [PersonaController::class, 'actualizar'])->name('person.actualizar');
/**************************************************************************************************************/


/*******************************VISTA INFORMES*****************************************************************/
Route::get('informes', [InformeController::class, 'index'])->name('informes');
