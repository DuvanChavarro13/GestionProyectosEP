<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

<<<<<<< HEAD
// RUTAS DE PROYECTOS
Route::apiResource('proyectos', ProyectoController::class);
// LO DE ARRIBA REEMPLAZA TODO LO DE ABAJO DESDE QUE TENGA ESTO NOMBRES
// Route::post('proyectos', [ProyectoController::class, 'create']);
=======


Route::apiResource('proyectos', ProyectoController::class);
// Route::post('proyectos', [ProyectoController::class, 'store']);
>>>>>>> 2058ef30a4de611aa464ae7d479f4cb990f95c95
// Route::get('proyectos', [ProyectoController::class, 'index']);
// Route::get('proyectos/{nombre}', [ProyectoController::class, 'show']);
// Route::delete('proyectos/{nombre}', [ProyectoController::class, 'destroy']);

<<<<<<< HEAD
=======
Route::apiResource('empleados', EmpleadoController::class);
//Route::post('empleados', [EmpleadoController::class, 'store']);
//Route::get('empleados', [EmpleadoController::class, 'index']);
//Route::get('empleados/{iden}', [EmpleadoController::class, 'show']);
//Route::delete('empleados/{iden}', [EmpleadoController::class, 'destroy']);

>>>>>>> 2058ef30a4de611aa464ae7d479f4cb990f95c95

// RUTAS DE EMPLEADOS
Route::apiResource('empleados', EmpleadoController::class);
//Route::post('empleados', [EmpleadoController::class, 'store']);


// RUTAS DE LAS TAREAS
Route::apiResource('tareas', TareaController::class);
// Route::post('tareas', [TareaController::class, 'store']);
// Route::get('tareas', [TareaController::class, 'index']);
// Route::get('tareas/{nombre}', [TareaController::class, 'show']);
// Route::delete('tareas/{nombre}', [TareaController::class, 'destroy']);


<<<<<<< HEAD
// RUTAS DE LOS DOCUMENTOS
Route::post('documentos', [DocumentoController::class, 'store']);
=======
>>>>>>> 2058ef30a4de611aa464ae7d479f4cb990f95c95

Route::apiResource('documentos', DocumentoController::class);
//Route::post('documentos', [DocumentoController::class, 'store']);
//Route::get('documentos', [DocumentoController::class, 'index']);
//Route::get('documentos/{cod}', [DocumentoController::class, 'show']);
//Route::delete('documentos/{cod}', [DocumentoController::class, 'destroy']);