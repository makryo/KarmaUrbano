@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Formulario</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Nuevo Cliente</h1>
                    <div class="container">
                        
                    <!-- -->
                        <form method="post" action="{{ route('admin.cliente.store') }}">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6">
                                    <br>
                                    <label>Nombre</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="nombre">
                                         <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Ingrese su nombre, no se permite dejar en blanco ni tampoco escribir caracteres incorrectos">?</a>
                                    </div>
                                        @error('nombre')
                                            <small class="text-warning">No se puede dejar en blanco o los datos son erroneos.</small>
                                        @enderror
                                    <br>
                                    <br>
                                    <label>Numero de Nit</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" name="nit">
                                        <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Ingrese su numero de nit, solo se permite numeros.">?</a>
                                    </div>
                                        @error('nit')
                                            <small class="text-warning">No se puede dejar en blanco o los datos son erroneos.</small>
                                        @enderror
                                    <br>
                                    <br>
                                </div>

                                <div class="col-6">
                                <br>
                                    <label>Direccion</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="direccion">
                                            <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Ingrese su direccion, no se permite dejar en blanco ni tampoco escribir caracteres incorrectos">?</a>
                                        </div>
                                        @error('direccion')
                                            <small class="text-warning">No se puede dejar en blanco o los datos son erroneos.</small>
                                        @enderror
                                        <br>
                                        <br>
                                    <label>Telefono</label>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" name="telefono">
                                            <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Ingrese su numero de telefono, no se permite dejar en blanco, solo se permite numeros">?</a>
                                        </div>
                                        @error('telefono')
                                            <small class="text-warning">No se puede dejar en blanco o los datos son erroneos.</small>
                                        @enderror
                                        <br>
                                        <br>
                                    
                                </div>
                            </div>
                            <br>
                            <input type="submit" value="Guardar" class="btn btn-success">
                            <a href="{{route('admin.inicio')}}" type="button" class="btn btn-secondary">Regresar</a>

                            
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Info</button>
                            
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Informacion</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>En el formulario ingrese los datos solicitados, en algunos campos se debe introducir 
                                        los datos correctos de lo contrario el sistema no dejara ingresarlo, asi como tampoco 
                                        podra dejar un campo vacio.</p>
                                    </div>
                                    <div class="modal-footer">
                                        
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                           
                        </form>      
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection