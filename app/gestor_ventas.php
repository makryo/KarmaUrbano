<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gestor_ventas extends Model
{
    protected $fillable = [
        'fecha_venta',
		'cliente_id',
		'producto_id',
		'cantidad',
		'precio_compra'
    ];

    public function cliente(){
    	return this->belongsTo('App\cliente');
    }
}
