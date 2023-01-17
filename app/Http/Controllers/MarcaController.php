<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Http\Requests\StoreMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::get();
        return view('admin.marca.index', compact('marcas'));
    }

    
    public function create()
    {
        return view('admin.marca.create');
    }

    
    public function store(StoreMarcaRequest $request)
    {
        Marca::create($request->all());
        return redirect()->route('marcas.index');
    }

    
    public function show(Marca $marca)
    {
        return view('admin.marca.show', compact('marca'));
    }

    
    public function edit(Marca $marca)
    {
        return view('admin.marca.show', compact('marca'));
    }

    
    public function update(UpdateMarcaRequest $request, Marca $marca)
    {
        $marca->update($request->all());
        return redirect()->route('marcas.index');
    }

    
    public function destroy(Marca $marca)
    {
        $marca->delete();
        return redirect()->route('marcas.index');
    }
}
