<?php

namespace App\Http\Controllers\API;

use App\Models\fornecedor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class fornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return json_encode(Fornecedor::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = Fornecedor::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($fornecedor)
    {
        return  json_encode(Fornecedor::find($fornecedor));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, fornecedor $fornecedor)
    {
        $update = Fornecedor::find($fornecedor)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fornecedor $fornecedor)
    {
        $delete =  Fornecedor::find($fornecedor)->delete();
    }
}
