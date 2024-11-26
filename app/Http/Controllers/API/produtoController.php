<?php

namespace App\Http\Controllers\API;

use App\Models\produto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class produtoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return json_encode(Produto::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = Produto::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($produto)
    {
        return  json_encode(Produto::find($produto));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produto $produto)
    {
        $update = Produto::find($produto)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produto $produto)
    {
        $delete =  Produto::find($produto)->delete();
    }
}
