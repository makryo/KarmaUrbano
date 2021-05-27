@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detalles</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Detalles del proveedor</h1>
                    
                    <dl>
                    <div class="row">
                        <div class="col-6">
                            <dt>Nombres</dt><dd>{{ $prov->nombre_prov }}</dd>
                            <dt>Numero de Nit</dt><dd>{{ $prov->nit }}</dd>
                        </div>

                        <div class="col-6">
                            <dt>Direccion</dt><dd>{{ $prov->direccion }}</dd>
                            <dt>Numero de telefono</dt><dd>{{ $prov->telefono }}</dd>
                        </div>
                    </div>
                    </dl>
                    <br>  
                    <a href="{{ route('admin.inicio') }}" type="button" class="btn btn-secondary">Inicio</a>
                    <a href="{{ route('admin.proveedor.index') }}" type="button" class="btn btn-primary">Tabla de proveedores</a>
                    <a href="{{ route('admin.proveedor.edit', $prov->id) }}" class="btn btn-warning">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection