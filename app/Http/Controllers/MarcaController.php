<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Http\Requests\StoreMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;

class MarcaController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $marcas=DB::table('marca')->where('nombre','LIKE','%'.$query.'%')
            ->where ('condicion','=','1')
            ->orderBy('idmarca','desc')
            ->paginate(7);
            return view('marca.index',["marcas"=>$marcas,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("marca.create");
    }
    public function store (marcaFormRequest $request)
    {
        $marca=new marca;
        $marca->nombre=$request->get('nombre');
        $marca->descripcion=$request->get('descripcion');
        $marca->condicion='1';
        $marca->save();
        return Redirect::to('marca');

    }
    public function show($id)
    {
        return view("marca.show",["marca"=>marca::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("marca.edit",["marca"=>marca::findOrFail($id)]);
    }
    public function update(marcaFormRequest $request,$id)
    {
        $marca=marca::findOrFail($id);
        $marca->nombre=$request->get('nombre');
        $marca->descripcion=$request->get('descripcion');
        $marca->update();
        return Redirect::to('admin/marca');
    }
    public function destroy($id)
    {
        $marca=marca::findOrFail($id);
        $marca->condicion='0';
        $marca->update();
        return Redirect::to('marca');
    }

}
