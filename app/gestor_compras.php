<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gestor_compras extends Model
{
    protected $fillable = [
        'fecha_compra',
		'proveedor_id',
		'producto_id',
		'cantidad',
		'precio_compra'
    ];
}
