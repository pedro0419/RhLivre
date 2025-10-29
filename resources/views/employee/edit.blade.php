<h1>Editar Funcionario</h1>

    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="{{ old('nome', $employee->nome) }}">
        </div>

        <div>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" value="{{ old('cpf', $employee->cpf) }}">
        </div>

        <div>
            <label for="cpf">TELEFONE:</label>
        <input type="text" name="telefone"  value = "{{ old('telefone', $employee->telefone) }}"/><br />
        </div>

        <div>
            <label for="cpf">DATA DE NASCIMENTO:</label>
        <input type="text" name="data_nascimento"  value = "{{ old('data_nascimento', $employee->data_nascimento) }}"/><br />
        </div>

        <div>
            <label for="cpf">SALARIO:</label>
        <input type="text" name="salario"  value = "{{ old('salario', $employee->salario) }}"/><br />
        </div>

        <button type="submit">Salvar</button>
    </form>