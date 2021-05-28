<?php
use App\producto;
use App\cliente;

$prod = producto::all();
$client = cliente::all();

?>
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
                    <h1>Nueva Venta</h1>
                    <div class="container">
                        
                    <!-- -->
                        <form method="post" action="{{ route('admin.gestorVentas.store') }}">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-6">
                                    <br>




                                    <label>fecha de venta</label>
                                    <div class="input-group mb-3">
                                        <input type="date" class="form-control" name="fecha_venta">
                                         <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Ingrese  la fecha de venta del producto, no se permite dejar en blanco ni tampoco escribir caracteres incorrectos">?</a>
                                    </div>
                                        @error('fecha_venta')
                                            <small class="text-warning">No se puede dejar en blanco o los datos son erroneos.</small>
                                        @enderror
                                    <br>
                                    <br>



                                    <label>Cliente</label>
                                        <div class="input-group mb-3">
                                            <select name="cliente_id" class="input-group mb-3 form-control">
                                                @foreach($client as $Lista)
                                                    <option value="{{ $Lista->id }}">
                                                        {{ $Lista->nombre }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Seleccione el cliente, no se permite dejar en blanco">?</a>
                                        </div>
                                    <br>
                                    <br>



                                    <label>Producto</label>
                                        <div class="input-group mb-3">
                                            <select name="producto_id" class="input-group mb-3 form-control">
                                                @foreach($prod as $Lista)
                                                    <option value="{{ $Lista->id }}">
                                                        {{ $Lista->nombre_prod }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Seleccione el producto, no se permite dejar en blanco">?</a>
                                        </div>







                                </div>

                                <div class="col-6">
                                <br>
                                 


                                 <label>Cantidad</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" name="cantidad" step="0.01">
                                        <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Ingrese la cantidad a vender, solo se permite numeros.">?</a>
                                    </div>
                                        @error('cantidad')
                                            <small class="text-warning">No se puede dejar en blanco o los datos son erroneos.</small>
                                        @enderror
                                    <br>
                                    <br>   



                                    <label>Precio</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" name="precio_venta" step="0.01">
                                         <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Ingrese el precio del producto a vender, no se permite dejar en blanco ni tampoco escribir caracteres incorrectos">?</a>
                                    </div>
                                        @error('precio_venta')
                                            <small class="text-warning">No se puede dejar en blanco o los datos son erroneos.</small>
                                        @enderror
                                    <br>
                                    <br>




                                    <label>Total</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" name="total" step="0.01">
                                         <a class="btn btn-info" href="#" data-toggle="popover" title="Informacion" data-content="Ingrese el total vendido, no se permite dejar en blanco ni tampoco escribir caracteres incorrectos">?</a>
                                    </div>
                                        @error('total')
                                            <small class="text-warning">No se puede dejar en blanco o los datos son erroneos.</small>
                                        @enderror
                                    <br>
                                    <br>


                                    <br>
                                </div>
                            </div>
                            <br>
                            <input type="submit" value="Guardar" class="btn btn-success">
                            <a href="{{route('admin.gestorVentas.index')}}" type="button" class="btn btn-secondary">Regresar</a>

                            
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