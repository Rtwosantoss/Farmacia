<?php

namespace App\Http\Controllers\API;

use App\Models\categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return json_encode(Categoria::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = Categoria::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return  json_encode(Categoria::find($categoria));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categoria $categoria)
    {
        $update = Categoria::find($categoria)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria $categoria)
    {
        $delele = Categoria::find($categoria)->delete();
    }
}
