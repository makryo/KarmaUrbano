<?php  
$datos = DB::select('select gestor_ventas.id, fecha_venta, clientes.nombre, productos.nombre_prod, cantidad, 
precio_venta, total 
from gestor_ventas, clientes, productos
where gestor_ventas.cliente_id = clientes.id
and gestor_ventas.producto_id = productos.id');
?>

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">Gestion de Ventas</div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Ventas realizadas</h1>
                    <br>
                    <script language="JavaScript">
                        $(document).ready(function() {
                            $('#datos').DataTable();
                        } );
                    </script>
                    <input type="text" id="searchTerm" onkeyup="doSearch()" class="form-control">

                    <table class="table table-striped table-bordered" id="datos">
                        <thead>
                        <tr>
                            <th>Fecha de venta</th>
                            <th>Cliente</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Total</th>
                            <th>detalles</th>
                        </tr>
                        </thead>

                        @foreach($datos as $Lista)
                            <tr>
                                <td>{{ $Lista->fecha_venta }}</td>
                                <td>{{ $Lista->nombre }}</td>
                                <td>{{ $Lista->nombre_prod }}</td>
                                <td>{{ $Lista->cantidad }}</td>
                                <td>{{ $Lista->precio_venta }}</td>
                                <td>{{ $Lista->total }}</td>
                                <td>
                                    <a href="{{ route('admin.gestorVentas.show', $Lista->id) }}" class="btn btn-success">Detalles</a>    
                                    <br>
                                    <br>
                                </td>
                                
                            </tr>
                        @endforeach
                          
                    <tr class='noSearch hide'>
                        <td colspan="5"></td>
                    </tr>
                    </table>

                    
                    <br>  
                    <a href="{{route('admin.inicio')}}" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{route('admin.gestorVentas.create')}}" type="button" class="btn btn-success">Nueva Venta</a>
                    
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection