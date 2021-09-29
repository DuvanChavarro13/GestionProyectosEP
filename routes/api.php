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

LES VOY A MANDAR ESTOS ARCHIVOS

Route::apiResource('proyectos', ProyectoController::class);
// LO DE ARRIBA REEMPLAZA TODO LO DE ABAJO DESDE QUE TENGA ESTO NOMBRES
// Route::post('proyectos', [ProyectoController::class, 'store']);
// Route::get('proyectos', [ProyectoController::class, 'index']);
// Route::get('proyectos/{nombre}', [ProyectoController::class, 'show']);
// Route::delete('proyectos/{nombre}', [ProyectoController::class, 'destroy']);

Route::post('empleados', [EmpleadoController::class, 'store']);

Route::post('tareas', [TareaController::class, 'store']);

Route::post('documentos', [DocumentoController::class, 'store']);

