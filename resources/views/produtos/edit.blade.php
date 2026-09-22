<h1>Edicao de produtos </h1>

<form method="POST" action="/produto/{{ $produto->id }}">
    @csrf
    @method('PUT')
    <input type="hidden" name="produto_id" value="{{ $produto->id }}">
    <input type="text" name="nome" value="{{ $produto->nome }}" placeholder="Nome do Produto"><br>
    <input type="text" name="descricao" value="{{ $produto->descricao }}" placeholder="Descrição do Produto"><br>
    <input type="text" name="preco" value="{{ $produto->preco }}" placeholder="Valor do Produto"><br>
    <input type="text" name="quantidade" value="{{ $produto->quantidade }}" placeholder="Quantidade do Produto"><br>
    
    <button type="submit"> Atualizar</button>
    
</form>