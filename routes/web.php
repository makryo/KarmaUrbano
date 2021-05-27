<?php

use Illuminate\Support\Facades\Route;
use App\Exports\VentasExport;
use Maatwebsite\Excel\Facades\Excel;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'Admin\AdminController@index')->name('admin.inicio');

Route::resource('/admin/publicacion', 'Admin\publicController')->names('admin.publicacion');

Route::resource('/admin/cliente', 'ClienteController')->names('admin.cliente');

Route::resource('/admin/proveedor', 'ProveedorController')->names('admin.proveedor');

Route::resource('/admin/producto', 'ProductoController')->names('admin.producto');

Route::resource('/admin/tipoProducto', 'TipoProController')->names('admin.tipoProducto');

Route::resource('/admin/gestorCompras', 'GestComprasController')->names('admin.gestorCompras');

Route::resource('/admin/gestorVentas', 'GestVentasController')->names('admin.gestorVentas');



Route::get('admin/excel', 'ExcelVentasController@export')->name('admin.excel');