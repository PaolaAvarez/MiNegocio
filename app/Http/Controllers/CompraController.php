<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\User;
use App\Http\Requests\StoreCompraRequest;
use App\Http\Requests\UpdateCompraRequest;

class CompraController extends Controller
{
    public function index()
    {
        $compras = Compra::get();
        return view('admin.compra.index', compact('compras'));
    }

    
    public function create()
    {
        $users = User::get();
        return view('admin.compra.create', compact('users'));
    }

    
    public function store(StoreCompraRequest $request)
    {
        $compra=Compra::create($request->all());

        foreach ($request->producto_id as $key =>$producto){
        $results[]= array("producto_id"=>$request->producto_id[$key],
        "cantidad"=>$request->cantidad[$key],
        "precioCompra"=>$request->precioCompra[$key],
        "precioVenta"=>$request->precioVenta[$key],
    );
    }
    $compra->compra_detalles()->createMany($results);
    return redirect()->route('compras.index');
    }
    
    public function show(Compra $compra)
    {
        return view('admin.compra.show', compact('compra'));
    }

    
    public function edit(Compra $compra)
    {
        $users = User::get();
        return view('admin.compra.show', compact('compra'));
    }

    
    public function update(UpdateCompraRequest $request, Compra $compra)
    {
       // $compra->update($request->all());
        //return redirect()->route('compras.index');
    }

    
    public function destroy(Compra $compra)
    {
        //$compra->delete();
        //return redirect()->route('compras.index');
    }
}
