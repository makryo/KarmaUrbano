<?php  
use App\cliente;
$datos = cliente::all();
?>

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">Gestion de clientes</div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Clientes ingresados</h1>
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
                            <th>Numero de Nit</th>
                            <th>Direccion</th>
                            <th>Numero de Telefono</th>
                            <th>detalles</th>
                        </tr>
                        </thead>

                        @foreach($datos as $Lista)
                            <tr>
                                <td>{{ $Lista->nombre }}</td>
                                <td>{{ $Lista->nit }}</td>
                                <td>{{ $Lista->direccion }}</td>
                                <td>{{ $Lista->telefono }}</td>
                                <td>
                                    <a href="{{ route('admin.cliente.show', $Lista->id) }}" class="btn btn-success">Detalles</a>    
                                    <br>
                                    <br>
                                    <form method="post" action="{{ route('admin.cliente.destroy', $Lista->id) }}">
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
                    <a href="{{route('admin.cliente.create')}}" type="button" class="btn btn-success">Nuevo Cliente</a>
                    
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection