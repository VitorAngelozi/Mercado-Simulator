<p>{{ $produto->nome }}</p>
<p> {{ $produto->descricao }} </p>
<p> R$ {{ $produto->preco }}</p>
<button>
<a href='/produto/{{ $produto->id }}/edit'>Editar</a>
</button>
<form method='POST' action= "/produtos/{{ $produto->id }}">
    @csrf
    @method('DELETE')
    <button type="submit"> Deletar</button>
</form>