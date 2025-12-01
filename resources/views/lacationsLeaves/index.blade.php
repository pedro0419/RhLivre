<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('vacation_leaves') }}
        </h2>
    </x-slot>
    @if (session('success'))
        <div style="padding: 10px; background: #d4edda; color: #155724; border-radius: 5px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

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
</x-app-layout>