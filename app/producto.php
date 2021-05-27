<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable = [
        'nombre_prod',
		'stock',
		'sucursal',
		'tipo_producto_id',
		'proveedor_id'
    ];

    public function proveedor(){
    	return $this->belongsTo('App\producto');
    }
}
