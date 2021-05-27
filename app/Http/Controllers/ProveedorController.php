<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedor;

class ProveedorController extends Controller
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
        return view('proveedor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.create');
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
                'nombre_prov' => 'required|max:100|regex:/^[\pL\s\-]+$/u',
                'nit' => 'required|max:15',
                'direccion' => 'required|max:250',
                'telefono' => 'required|max:15'
            ]
        );

        $nom1 = $request->input('nombre_prov');
        $nit = $request->input('nit');
        $direc = $request->input('direccion');
        $tel = $request->input('telefono');


        proveedor::create([
            'nombre_prov' => $nom1,
            'nit' => $nit,
            'direccion' => $direc,
            'telefono' => $tel

        ]);

        return redirect()->route('admin.proveedor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prov = proveedor::find($id);
        return view('proveedor.show', compact('prov'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Edita = proveedor::findOrFail($id);
        return view('proveedor.edit', compact('Edita'));
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
        $prov = proveedor::find($id);

        $request->validate(
            [
                'nombre_prov' => 'required|max:100|regex:/^[\pL\s\-]+$/u',
                'nit' => 'required|max:15',
                'direccion' => 'required|max:250',
                'telefono' => 'required|max:15'
            ]
        );

        $nom1 = $request->input('nombre_prov');
        $nit = $request->input('nit');
        $direc = $request->input('direccion');
        $tel = $request->input('telefono');


        $prov -> update([
            'nombre_prov' => $nom1,
            'nit' => $nit,
            'direccion' => $direc,
            'telefono' => $tel

        ]);

        return redirect()->route('admin.proveedor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        proveedor::find($id)->delete();
        $prov = proveedor::all();
        return redirect()->route('admin.proveedor.index');
    }
}
