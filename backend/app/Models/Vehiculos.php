<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelo', 'placa'
    ];

    public function propietario(){
       
       return $this->belongsTo('App\Models\Terceros');
    }

    public function marca(){
       
       return $this->belongsTo('App\Models\Marcas');
    }

    public function departamento(){
       
       return $this->belongsTo('App\Models\Departamentos');
    }

    public function municipio(){
       
       return $this->belongsTo('App\Models\Municipios');
    }
}
