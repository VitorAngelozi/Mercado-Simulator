<h1> Lista de Produtos </h1>

@if($produtos->isEmpty())
    <p> Sem produtos cadastrados</p>
@else
    @foreach ( $produtos as $produto)
    <a href="/produtos/{{ $produto->id }}">{{ $produto->nome }}</a><br>
    <p>{{ $produto->descricao }}</p>
    @endforeach   
@endforelse