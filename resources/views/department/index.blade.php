<h1>Departamentos</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do departamento</td>
                <th>descrições</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{ $department->nome_departamento }}</td>
                        <td>{{ $department->descricao }}</td>
                        <td>
                            <a href="{{ route('department.edit', $department->id)}}"><button>Editar</button></a>
                            <form action="{{ route('department.delete', $department->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Excluir" >
                            </form>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>

    <button><a href="{{ route('department.create') }}">Cadastrar</a></button>