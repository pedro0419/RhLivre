<x-app-layout>
<h1>Editar avaliação</h1>

    <form action="{{ route('Performance-Reviews.update', $PerformanceReview->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nota">Nota</label>
            <input type="number" name="nota" value="{{ old('nota', $PerformanceReview->nota) }}">
        </div>

        <div>
            <label for="data_avaliacao">DATA DE INICIO:</label>
            <input type="date" name="data_avaliacao" value="{{ old('data_avaliacao', $PerformanceReview->data_avaliacao) }}">
        </div>

        <div>
            <label for="observacao">OBSERVAÇÕES:</label>
        <input type="text" name="observacao"  value ="{{ old('observacao', $PerformanceReview->observacao) }}"/><br />
        </div>

        <div>
            <label for="nome">FUNCIONARIO:</label>
            <select name="id_employee" id="id_employee">
            @foreach ($employees as $employee)
                <option value="{{ $employee->id }}"
                    {{ $employee->id == $PerformanceReview->id_employee ? 'selected' : '' }}>
                    {{ $employee->nome }}
                </option>
            @endforeach
</select>

        </div>
        <input type="submit" value="Salvar">
    </form>
</x-app-layout>