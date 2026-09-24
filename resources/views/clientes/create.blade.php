<h3>Criar Novo Cliente</h3>
<form action="{{ url('clientes/create') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="senha"> Senha: </label>
    <input type="password" name="senha" id="senha" required>
    
    <button type="submit">Criar Cliente</button>
</form>