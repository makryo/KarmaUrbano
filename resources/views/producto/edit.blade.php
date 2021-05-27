<?php
use App\tipo_producto;
use App\proveedor;

$tipo = tipo_producto::all();
$prov = proveedor::all();

?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Actualizar datos</h1>
                    <div class="container">
                    
                        <form method="post" action="{{ route('admin.producto.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="nombre_prod" value="{{ $Edita->nombre_prod }}" class="form-control">
                                        <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Ingrese su nombre, no se permite dejar en blanco ni tampoco escribir caracteres incorrectos">?</a>
                                    </div>

                                        @error('nombre_prod')
                                            <small class="text-warning">No se puede dejar en blanco o los datos son erroneos.</small>
                                        @enderror
                                    <br>
                                    <br>

                                    <div class="input-group mb-3">
                                        <input type="number" name="stock" value="{{ $Edita->stock }}" class="form-control">
                                        <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Ingrese su numero de nit, solo se permite numeros.">?</a>
                                    </div>

                                        @error('stock')
                                            <small class="text-warning">No se puede dejar en blanco o los datos son erroneos.</small>
                                        @enderror
                                    <br>
                                    <br>

                                    <div class="input-group mb-3">
                                        <input type="text" name="sucursal" value="{{ $Edita->sucursal }}" class="form-control">
                                        <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Ingrese su numero de nit, solo se permite numeros.">?</a>
                                    </div>

                                        @error('sucursal')
                                            <small class="text-warning">No se puede dejar en blanco o los datos son erroneos.</small>
                                        @enderror
                                    <br>
                                    <br>
                                </div>

                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <select name="tipo_producto_id" class="input-group mb-3 form-control">
                                            @foreach($tipo as $Lista)
                                                <option value="{{ $Lista->id }}">
                                                    {{ $Lista->nombre }}
                                                </option>
                                            @endforeach

                                        </select>
                                        <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Seleccione el tipo de producto, no se permite dejar en blanco">?</a>
                                        <br>
                                    </div>

                                    <div class="input-group mb-3">
                                        <select name="proveedor_id" class="input-group mb-3 form-control">
                                            @foreach($prov as $Lista)
                                                <option value="{{ $Lista->id }}">
                                                    {{ $Lista->nombre_prov }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Seleccione el nombre del proveedor, no se permite dejar en blanco">?</a>
                                        </div>
                                    <br>
                                    
                                </div>
                            </div>
                            <input type="submit" value="Guardar" class="btn btn-success">
                            <a href="{{route('admin.inicio')}}" type="button" class="btn btn-secondary">Inicio</a>
                            <a href="{{ route('admin.producto.index') }}" type="button" class="btn btn-primary">Tabla de productos</a>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection