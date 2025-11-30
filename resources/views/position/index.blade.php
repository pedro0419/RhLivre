<h1>Cargos</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do cargo</td>
                <th>Salario Base</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($positions as $position)
                    <tr>
                        <td>{{ $position->id }}</td>
                        <td>{{ $position->nome_cargo }}</td>
                        <td>{{ $position->salario_base }}R$</td>
                        <td>
                            <a href="{{ route('position.edit', $position->id)}}"><button>Editar</button></a>
                            <form action="{{ route('position.delete', $position->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Excluir" >
                            </form>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>

    <button><a href="{{ route('position.create') }}">Cadastrar</a></button>