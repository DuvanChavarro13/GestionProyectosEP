<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProyectoController extends Controller
{

    //listar todos los proyectos
    public function index()
    {
        return Proyecto::get();
    }

    //Busqueda
    public function show(Request $request, $nombre)
    {
        return Proyecto::where('nombre_clave','=',$nombre)->get();
    }

    //crea el proyecto
    public function store(Request $request)
    {
        $validacion = Validator::make($request->all(),[
            'nombre_clave'    => 'required|unique:true|string|max:100',
            'denominacion_comercial'  => 'required|string|max:20',
            'fecha_inicio'     => 'required|date',
            'fecha_finalizacion' => 'required|date',
            'estado' => 'required|boolean'
        ]);

        if($validacion->fails()){
            return response(['errors' => $validacion->errors()->all()], 422);
        }

        $proyecto = new Proyecto;

        $proyecto->nombre_clave = $request->nombre_clave;
        $proyecto->denominacion_comercial = $request->denominacion_comercial;
        $proyecto-> fecha_inicio = $request->fecha_inicio;
        $proyecto->fecha_finalizacion = $request->fecha_finalizacion;
        $proyecto->estado = boolval($request->estado);

        // $nombre_repetido = Proyecto::get('nombre_clave');
        // if($nombre_repetido == $request->nombre_clave){
        //     return response(['errors' => $nombre_repetido->errors()], 422);
        // }

        $proyecto->save();

        return response()->json(["result"=>"creado"], 201);
    }

    //eliminar
    public function destroy(Request $request, $nombre)
    {
        $proyectoAEliminar = Proyecto::where('nombre_clave','=',$nombre)->first();
        $proyectoAEliminar->delete();
        return response()->json(["result"=>"eliminado"], 200);
    }

}