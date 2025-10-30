<h1>Cadastrar Usuário</h1>

    <form action="{{ route('position.store') }}" method="POST">
        @csrf
        <label for="nome_cargo">Nome do cargo:</label>
        <input type="text" name="nome_cargo" id="nome_cargo" /><br />

        <label for="cpf">Salario base:</label>
        <input type="text" name="salario_base" id="salario_base"/><br />

        <button type="submit">Enviar</button>
    </form>