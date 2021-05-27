<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
        'nombre',
        'nit',
        'direccion',
        'telefono'
    ];

    public function gestVentas(){
    	return $this->hasMany('App\gestor_ventas');
    }
}
