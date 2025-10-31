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
            <label for="telefone">TELEFONE:</label>
        <input type="text" name="telefone"  value = "{{ old('telefone', $employee->telefone) }}"/><br />
        </div>

        <div>
            <label for="data_nascimento">DATA DE NASCIMENTO:</label>
        <input type="date" name="data_nascimento"  value = "{{ old('data_nascimento', $employee->data_nascimento) }}"/><br />
        </div>

        <div>
            <label for="salario">SALARIO:</label>
        <input type="text" name="salario"  value = "{{ old('salario', $employee->salario) }}"/><br />
        </div>

        <div>
            <label for="nome_cargo">Cargo:</label>
            <select name="cargo_id" id="nome_cargo">
                @foreach ($positions as $position)
                    <option value="{{ $position->id }}">{{ $position->nome_cargo }}</option>
                @endforeach
        </div>
        <input type="submit" value="Salvar">
    </form>