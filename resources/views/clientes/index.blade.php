<h1>Lista de Clientes</h1>
<a href="{{route('clientes.create')}}">Cadastrar Novo Cliente</a>

@if(session('sucess'))
<p>{{ session('sucess')}}</p>
@endif


<ul>
    @foreach($clientes as $cliente)

    <li>
        {{ $cliente->nome}} - {{ $cliente->email}}
        <a href="{{ route('clientes.edit', $cliente->id)}}">Editar</a>
        <form action="{{route('clientes.destroy', $cliente->id)}}"method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </li>
    @endforeach

</ul>