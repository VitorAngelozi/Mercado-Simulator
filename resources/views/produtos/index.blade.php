<h1> Lista de Produtos </h1>

@if($produtos->isEmpty())
    <p> Sem produtos cadastrados</p>
@else
    @foreach ( $produtos as $produto)
        <p>Nome: {{ $produto->nome }}</p>
        <p>Descrição: {{ $produto->descricao }}</p>
        <p>Preço: {{ $produto->preco }}</p>
        <p>Quantidade: {{ $produto->quantidade }}</p>
    @endforeach
@endforelse