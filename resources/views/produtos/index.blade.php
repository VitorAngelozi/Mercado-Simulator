<h1> Lista de Produtos </h1>

@if($produtos->isEmpty())
    <p> Sem produtos cadastrados</p>
@else
    @foreach ( $produtos as $produto)
    <a href="/produtos/{{ $produto->id }}">{{ $produto->nome }}</a>
    <p>{{ $produto->descricao }}</p><br>
    @endforeach   
@endforelse
 <a href="/produtos/create"> Criar Produto </a>