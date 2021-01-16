<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terceros extends Model
{
    use HasFactory;

     protected $fillable = [
        'num_id', 'nombre'
    ];

	public function documento(){
       
       return $this->belongsTo('App\Models\Tipo_documentos');
    }

    public function vehiculos(){
       
       return $this->hasMany('App\Models\Vehiculos');
    }
}
