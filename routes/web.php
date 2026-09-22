<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

//Produtos
Route::get('/produtos', [ProdutoController::class, 'index']); //mostra todos os produtos
Route::get('/produtos/create', [ProdutoController::class, 'create']); //cria produto

Route::get('/produtos/{produto}', [ProdutoController::class, 'show']); //mostra produto especifico
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::put('/produtos/{produto}', [ProdutoController::class, 'update']);
Route::delete('/produtos/{produto}', [ProdutoController::class, 'destroy']);
