<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamentos;
use App\Models\Municipios;
use App\Models\Marcas;
use App\Models\Tipo_documentos;
use App\Models\Terceros;
use App\Models\Vehiculos;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $vehiculos = Vehiculos::get();
     echo json_encode($vehiculos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamentos::get();
        $municipios = Municipios::get();
        $municipios_dep=[];

        foreach($departamentos as $departamento) {
            
            $municipios_dep = Municipios::Where('departamento_id', $departamento->id)->first();
            
        $marcas = Marcas::get();
        $data = [$marcas, $municipios_dep];
        
        echo json_encode($data);
             
        }
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
            'modelo'        => 'required|max:20',
            'marca_id'   => 'required|max:20',
            'placa'   => 'required|max:20',
            'departamento_id'   => 'required|max:5',
            'municipio_id'   => 'required|max:5',
            'propietario_id'   => 'required|max:5',      
    
        ]);

        $vehiculo = new Vehiculos();
        $vehiculo->modelo = $request->input('modelo');
        $vehiculo->placa = $request->input('placa');
        $vehiculo->propietario()->associate($request->get('propietario_id'));             
        $vehiculo->departamento()->associate($request->get('departamento_id'));
        $vehiculo->municipio()->associate($request->get('municipio_id'));
        $vehiculo->marca()->associate($request->get('marca_id'));
        $vehiculo->save();

        echo json_encode($vehiculo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = Vehiculos::find($id);;
        echo json_encode($vehiculo); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
      $request->validate([
            'modelo'        => 'required|max:20',
            'marca_id'   => 'required|max:20',
            'placa'   => 'required|max:20',
            'departamento_id'   => 'required|max:5',
            'municipio_id'   => 'required|max:5',
            'propietario_id'   => 'required|max:5',      
    
        ]);

        $vehiculo = Vehiculos::find($id);
        $vehiculo->modelo = $request->input('modelo');
        $vehiculo->placa = $request->input('placa');
        $vehiculo->propietario()->associate($request->get('propietario_id'));             
        $vehiculo->departamento()->associate($request->get('departamento_id'));
        $vehiculo->municipio()->associate($request->get('municipio_id'));
        $vehiculo->marca()->associate($request->get('marca_id'));
        $vehiculo->save();

        echo json_encode($vehiculo);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculos::find($id);
        $vehiculo->delete();
    }

    public function destroyall(){
        Vehiculos::truncate();
        echo json_encode('Datos Eliminados');
    }
}
