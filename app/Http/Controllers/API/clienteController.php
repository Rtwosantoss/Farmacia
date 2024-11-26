<?php

namespace App\Http\Controllers\API;

use App\Models\cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return json_encode(Cliente::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = Cliente::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        return  json_encode(Cliente::find($cliente));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cliente $cliente)
    {
        $update = Cliente::find($cliente)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        $delete =  Cliente::find($cliente)->delete();
    }
}
