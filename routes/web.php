<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

//Produtos
Route::get('/produtos', [ProdutoController::class, 'index']); //mostra todos os produtos
Route::get('/produtos/create', [ProdutoController::class, 'create']); //rota para criar o produto
Route::get('/produtos/{produto}', [ProdutoController::class, 'show']); //mostra produto especifico
Route::get('/produto/{produto}/edit', [ProdutoController::class, 'edit']); //edita produto especifico
Route::put('/produto/{produto}', [ProdutoController::class, 'update']); //atualiza produto especifico
Route::post('/produtos', [ProdutoController::class, 'store']); //cria o produto
Route::delete('/produtos/{produto}', [ProdutoController::class, 'destroy']);//deleta produto especifico

//Clientes
