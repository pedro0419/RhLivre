 <x-app-layout>
 <h1>Cadastrar Usuário</h1>

    <form action="{{ route('employee.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" /><br />

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" /><br />

        <label for="telefone">TELEFONE:</label>
        <input type="text" name="telefone" id="telefone" /><br />

        <label for="data_nascimento">DATA DE NASCIMENTO:</label>
        <input type="date" name="data_nascimento" id="data_nascimento" /><br />

        <label for="salario">SALARIO:</label>
        <input type="text" name="salario" id="salario" /><br />

        <label for="nome_cargo">Cargo:</label>
        <select name="cargo_id" id="nome_cargo">
            @foreach ($positions as $position)
                <option value="{{ $position->id }}">{{ $position->nome_cargo }}</option>
            @endforeach
        </select>
        <br>

        <label for="nome_departamento">Departamento:</label>
        <select name="departamento_id" id="nome_departamento">
            @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->nome_departamento }}</option>
            @endforeach
        </select>
        <br>

        <button type="submit">Enviar</button>
    </form>
</x-app-layout>