<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicio extends Model
{
    use SoftDeletes;
    
   //es la autorización para modificar solo esos campos 
   protected $fillable = ['nombre','costo','mora','horario','imagen','status'];
    //para utilizar binding   Custom Implicit Binding
    public function getRouteKeyName()
    {
    	return 'slug';
    }
    protected $dates = ['deleted_at'];
}
