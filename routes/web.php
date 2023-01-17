<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\GastoController;
use App\Http\Controllers\CuentaPagarController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\VentaController;

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
Route::resource('/marcas', 'MarcaController')->names('marcas');
Route::resource('/productos', 'ProductoController')->names('productos');
Route::resource('/clientes', 'ClienteController')->names('clientes');
Route::resource('/gastos', 'GastoController')->names('gastos');
Route::resource('/cuentapagars', 'CuentaPagarController')->names('cuentas_pagars');
Route::resource('/compras', 'CompraController')->names('compras');
/*Route::resource('compra_detalles', 'CompraDetalleController')->names('compra_detalles');*/
Route::resource('ventas', 'VentaController')->names('ventas');
/*Route::resource('venta_detalles', 'VentaDetalleController')->names('ventas_detalles');*/