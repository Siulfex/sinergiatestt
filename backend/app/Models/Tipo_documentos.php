<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_documentos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_tipo'
    ];

    public function terceros(){
       
       return $this->hasMany('App\Models\Terceros');
    }
    
}
