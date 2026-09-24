@if($clientes->isEmpty())
    <p>Nenhum cliente encontrado.</p>
@else
    @foreach($clientes as $cliente)
        <div>
            <h3>Cliente: {{ $cliente->nome }}</h3>
            <p>Email: {{ $cliente->email }}</p>
        </div>
    @endforeach
@endif