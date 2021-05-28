<?php

namespace App\Exports;

use App\gestor_compras;
use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CompraExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'fecha_compra',
			'cliente',
			'producto',
			'cantidad',
			'precio_compra',
	        'total'
        ];
    }


    public function collection()
    {
    	$compras = DB::table('gestor_compras')
    	->join('proveedors', 'gestor_compras.id', '=', 'proveedors.id')
    	->join('productos', 'gestor_compras.id', '=', 'productos.id')
    	->select('fecha_compra','proveedors.nombre_prov', 'productos.nombre_prod',
		'cantidad', 'precio_compra', 'total')->get();

         return $compras;
        
    }
}
