<?php  
$datos = DB::select('select productos.id, nombre_prod, stock, sucursal, tipo_productos.nombre, proveedors.nombre_prov 
from productos, proveedors, tipo_productos
where productos.proveedor_id = proveedors.id
and productos.tipo_producto_id = tipo_productos.id');
?>

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">Gestion de productos</div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Productos ingresados</h1>
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
                            <th>Nombre</th>
                            <th>Cantidad en stock</th>
                            <th>Sucursal</th>
                            <th>Tipo de producto</th>
                            <th>Proveedor</th>
                            <th>detalles</th>
                        </tr>
                        </thead>

                        @foreach($datos as $Lista)
                            <tr>
                                <td>{{ $Lista->nombre_prod }}</td>
                                <td>{{ $Lista->stock }}</td>
                                <td>{{ $Lista->sucursal }}</td>
                                <td>{{ $Lista->nombre }}</td>
                                <td>{{ $Lista->nombre_prov }}</td>
                                <td>
                                    <a href="{{ route('admin.producto.show', $Lista->id) }}" class="btn btn-success">Detalles</a>    
                                    <br>
                                    <br>
                                    <form method="post" action="{{ route('admin.producto.destroy', $Lista->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Borrar" class="btn btn-danger">
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                          
                    <tr class='noSearch hide'>
                        <td colspan="5"></td>
                    </tr>
                    </table>

                    
                    <br>  
                    <a href="{{route('admin.inicio')}}" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{route('admin.producto.create')}}" type="button" class="btn btn-success">Nuevo Producto</a>
                    
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection