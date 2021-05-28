@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h2>KarmaUrbano</h2>

            <ul class="nav nav-tabs">
                <li class="nav-item" wfd-id="275"><a data-toggle="tab" href="#home" class="nav-link active">Inicio</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#menu1" class="nav-link">Clientes</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#menu2" class="nav-link">Proveedores</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#menu3" class="nav-link">Productos</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#menu4" class="nav-link">Gestor de Compras</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#menu5" class="nav-link">Gestor de Ventas</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#menu6" class="nav-link">Informes</a></li>
                
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active active show">
                <h3>Bienvenido {{ Auth::user()->name }}</h3>
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Menu de inicio
                        <br>
                        Acceso directo a Redes Sociales
                        <br>
                        <a href="https://www.facebook.com/KARMA-Urbano-116433013133891" class="fa fa-facebook"></a>
                        <br>
                        �Karma Urbano : SOMOS ---> PLAYERAS ,,, PAPOS ,,PIPAS ,,, TAZAS ,,,,VAPS ,,, TATTOOS ,,, PERFORACIONES ,,, Y MUCHO MAS ��.          
                        
                    </div>
                </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                <h3>Menu de clientes</h3>

                    <div class="row">
                        <div class="col-6">
                            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">tablas</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">datos registrados</h4>
                                <p class="card-text">Tabla de registros de clientes, contiene los datos registrados de los clientes.</p>
                                <a href="{{route('admin.cliente.index')}}" class="btn btn-secondary">tabla de clientes</a>
                              </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Nuevo registro</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Nuevo cliente</h4>
                                <p class="card-text">Formulario para registrar nuevos clientes.</p>
                                <a href="{{route('admin.cliente.create')}}" class="btn btn-secondary">crear cliente</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div id="menu2" class="tab-pane fade">
                <h3>Menu de proveedores</h3>

                    <div class="row">
                        <div class="col-6">
                            <div class="card text-white bg-success mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Tablas</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">datos registrados</h4>
                                <p class="card-text">Tabla de registros de los proveedores, contiene todos los datos de los proveedores del establecimiento.</p>
                                <a href="{{route('admin.proveedor.index')}}" class="btn btn-secondary">tabla de proveedores</a>
                              </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card text-white bg-success mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Nuevo registro</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Nuevo proveedor</h4>
                                <p class="card-text">Formulario para registrar nuevos proveedores.</p>
                                <a href="{{route('admin.proveedor.create')}}" class="btn btn-secondary">crear proveedor</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div id="menu3" class="tab-pane fade">
                <h3></h3>
                <h3>Menu de productos</h3>

                    <div class="row">
                        <div class="col-6">
                            <div class="card text-white bg-warning mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Tablas</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">datos registrados</h4>
                                <p class="card-text">Tabla de registros de productos que contiene todos los datos de productos del establecimiento.</p>
                                <a href="{{route('admin.producto.index')}}" class="btn btn-secondary">tabla de productos</a>
                              </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card text-white bg-warning mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Nuevo registro</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Nuevo producto</h4>
                                <p class="card-text">Formulario para registrar nuevos productos.</p>
                                <a href="{{route('admin.producto.create')}}" class="btn btn-secondary">crear producto</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div id="menu4" class="tab-pane fade">
                <h3></h3>
                <h3>Menu gestor de compras</h3>

                    <div class="row">
                        <div class="col-6">
                            <div class="card text-white bg-danger mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Tablas</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">datos registrados</h4>
                                <p class="card-text">Tabla de registros de compras, contiene todos los datos de las compras del establecimiento.</p>
                                <a href="{{route('admin.gestorCompras.index')}}" class="btn btn-secondary">tabla de compras</a>
                              </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card text-white bg-danger mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Nuevo registro</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Nueva compra</h4>
                                <p class="card-text">Formulario para registrar nuevas compras.</p>
                                <a href="{{route('admin.gestorCompras.create')}}" class="btn btn-secondary">crear compra</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div id="menu5" class="tab-pane fade">
                <h3></h3>
                <h3>Menu gestor de ventas</h3>

                    <div class="row">
                        <div class="col-6">
                            <div class="card text-white bg-light mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Tablas</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">datos registrados</h4>
                                <p class="card-text">Tabla de registros de las ventas, contiene todos los datos de las ventas del establecimiento.</p>
                                <a href="{{route('admin.gestorVentas.index')}}" class="btn btn-secondary">tabla de ventas</a>
                              </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card text-white bg-light mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Nuevo registro</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Nueva venta</h4>
                                <p class="card-text">Formulario para registrar nuevas ventas</p>
                                <a href="{{route('admin.gestorVentas.create')}}" class="btn btn-secondary">crear venta</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div id="menu6" class="tab-pane fade">
                <h3></h3>
                <h3>Informes</h3>

                    <div class="row">
                        <div class="col-6">
                            <div class="card text-white bg-dark mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Informe de ventas</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Generar informe</h4>
                                <p class="card-text">Crear un informe en formato excel. Se creara un excel donde estaran los datos ordenados conforme a la tabla de ventas.</p>
                                <a href="{{route('admin.excel')}}" class="btn btn-secondary">crear informe</a>
                              </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card text-white bg-dark mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Informe de compras</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Generar informe</h4>
                                <p class="card-text">Crear un informe en formato excel. Se creara un excel donde estaran los datos ordenados conforme a la tabla de compras.</p>
                                <a href="{{route('admin.excel.compra')}}" class="btn btn-secondary">crear informe</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>
    </div>
</div>
@endsection
