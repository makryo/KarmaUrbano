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
                    <h1>Detalles del cliente</h1>
                    
                    <dl>
                    <div class="row">
                        <div class="col-6">
                            <dt>Nombre</dt><dd>{{ $prod->nombre_prod }}</dd>
                            <dt>Cantidad en stock</dt><dd>{{ $prod->stock }}</dd>
                            <dt>Sucursal</dt><dd>{{ $prod->sucursal }}</dd>
                        </div>

                        <div class="col-6">
                            <dt>Tipo de producto</dt><dd>{{ $prod->tipo_producto_id }}</dd>
                            <dt>Proveedor</dt><dd>{{ $prov->nombre_prov }}</dd>
                        </div>
                    </div>
                    </dl>
                    <br>  
                    <a href="{{ route('admin.inicio') }}" type="button" class="btn btn-secondary">Inicio</a>
                    <a href="{{ route('admin.cliente.index') }}" type="button" class="btn btn-primary">Tabla de clientes</a>
                    <a href="{{ route('admin.cliente.edit', $prod->id) }}" class="btn btn-warning">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection