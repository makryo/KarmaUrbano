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
                              <div class="card-header" wfd-id="100">Header</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Primary card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                              <div class="card-header" wfd-id="100">Header</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Primary card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{route('admin.cliente.index')}}" class="btn btn-secondary">tabla de clientes</a>
                              </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card text-white bg-success mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Header</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Primary card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{route('admin.cliente.create')}}" class="btn btn-secondary">crear cliente</a>
                              </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('admin.proveedor.index')}}">proveedor</a>
                </div>



                <div id="menu3" class="tab-pane fade">
                <h3></h3>
                <h3>Menu de productos</h3>

                    <div class="row">
                        <div class="col-6">
                            <div class="card text-white bg-warning mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Header</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Primary card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{route('admin.cliente.index')}}" class="btn btn-secondary">tabla de clientes</a>
                              </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card text-white bg-warning mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Header</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Primary card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{route('admin.cliente.create')}}" class="btn btn-secondary">crear cliente</a>
                              </div>
                            </div>
                        </div>
                    </div>
                <a href="{{route('admin.producto.index')}}">producto</a>
                </div>



                <div id="menu4" class="tab-pane fade">
                <h3></h3>
                <h3>Menu gestor de compras</h3>

                    <div class="row">
                        <div class="col-6">
                            <div class="card text-white bg-danger mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Header</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Primary card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{route('admin.cliente.index')}}" class="btn btn-secondary">tabla de clientes</a>
                              </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card text-white bg-danger mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Header</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Primary card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{route('admin.cliente.create')}}" class="btn btn-secondary">crear cliente</a>
                              </div>
                            </div>
                        </div>
                    </div>
                <a href="{{route('admin.gestorCompras.index')}}">gestorCompras</a>
                </div>



                <div id="menu5" class="tab-pane fade">
                <h3></h3>
                <h3>Menu gestor de ventas</h3>

                    <div class="row">
                        <div class="col-6">
                            <div class="card text-white bg-light mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Header</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Primary card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{route('admin.cliente.index')}}" class="btn btn-secondary">tabla de clientes</a>
                              </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card text-white bg-light mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Header</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Primary card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{route('admin.cliente.create')}}" class="btn btn-secondary">crear cliente</a>
                              </div>
                            </div>
                        </div>
                    </div>
                <a href="{{route('admin.gestorVentas.index')}}">gestorVentas</a>
                </div>



                <div id="menu6" class="tab-pane fade">
                <h3></h3>
                <h3>Informes</h3>

                    <div class="row">
                        <div class="col-6">
                            <div class="card text-white bg-dark mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Header</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Primary card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{route('admin.cliente.index')}}" class="btn btn-secondary">tabla de clientes</a>
                              </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card text-white bg-dark mb-3" style="max-width: 20rem;" wfd-id="98">
                              <div class="card-header" wfd-id="100">Header</div>
                              <div class="card-body" wfd-id="99">
                                <h4 class="card-title">Primary card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{route('admin.cliente.create')}}" class="btn btn-secondary">crear cliente</a>
                              </div>
                            </div>
                        </div>
                    </div>
                <a href="{{route('admin.excel')}}">generar informe venta</a>
                </div>


            </div>
            </div>
        </div>
    </div>
</div>
@endsection
