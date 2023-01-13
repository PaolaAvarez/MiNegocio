<?php

namespace App\Http\Controllers;

use App\Models\VentaDetalle;
use App\Http\Requests\StoreVentaDetalleRequest;
use App\Http\Requests\UpdateVentaDetalleRequest;

class VentaDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVentaDetalleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVentaDetalleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VentaDetalle  $ventaDetalle
     * @return \Illuminate\Http\Response
     */
    public function show(VentaDetalle $ventaDetalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VentaDetalle  $ventaDetalle
     * @return \Illuminate\Http\Response
     */
    public function edit(VentaDetalle $ventaDetalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVentaDetalleRequest  $request
     * @param  \App\Models\VentaDetalle  $ventaDetalle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVentaDetalleRequest $request, VentaDetalle $ventaDetalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VentaDetalle  $ventaDetalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(VentaDetalle $ventaDetalle)
    {
        //
    }
}
