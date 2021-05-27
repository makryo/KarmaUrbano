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
                    <h1>Detalles de la compra</h1>
                    
                    <dl>
                    <div class="row">
                        <div class="col-6">
                            <dt>Fecha de compra</dt><dd>{{ $gest->fecha_compra }}</dd>
                            <dt>id de proveedor</dt><dd>{{ $gest->proveedor_id }}</dd>
                            <dt>id de producto</dt><dd>{{ $gest->producto_id }}</dd>
                        </div>

                        <div class="col-6">
                            <dt>Cantidad</dt><dd>{{ $gest->cantidad }}</dd>
                            <dt>Precio</dt><dd>{{ $gest->precio_compra }}</dd>
                            <dt>Total</dt><dd>{{ $gest->total }}</dd>
                        </div>
                    </div>
                    </dl>
                    <br>  
                    <a href="{{ route('admin.inicio') }}" type="button" class="btn btn-secondary">Inicio</a>
                    <a href="{{ route('admin.gestorCompras.index') }}" type="button" class="btn btn-primary">Tabla de compras</a>
                    <a href="{{ route('admin.gestorCompras.edit', $gest->id) }}" class="btn btn-warning">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection