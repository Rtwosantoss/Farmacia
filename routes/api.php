<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\clienteController;
use App\Http\Controllers\API\estoqueController;
use App\Http\Controllers\API\fornecedorController;
use App\Http\Controllers\API\produtoController;
use App\Http\Controllers\API\categoriaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/cliente',  clienteController::class);
Route::apiResource('/estoque',  estoqueController::class);
Route::apiResource('/fornecedor',  fornecedorController::class);
Route::apiResource('/produto',  produtoController::class);
Route::apiResource('/categoria',  categoriaController::class);
