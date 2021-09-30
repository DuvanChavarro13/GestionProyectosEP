<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TareaController extends Controller
{
    // Listar tareas
    public function index(){
        return Tarea::get();
    }

    // Buscar tareas porsu tipo
    public function show(Request $request, $nombre)
    {
        return Tarea::where('nombre','=',$nombre)->get();
    }

    //Crear tarea
    public function store(Request $request)
    {
        $validacion = Validator::make($request->all(),[
            'nombre' => 'required|string|min:1',
            'descripcion' => 'required|string|min:5|max:200',
            'tipo' => 'required|string|min:1',
            'fecha_ini_estimada' => 'required|date',
            'fecha_ini_real' => 'required|date',
            'duracion_estimada' => 'required|int',
            'duracion_real' => 'required|int'
        ]);

        if($validacion->fails()){
            return response(['errors' => $validacion->errors()->all()], 422);
        }

        $tarea = new Tarea;

        $tarea->nombre = $request->nombre;
        $tarea->descripcion = $request->descripcion;
        $tarea->tipo = $request->tipo;
        $tarea->fecha_ini_estimada = $request->fecha_ini_estimada;
        $tarea->fecha_ini_real = $request->fecha_ini_real;
        $tarea->duracion_estimada = $request->duracion_estimada;
        $tarea->duracion_real = $request->duracion_real;


        $tarea->save();

        return response()->json(["result"=>"creado"], 201);
    }

    //Eliminar tarea
    public function destroy(Request $request, $nombre){
        $tareaAEliminar = Tarea::where('nombre','=',$nombre);
        $tareaAEliminar->delete();
        return response()->json(["result"=>"eliminado"], 200);
    }

    //Editar tarea
    public function update(Request $request, $id){
        
        $validacion = Validator::make($request->all(),[
            'nombre' => 'string|min:1',
            'descripcion' => 'string|min:5|max:200',
            'tipo' => 'string|min:1',
            'fecha_ini_estimada' => 'date',
            'fecha_ini_real' => 'date',
            'duracion_estimada' => 'int',
            'duracion_real' => 'int'
        ]);

        if($validacion->fails()){
            return response(['errors' => $validacion->errors()->all()], 422);
        }

        $actualizar = [];
        Tarea::get('nombre') = $request['nombre'];
        $tarea->nombre['nombre'] = $request['nombre'];
        $tarea->descripcion['descripcion'] = $request['descripcion'];
        $tarea->tipo['tipo'] = $request['tipo'];
        $tarea->fecha_ini_estimada['fecha_ini_estimada'] = $request['fecha_ini_estimada'];
        $tarea->nombre['nombre'] = $request['nombre'];

        return Tarea::where('nombre','=',$nombre)->update()->all();
    }
}
