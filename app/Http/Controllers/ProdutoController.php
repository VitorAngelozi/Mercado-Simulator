<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produtos = new Produto();
        $produtos->nome = $request->input('nome');
        $produtos->quantidade = $request->input('quantidade');
        $produtos->preco = $request->input('preco');
        $produtos->descricao = $request->input('descricao');
        $produtos->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
      $produto->nome = $request->input('nome');
      $produto->descricao = $request->input('descricao');
      $produto->preco = $request->input('preco');
      $produto->quantidade = $request->input('quantidade');
      $produto->save();
      return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect('/produtos');
    }
}
