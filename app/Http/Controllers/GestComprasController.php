<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gestor_compras;

class GestComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('gestorcompra.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestorcompra.create');
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
                'fecha_compra' => 'required',
                'proveedor_id' => 'required',
                'producto_id' => 'required',
                'cantidad' => 'required',
                'precio_compra' => 'required',
                'total' => 'required'
            ]
        );

        $fech = $request->input('fecha_compra');
        $prov = $request->input('proveedor_id');
        $prod = $request->input('producto_id');
        $cant = $request->input('cantidad');
        $precio = $request->input('precio_compra');
        $total = $request->input('total');
        


        gestor_compras::create([
            'fecha_compra' => $fech,
            'proveedor_id' => $prov,
            'producto_id' => $prod,
            'cantidad' => $cant,
            'precio_compra' => $precio,
            'total' => $total
        ]);

        return redirect()->route('admin.gestorCompras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gest = gestor_compras::find($id);
        return view('gestorcompra.show', compact('gest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Edita = gestor_compras::findOrFail($id);
        return view('gestorcompra.edit', compact('Edita'));
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
        $gestorc = gestor_compras::find($id);

        $request->validate(
            [
                'fecha_compra' => 'required',
                'proveedor_id' => 'required',
                'producto_id' => 'required',
                'cantidad' => 'required',
                'precio_compra' => 'required',
                'total' => 'required'
            ]
        );

        $fech = $request->input('fecha_compra');
        $prov = $request->input('proveedor_id');
        $prod = $request->input('producto_id');
        $cant = $request->input('cantidad');
        $precio = $request->input('precio_compra');
        $total = $request->input('total');
        


        $gestorc -> update([
            'fecha_compra' => $fech,
            'proveedor_id' => $prov,
            'producto_id' => $prod,
            'cantidad' => $cant,
            'precio_compra' => $precio,
            'total' => $total
        ]);

        return redirect()->route('admin.gestorCompras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
