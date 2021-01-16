<?php

namespace Database\Seeders;
use App\Models\Departamentos;
use App\Models\Municipios;
use App\Models\Marcas;
use App\Models\Tipo_documentos;
use App\Models\Terceros;
use App\Models\Vehiculos;
use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    	DB::statement("SET foreign_key_checks=0");
    	Departamentos::truncate();
    	Municipios::truncate();
    	
    	Marcas::truncate();
    	Tipo_documentos::truncate();
    	DB::statement("SET foreign_key_checks=1");


//seed departamentos
		$departamento1 = Departamentos::create([
			'nombre' => 'Huila',
			
		]); 

		$departamento2 = Departamentos::create([
			'nombre' => 'Cundinamarca',
			
		]); 

		$departamento3 = Departamentos::create([
			'nombre' => 'Tolima',
			
		]); 
		$departamento4 = Departamentos::create([
			'nombre' => 'Amazonas',
			
		]); 
		
//Seed Municipios

        $municipio1 = Municipios::create([
			'nombre' => 'Neiva',
        	'departamento_id' => $departamento1->id 
        ]);

        $municipio = Municipios::create([
			'nombre' => 'Palermo',
        	'departamento_id' => $departamento1->id 
        ]);

        $municipio = Municipios::create([
			'nombre' => 'Rivera',
        	'departamento_id' => $departamento1->id 
        ]);

        $municipio = Municipios::create([
			'nombre' => 'Soacha',
        	'departamento_id' => $departamento2->id 
        ]);
        
        $municipio = Municipios::create([
			'nombre' => 'Bogota',
        	'departamento_id' => $departamento2->id 
        ]);

        $municipio = Municipios::create([
			'nombre' => 'Zipaquira',
        	'departamento_id' => $departamento2->id 
        ]);

        $municipio = Municipios::create([
			'nombre' => 'Ibague',
        	'departamento_id' => $departamento3->id 
        ]);

        $municipio = Municipios::create([
			'nombre' => 'Chaparral',
        	'departamento_id' => $departamento3->id 
        ]);

        $municipio = Municipios::create([
			'nombre' => 'Melgar',
        	'departamento_id' => $departamento3->id 
        ]);


//Seed Tipos de documentos
        $documento1 = Tipo_documentos::create([
        	'nombre_tipo' => 'cedula',
        ]);

        $documento = Tipo_documentos::create([
        	'nombre_tipo' => 'Pasaporte',
        ]);

        $documento = Tipo_documentos::create([
        	'nombre_tipo' => 'Tarjeta de identidad',
        ]);

        $documento = Tipo_documentos::create([
        	'nombre_tipo' => 'Registro civil',
        ]);

 //Seed Marcas de vehiculos

        $marca = Marcas::create([
        	'nombre' => 'Renault',
        ]);

         $marca1 = Marcas::create([
        	'nombre' => 'Chevrolet',
        ]);

          $marca = Marcas::create([
        	'nombre' => 'BMW',
        ]);

           $marca = Marcas::create([
        	'nombre' => 'Mercedez-Benz',
        ]);

            $marca = Marcas::create([
        	'nombre' => 'Ferrari',
        ]);

             $marca = Marcas::create([
        	'nombre' => 'Ford',
        ]);

//seed terceros
            $tercero1 = Terceros::create([
        	'num_id' => '108123123',
        	'nombre' => 'Luis Salgado',
        	'tipo_documento_id' => $documento1->id
        ]); 

         $tercero2 = Terceros::create([
        	'num_id' => '103124255',
        	'nombre' => 'Sergio Perdomo',
        	'tipo_documento_id' => $documento1->id
        ]);   

//seed Vehiculos

          $vehiculo = Vehiculos::create([
        	'modelo' => '2014',
        	'placa' => 'xyz123',
        	'marca_id' => $marca1->id,
        	'departamento_id' => $departamento1->id,
        	'municipio_id' => $municipio1->id,
        	'propietario_id' => $tercero1->id,
        ]); 

          $vehiculo = Vehiculos::create([
        	'modelo' => '2016',
        	'placa' => 'rtz432',
        	'marca_id' => $marca1->id,
        	'departamento_id' => $departamento1->id,
        	'municipio_id' => $municipio1->id,
        	'propietario_id' => $tercero2->id,
        ]); 


    }
}
