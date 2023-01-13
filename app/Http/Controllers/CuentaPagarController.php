<?php

namespace App\Http\Controllers;

use App\Models\CuentaPagar;
use App\Models\User;
use App\Http\Requests\StoreCuentaPagarRequest;
use App\Http\Requests\UpdateCuentaPagarRequest;

class CuentaPagarController extends Controller
{
    public function index()
    {
        $cuenta_pagars = CuentaPagar::get();
        return view('admin.cuentapagar.index', compact('cuenta_pagars'));
    }

    
    public function create()
    {
        $users = User::get();
        return view('admin.cuentapagar.create', compact('users'));
    }

    
    public function store(StoreCuentaPagarRequest $request)
    {
        CuentaPagar::create($request->all());
        return redirect()->route('cuenta_pagars.index');
    }
   
    public function show(CuentaPagar $cuentapagar)
    {
        return view('admin.cuentapagar.show', compact('cuentapagar'));
    }

    
    public function edit(CuentaPagar $cuentapagar)
    {
        $users = User::get();
        return view('admin.cuentapagar.show', compact('cuentapagar','users'));
    }

    
    public function update(UpdateCuentaPagarRequest $request, CuentaPagar $cuentapagar)
    {
        $cuentapagar->update($request->all());
        return redirect()->route('cuenta_pagars.index');
    }

    
    public function destroy(CuentaPagar $cuentapagar)
    {
        $cuentapagar->delete();
        return redirect()->route('cuenta_pagars.index');
    }
}
