<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function municipios(){
       
       return $this->hasMany('App\Models\Municipios');
    }

    public function vehiculos(){
       
       return $this->hasMany('App\Models\Vehiculos');
    }



}
