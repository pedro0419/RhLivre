<h1>Cadastro de ferias</h1>

    <form action="{{ route('lacations-leaves.store') }}" method="POST">
        @csrf
        <label for="tipo_ferias">TIPO DE FERIAS:</label>
        <input type="text" name="tipo_ferias" id="tipo_ferias" /><br />

        <label for="data_inicio">DATA DE INICIO:</label>
        <input type="date" name="data_inicio" id="data_inicio" /><br />

        <label for="data_fim">DATA DE FIM:</label>
        <input type="date" name="data_fim" id="data_fim" /><br />

        <label for="observacoes">OBSERVAÇÕES:</label>
        <input type="text" name="observacoes" id="observacoes" /><br />

        <label for="">FUNCIONARIO:</label>
        <select name="employee_id" id="nome">
            @foreach ($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->nome }}</option>
            @endforeach
        </select>
        <br>

        <button type="submit">Enviar</button>
    </form>