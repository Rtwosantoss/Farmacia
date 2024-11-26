<?php

namespace App\Http\Controllers\API;

use App\Models\estoque;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class estoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return json_encode(Estoque::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = Estoque::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Estoque $estoque)
    {
        return  json_encode(Estoque::find($estoque));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, estoque $estoque)
    {
        $update = Estoque::find($estoque)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(estoque $estoque)
    {
        $delete = Estoque::find($estoque)->delete();
    }
}
