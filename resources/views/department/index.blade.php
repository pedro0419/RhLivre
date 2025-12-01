<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('derpartment') }}
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
</x-app-layout>