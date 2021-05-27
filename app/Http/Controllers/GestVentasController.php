<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gestor_ventas;

class GestVentasController extends Controller
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
        return view('gestorVenta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestorVenta.create');
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
                'fecha_venta' => 'required',
                'cliente_id' => 'required',
                'producto_id' => 'required',
                'cantidad' => 'required',
                'precio_compra' => 'required',
                'total' => 'required'
            ]
        );

        $fech = $request->input('fecha_venta');
        $prov = $request->input('cliente_id');
        $prod = $request->input('producto_id');
        $cant = $request->input('cantidad');
        $precio = $request->input('precio_compra');
        $total = $request->input('total');
        


        gestor_ventas::create([
            'fecha_venta' => $fech,
            'cliente_id' => $prov,
            'producto_id' => $prod,
            'cantidad' => $cant,
            'precio_compra' => $precio,
            'total' => $total
        ]);

        return redirect()->route('admin.gestorVentas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gest = gestor_ventas::find($id);
        return view('gestorVenta.show', compact('gest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Edita = gestor_ventas::findOrFail($id);
        return view('gestorVenta.edit', compact('Edita'));
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
        $gestorv = gestor_ventas::find($id);

        $request->validate(
            [
                'fecha_venta' => 'required',
                'cliente_id' => 'required',
                'producto_id' => 'required',
                'cantidad' => 'required',
                'precio_compra' => 'required',
                'total' => 'required'
            ]
        );

        $fech = $request->input('fecha_venta');
        $prov = $request->input('cliente_id');
        $prod = $request->input('producto_id');
        $cant = $request->input('cantidad');
        $precio = $request->input('precio_compra');
        $total = $request->input('total');
        


        $gestorv -> update([
            'fecha_venta' => $fech,
            'cliente_id' => $prov,
            'producto_id' => $prod,
            'cantidad' => $cant,
            'precio_compra' => $precio,
            'total' => $total
        ]);

        return redirect()->route('admin.gestorVentas.index');
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
