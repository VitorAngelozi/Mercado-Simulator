<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;

//Produtos
Route::get('/produtos', [ProdutoController::class, 'index']); //mostra todos os produtos
Route::get('/produtos/create', [ProdutoController::class, 'create']); //rota para criar o produto
Route::get('/produtos/{produto}', [ProdutoController::class, 'show']); //mostra produto especifico
Route::get('/produto/{produto}/edit', [ProdutoController::class, 'edit']); //edita produto especifico
Route::put('/produto/{produto}', [ProdutoController::class, 'update']); //atualiza produto especifico
Route::post('/produtos', [ProdutoController::class, 'store']); //cria o produto
Route::delete('/produtos/{produto}', [ProdutoController::class, 'destroy']);//deleta produto especifico

//Clientes
Route::get('/', [ClienteController::class, 'index']); //mostra todos os clientes
Route::get('/clientes/create', [ClienteController::class, 'create']); //rota para criar o cliente
Route::get('/clientes/{cliente}', [ClienteController::class, 'show']); //mostra cliente especifico