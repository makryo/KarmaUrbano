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
                <li class="nav-item"><a data-toggle="tab" href="#menu4" class="nav-link">Tipo de producto</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#menu5" class="nav-link">Gestor de Compras</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#menu6" class="nav-link">Gestor de Ventas</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#menu7" class="nav-link">Reportes</a></li>
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

                        {{ __('You are logged in!') }}
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                <h3>Prestamos de libros</h3>
                    <a href="{{route('admin.cliente.index')}}">cliente</a>
                </div>
                <div id="menu2" class="tab-pane fade">
                <h3>Registros</h3>
                    <a href="{{route('admin.proveedor.index')}}">proveedor</a>
                </div>

                <div id="menu3" class="tab-pane fade">
                <h3></h3>
                <h1>Hola Mundo</h1>
                <a href="{{route('admin.producto.index')}}">producto</a>
                </div>

                <div id="menu4" class="tab-pane fade">
                <h3></h3>
                <h1>Hola Mundo xd</h1>
                <a href="{{route('admin.tipoProducto.index')}}">tipoProducto</a>
                </div>

                <div id="menu5" class="tab-pane fade">
                <h3></h3>
                <h1>Hello world</h1>
                <a href="{{route('admin.gestorCompras.index')}}">gestorCompras</a>
                </div>

                <div id="menu6" class="tab-pane fade">
                <h3></h3>
                <h1>apple</h1>
                <a href="{{route('admin.gestorVentas.index')}}">gestorVentas</a>
                </div>

                <div id="menu7" class="tab-pane fade">
                <h3></h3>
                <h1>reportes en Excel</h1>
                </div>

            </div>
            </div>
        </div>
    </div>
</div>
@endsection
