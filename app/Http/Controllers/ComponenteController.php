<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Componente;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class ComponenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $componentes = Componente::all();
        return response()->json($componentes,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try {
            $componente = Componente::findOrFail($id);
        } catch (ModelNotFoundException $th) {
            return response()->json(['error'=> 'No se encuentra el componente'],404);
        }

        if(!isset($request->sistema_embebido_id) && !isset($request->tipo_dato_id) && !isset($request->unidad_id) && !isset($request->nombre))
        {
            return response()->json(['data'=>'no se envio informacion',200]);
        }
        elseif(isset($request->sistema_embebido_id))
        {
            $componente->sistema_embebido_id = $request->sistema_embebido_id;
            $componente->save();
        }
        elseif(isset($request->tipo_dato_id))
        {
            $componente->tipo_dato_id=$request->tipo_dato_id;
            $componente->save();
        }
        elseif(isset($request->unidad_id))
        {
            $componente->unidad_id=$request->unidad_id;
            $componente->save();
        }
        elseif(isset($request->nombre))
        {
            $componente->nombre = $request->nombre;
            $componente->save();
        }
        else
        {
            $componente->sistema_embebido_id = $request->sistema_embebido_id;
            $componente->tipo_dato_id = $request->tipo_dato_id;
            $componente->unidad_id = $request->unidad_id;
            $componente->nombre = $request->nombre;
            $componente->save();

        }
        return response()->json(['data'=>'se ha modificado el registro',200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            $componente = Componente::findOrFail($id);
        } catch (ModelNotFoundException $th) {
            return response()->json(['error'=> 'No se encuentra el componente'],404);
        }

        $componente->delete();
        return response()->json(['data'=> 'Se elimino correctamente','componente'=> $componente],200);
    }
}
