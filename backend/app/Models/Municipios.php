<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    use HasFactory;

     protected $fillable = [
        'nombre'
    ];

	public function departamento(){
       
       return $this->belongsTo('App\Models\Departamentos');
    }

    public function vehiculos(){
       
       return $this->hasMany('App\Models\Vehiculos');
    }
}
