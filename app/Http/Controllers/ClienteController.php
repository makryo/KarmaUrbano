<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\cliente;

class ClienteController extends Controller
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
        return view('cliente.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
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
                'nombre' => 'required|max:100|regex:/^[\pL\s\-]+$/u',
                'nit' => 'required|max:15',
                'direccion' => 'required|max:250',
                'telefono' => 'required|max:15'
            ]
        );

        $nom1 = $request->input('nombre');
        $nit = $request->input('nit');
        $direc = $request->input('direccion');
        $tel = $request->input('telefono');


        cliente::create([
            'nombre' => $nom1,
            'nit' => $nit,
            'direccion' => $direc,
            'telefono' => $tel

        ]);

        return redirect()->route('admin.cliente.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = cliente::find($id);
        return view('Cliente.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Edita = cliente::findOrFail($id);
        return view('Cliente.edit', compact('Edita'));
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
        $client = cliente::find($id);

        $request->validate(
            [
                'nombre' => 'required|max:100|regex:/^[\pL\s\-]+$/u',
                'nit' => 'required|max:15',
                'direccion' => 'required|max:250',
                'telefono' => 'required|max:15'
            ]
        );

        $nom1 = $request->input('nombre');
        $nit = $request->input('nit');
        $direc = $request->input('direccion');
        $tel = $request->input('telefono');


        $client -> update([
            'nombre' => $nom1,
            'nit' => $nit,
            'direccion' => $direc,
            'telefono' => $tel

        ]);

        return redirect()->route('admin.cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cliente::find($id)->delete();
        $client = cliente::all();
        return redirect()->route('admin.cliente.index');
    }
}
