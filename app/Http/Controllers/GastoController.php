<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use App\Models\User;
use App\Http\Requests\StoreGastoRequest;
use App\Http\Requests\UpdateGastoRequest;

class GastoController extends Controller
{
    public function index()
    {
        $gastos = Gasto::get();
        return view('admin.gasto.index', compact('gastos'));
    }

    
    public function create()
    {
        $users = User::get();
        return view('admin.gasto.create', compact('users'));
    }

    
    public function store(StoreGastoRequest $request)
    {
        Gasto::create($request->all());
        return redirect()->route('gastos.index');
    }

    
    public function show(Gasto $gasto)
    {
        return view('admin.gasto.show', compact('gasto'));
    }

    
    public function edit(Gasto $gasto)
    {
        $users = User::get();
        return view('admin.gasto.show', compact('gasto','users'));
    }

    
    public function update(UpdateGastoRequest $request, Gasto $gasto)
    {
        $gasto->update($request->all());
        return redirect()->route('gastos.index');
    }

    
    public function destroy(Gasto $gasto)
    {
        $gasto->delete();
        return redirect()->route('gastos.index');
    }
}
