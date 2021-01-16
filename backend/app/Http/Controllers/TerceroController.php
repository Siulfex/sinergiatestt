<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamentos;
use App\Models\Municipios;
use App\Models\Marcas;
use App\Models\Tipo_documentos;
use App\Models\Terceros;
use App\Models\Vehiculos;

class TerceroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $vehiculo = Vehiculos::get();
        echo json_encode($vehiculo);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'num_id'        => 'required|max:20',
            'tipo_documento_id'   => 'required|max:5',
            'nombre'   => 'required|max:50',
                 
    
        ]);

        $tercero = new Terceros();
        $tercero->modelo = $request->input('num_id');
        $tercero->placa = $request->input('nombre');
        $tercero->documento()->associate($request->get('tipo_documento_id'));             
        
        $tercero->save();

        echo json_encode($tercero);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function destroy($id)
    {
        $tercero = Terceros::find($id);
        $tercero->delete();
    }

    public function destroyall(){
        Terceros::truncate();
        echo json_encode('Datos Eliminados');
    }
}
