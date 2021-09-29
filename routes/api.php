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



Route::apiResource('proyectos', ProyectoController::class);
// Route::post('proyectos', [ProyectoController::class, 'store']);
// Route::get('proyectos', [ProyectoController::class, 'index']);
// Route::get('proyectos/{nombre}', [ProyectoController::class, 'show']);
// Route::delete('proyectos/{nombre}', [ProyectoController::class, 'destroy']);

Route::apiResource('empleados', EmpleadoController::class);
//Route::post('empleados', [EmpleadoController::class, 'store']);
//Route::get('empleados', [EmpleadoController::class, 'index']);
//Route::get('empleados/{iden}', [EmpleadoController::class, 'show']);
//Route::delete('empleados/{iden}', [EmpleadoController::class, 'destroy']);


Route::post('tareas', [TareaController::class, 'store']);


Route::apiResource('documentos', DocumentoController::class);
//Route::post('documentos', [DocumentoController::class, 'store']);
//Route::get('documentos', [DocumentoController::class, 'index']);
//Route::get('documentos/{cod}', [DocumentoController::class, 'show']);
//Route::delete('documentos/{cod}', [DocumentoController::class, 'destroy']);