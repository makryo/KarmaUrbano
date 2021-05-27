<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $fillable = [
        'nombre_prov',
		'nit',
		'direccion',
		'telefono'
    ];

    public function product(){
    	return $this->hasMany('App\producto');
    }
}
