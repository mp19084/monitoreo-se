<?php

namespace App\Http\Controllers;
use App\Componente;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

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
     $componentes=Componente::all();
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
     // dd($request->all());
     if(!isset($request->sistema_embebido_id)){
        return response()->json(['error'=>'No ingreso el id del sistema embebido'],400);
     }
     if(!isset($request->tipo_dato_id)){
        return response()->json(['error'=>'El tipo de dato no debe de estar vacio'],400);

     }
     if(!isset($request->unidad_id)){
         return response()->json(['error'=>'La unidad perteneciente al componente no puede estar vacia'],400);
     }
     if(!isset($request->nombre)){
         return response()->json(['error'=>'El nombre del componente no debe de estar vacio'],400);
     }
     try{
     $componente=Componente::create([
      'sistema_embebido_id'=>$request->sistema_embebido_id,
      'tipo_dato_id'=>$request->tipo_dato_id,
      'unidad_id'=>$request->unidad_id,
      'nombre'=>$request->nombre
     ]);
     }catch(QueryException $t){
        return response()->json(['error'=>'El componente no se pudo almacenar en la base de datos'],400);
     }
     return response()->json($componente,200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
    }
}
