<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
	protected $fillable = [
        'nombre'
    ];

    use HasFactory;
    
    public function vehiculos(){
       
       return $this->hasMany('App\Models\Vehiculos');
    }
}
