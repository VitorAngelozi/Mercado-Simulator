<h2> Criação de Produtos </h2>
<form method="POST", action="/produtos">
    @csrf
    <input type="text" name="nome"  
    placeholder="Nome do Produto"><br>

    <input type="text" name="descricao"  
    placeholder="Descrição do Produto"><br>

    <input type="text" name="preco"  
    placeholder="Valor do Produto"><br>

     <input type="text" name="quantidade"  
    placeholder="Quantidade do Produto"><br>
    
    <button type="submit"> Cadastrar</button>

</form>
