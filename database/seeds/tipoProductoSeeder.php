<?php

use Illuminate\Database\Seeder;
use App\tipo_producto;
class tipoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	tipo_producto::create([
        	'nombre' => 'Pipas'
        ]);

       	tipo_producto::create([
       		'nombre' => 'Vestimenta'
       	]);

       	tipo_producto::create([
       		'nombre' => 'Comestibles'
       	]);

       	tipo_producto::create([
       		'nombre' => 'Papos'
       	]);

       	tipo_producto::create([
       		'nombre' => 'Varios'
       	]);

       	tipo_producto::create([
       		'nombre' => 'Tatoo'
       	]);
    }
}
      