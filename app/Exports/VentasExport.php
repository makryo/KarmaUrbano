<?php

namespace App\Exports;

use App\gestor_ventas;
use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;


class VentasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'fecha_venta',
			'cliente',
			'producto',
			'cantidad',
			'precio_compra',
	        'total'
        ];
    }


    public function collection()
    {
    	$ventas = DB::table('gestor_ventas')
    	->join('clientes', 'gestor_ventas.id', '=', 'clientes.id')
    	->join('productos', 'gestor_ventas.id', '=', 'productos.id')
    	->select('fecha_venta','clientes.nombre', 'productos.nombre_prod',
		'cantidad', 'precio_compra', 'total')->get();

         return $ventas;
        
    }
}
