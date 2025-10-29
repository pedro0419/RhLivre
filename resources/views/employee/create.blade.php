 <h1>Cadastrar Usuário</h1>

    <form action="{{ route('employee.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" /><br />

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" /><br />

        <label for="cpf">TELEFONE:</label>
        <input type="text" name="telefone" id="telefone" /><br />

        <label for="cpf">DATA DE NASCIMENTO:</label>
        <input type="text" name="data_nascimento" id="data_nascimento" /><br />

        <label for="cpf">SALARIO:</label>
        <input type="text" name="salario" id="salario" /><br />

        <button type="submit">Enviar</button>
    </form>