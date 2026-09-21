<h2> Criação de Produtos </h2>
<form method="POST", action="/produtos">
    @csrf
    <input type="text" name="nome"  
    placeholder="Nome do Produto"><br>

    <input type="text" name="descricao"  
    placeholder="Descrição do Produto"><br>

    <input type="text" name="valor"  
    placeholder="Valor do Produto"><br>
    
    <button type="submite"> Cadastrar</button>

</form>
