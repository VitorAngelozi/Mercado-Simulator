@if ($produtos->isEmpty())
<p>Sem produtos identificados </p>
@else
    @foreach ($produtos as $produto)
        <p> {{$produto -> nome}} </p>
        <p> {{ $produto -> descricao}} </p>
        <p> {{ $produto -> preco}} </p>
        <p> {{ $produto -> quantidade}} </p>
    @endforeach
@endif