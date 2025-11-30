<h1>Licençãs e Ferias</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>TIPO DE FERIAS</th>
                <th>DATA DE INICIO</th>
                <th>DATA DE FIM</th>
                <th>OBSERVAÇÕES</th>
                <th>NOME DO FUNCIONARIO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        
        <tbody>
                @foreach ($lacationsLeaves as $lacationsLeave)
                    <tr>
                        <td>{{ $lacationsLeave->tipo_ferias }}</td>
                        <td>{{ $lacationsLeave->data_inicio }}</td>
                        <td>{{ $lacationsLeave->data_fim }}</td>
                        <td>{{ $lacationsLeave->observacoes }}</td>
                        <div>
                            @foreach ($employees as $employee)
                                @if ($lacationsLeave->employee_id == $employee->id)
                                    <td>{{ $employee->nome }}</td>
                                @endif
                            @endforeach
                        </div>
                        <td>
                            <a href="{{ route('lacations-leaves.edit', $lacationsLeave->id)}}"><button>Editar</button></a>
                            <form action="{{ route('lacations-leaves.delete', $lacationsLeave->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Excluir" >
                            </form>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>

    <button><a href="{{ route('lacations-leaves.create') }}">Cadastrar</a></button>