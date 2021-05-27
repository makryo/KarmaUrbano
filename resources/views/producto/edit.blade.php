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
                    
                        <form method="post" action="{{ route('admin.cliente.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="nombre" value="{{ $Edita->nombre }}" class="form-control">
                                        <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Ingrese su nombre, no se permite dejar en blanco ni tampoco escribir caracteres incorrectos">?</a>
                                    </div>

                                        @error('nombre')
                                            <small class="text-warning">No se puede dejar en blanco o los datos son erroneos.</small>
                                        @enderror
                                    <br>
                                    <br>

                                    <div class="input-group mb-3">
                                        <input type="number" name="nit" value="{{ $Edita->nit }}" class="form-control">
                                        <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Ingrese su numero de nit, solo se permite numeros.">?</a>
                                    </div>

                                        @error('nit')
                                            <small class="text-warning">No se puede dejar en blanco o los datos son erroneos.</small>
                                        @enderror
                                    <br>
                                    <br>
                                </div>

                                <div class="col-6">
                                    <select name="ciclos_ins" class="input-group mb-3 form-control" required>
                                        @foreach($ciclos as $Lista)
                                            <option value="{{ $Lista->id }}">
                                                {{ $Lista->ciclo }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <br>

                                    <select name="ciclos_ins" class="input-group mb-3 form-control" required>
                                        @foreach($ciclos as $Lista)
                                            <option value="{{ $Lista->id }}">
                                                {{ $Lista->ciclo }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <br>
                                    
                                </div>
                            </div>
                            <input type="submit" value="Guardar" class="btn btn-success">
                            <a href="{{route('admin.inicio')}}" type="button" class="btn btn-secondary">Inicio</a>
                            <a href="{{ route('admin.cliente.index') }}" type="button" class="btn btn-primary">Tabla de clientes</a>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection