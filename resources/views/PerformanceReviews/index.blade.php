<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('performance_reviews') }}
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
                <th>Nota</td>
                <th>Data da avaliação</th>
                <th>Observações</th>
                <th>NOME DO FUNCIONARIO</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($PerformanceReviews as $PerformanceReview)
                    <tr>
                        <td>{{ $PerformanceReview->id }}</td>
                        <td>{{ $PerformanceReview->nota }}</td>
                        <td>{{ $PerformanceReview->data_avaliacao }}</td>
                        <td>{{ $PerformanceReview->observacao }}</td>
                        <div>
                            @foreach ($employees as $employee)
                                @if ($PerformanceReview->id_employee == $employee->id)
                                    <td>{{ $employee->nome }}</td>
                                @endif
                            @endforeach
                        </div>
                        <td>
                            <a href="{{ route('Performance-Reviews.edit', $PerformanceReview->id)}}"><button>Editar</button></a>
                            <form action="{{ route('Performance-Reviews.delete', $PerformanceReview->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Excluir" >
                            </form>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>

    <button><a href="{{ route('Performance-Reviews.create') }}">Cadastrar</a></button>
</x-app-layout>