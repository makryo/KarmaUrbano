<?php  
$datos = DB::select('select gestor_compras.id, fecha_compra, proveedors.nombre_prov, productos.nombre_prod, cantidad, precio_compra, total 
from gestor_compras, proveedors, productos
where gestor_compras.proveedor_id = proveedors.id
and gestor_compras.producto_id = productos.id');
?>

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">Gestion de Compras</div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Compras realizadas</h1>
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
                            <th>Fecha de compra</th>
                            <th>Proveedor</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Total</th>
                            <th>detalles</th>
                        </tr>
                        </thead>

                        @foreach($datos as $Lista)
                            <tr>
                                <td>{{ $Lista->fecha_compra }}</td>
                                <td>{{ $Lista->nombre_prov }}</td>
                                <td>{{ $Lista->nombre_prod }}</td>
                                <td>{{ $Lista->cantidad }}</td>
                                <td>{{ $Lista->precio_compra }}</td>
                                <td>{{ $Lista->total }}</td>
                                <td>
                                    <a href="{{ route('admin.gestorCompras.show', $Lista->id) }}" class="btn btn-success">Detalles</a>    
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
                    <a href="{{route('admin.gestorCompras.create')}}" type="button" class="btn btn-success">Nueva Compra</a>
                    
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection