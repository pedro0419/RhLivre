
    <h1>Funcionarios</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>TELEFONE</th>
                <th>DATA DE NASCIMENTO</th>
                <th>SALARIO</th>
                <th>Ações</th>
            </tr>
        </thead>
        
        <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->nome }}</td>
                        <td>{{ $employee->cpf }}</td>
                        <td>{{ $employee->telefone }}</td>
                        <td>{{ $employee->data_nascimento }}</td>
                        <td>{{ $employee->salario }}</td>
                        <td>
                            <a href="{{ route('employee.edit', $employee->id)}}"><button>Editar</button></a>
                            <form action="{{ route('employee.delete', $employee->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Excluir" >
                            </form>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>

    <button><a href="{{ route('employee.create') }}">Cadastrar</a></button>
