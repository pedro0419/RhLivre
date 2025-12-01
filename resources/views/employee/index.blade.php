<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('employee') }}
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
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>TELEFONE</th>
                <th>DATA DE NASCIMENTO</th>
                <th>SALARIO</th>
                <th>Cargo</th>
                <th>Departamento</th>
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
                        <td>{{ $employee->salario }}R$</td>
                        <div>
                            @foreach ($positions as $position)
                                @if ($employee->cargo_id == $position->id)
                                    <td>{{ $position->nome_cargo }}</td>
                                @endif
                            @endforeach
                        </div>
                        <div>
                             @foreach ($departments as $department)
                                @if ($employee->departamento_id == $department->id)
                                    <td>{{ $department->nome_departamento }}</td>
                                @endif
                            @endforeach
                        </div>
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
</x-app-layout>