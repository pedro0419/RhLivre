<h1>Cadastro de ferias</h1>

    <form action="{{ route('Performance-Reviews.store') }}" method="POST">
        @csrf
        <label for="nota">NOTA:</label>
        <input type="text" name="nota" id="nota" /><br />

        <label for="data_avaliacao">DATA DA AVALIAÇÃO:</label>
        <input type="date" name="data_avaliacao" id="data_avaliacao" /><br />

        <label for="observacao">OBSERVAÇÕES:</label>
        <input type="text" name="observacao" id="observacao" /><br />

        <label for="">FUNCIONARIO:</label>
        <select name="id_employee" id="nome">
            @foreach ($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->nome }}</option>
            @endforeach
        </select>
        <br>

        <button type="submit">Enviar</button>
    </form>