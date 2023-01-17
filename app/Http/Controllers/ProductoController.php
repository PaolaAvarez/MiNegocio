<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Marca;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::get();
        return view('admin.producto.index', compact('productos'));
    }

    
    public function create()
    {
        $productos = Producto::get();
        return view('admin.producto.create', compact('producto'));
    }

    
    public function store(StoreProductoRequest $request)
    {
        Producto::create($request->all());
        return redirect()->route('productos.index');
    }

    
    public function show(Producto $producto)
    {
        return view('admin.producto.show', compact('producto'));
    }

    
    public function edit(Producto $producto)
    {
        $productos = Producto::get();
        return view('admin.producto.show', compact('producto','marcas'));
    }

    
    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        $producto->update($request->all());
        return redirect()->route('productos.index');
    }

    
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
