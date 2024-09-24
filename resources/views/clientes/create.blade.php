<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required>

    <label for="email">E-mail:</label>
    <input type="email" name="email" required>

    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" required>

    <label for="endereco">Endereço:</label>
    <input type="text" name="endereco" required>

    <button type="submit">Cadastrar Cliente</button>




</form>