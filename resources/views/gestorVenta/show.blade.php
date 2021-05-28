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
                    <h1>Detalles de la venta</h1>
                    
                    <dl>
                    <div class="row">
                        <div class="col-6">
                            <dt>Fecha de venta</dt><dd>{{ $gest->fecha_venta }}</dd>
                            <dt>id de cliente</dt><dd>{{ $gest->cliente_id }}</dd>
                            <dt>id de producto</dt><dd>{{ $gest->producto_id }}</dd>
                        </div>

                        <div class="col-6">
                            <dt>Cantidad</dt><dd>{{ $gest->cantidad }}</dd>
                            <dt>Precio</dt><dd>{{ $gest->precio_venta }}</dd>
                            <dt>Total</dt><dd>{{ $gest->total }}</dd>
                        </div>
                    </div>
                    </dl>
                    <br>  
                    <a href="{{ route('admin.inicio') }}" type="button" class="btn btn-secondary">Inicio</a>
                    <a href="{{ route('admin.gestorVentas.index') }}" type="button" class="btn btn-primary">Tabla de ventas</a>
                    <a href="{{ route('admin.gestorVentas.edit', $gest->id) }}" class="btn btn-warning">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection