<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\proveedor;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('producto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate(
            [
                'nombre_prod' => 'required|max:100|regex:/^[\pL\s\-]+$/u',
                'stock' => 'required|max:15',
                'sucursal' => 'required|max:250',
                'tipo_producto_id' => 'required',
                'proveedor_id' => 'required'
            ]
        );

        $nom1 = $request->input('nombre_prod');
        $stock = $request->input('stock');
        $sucur = $request->input('sucursal');
        $tipo = $request->input('tipo_producto_id');
        $prov = $request->input('proveedor_id');


        producto::create([
            'nombre_prod' => $nom1,
            'stock' => $stock,
            'sucursal' => $sucur,
            'tipo_producto_id' => $tipo,
            'proveedor_id' => $prov

        ]);

        return redirect()->route('admin.producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = producto::find($id);
        $prov = proveedor::find($id);
        return view('producto.show', ['producto' =>$prod, 'proveedor'=>$prov], compact('prod', 'prov'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
