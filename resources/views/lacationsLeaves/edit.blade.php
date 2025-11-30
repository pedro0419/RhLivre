<h1>Editar Funcionario</h1>

    <form action="{{ route('lacations-leaves.update', $lacationsLeave->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="tipo_ferias">TIPO DE FERIAS:</label>
            <input type="text" name="tipo_ferias" value="{{ old('tipo_ferias', $lacationsLeave->tipo_ferias) }}">
        </div>

        <div>
            <label for="data_inicio">DATA DE INICIO:</label>
            <input type="data" name="data_inicio" value="{{ old('data_inicio', $lacationsLeave->data_inicio) }}">
        </div>

        <div>
            <label for="data_fim">DATA DE FIM:</label>
        <input type="data" name="data_fim"  value = "{{ old('data_fim', $lacationsLeave->data_fim) }}"/><br />
        </div>

        <div>
            <label for="observacoes">OBSERVAÇÕES:</label>
        <input type="text" name="observacoes"  value = "{{ old('observacoes', $lacationsLeave->observacoes) }}"/><br />
        </div>

        <div>
            <label for="nome_cargo">FUNCIONARIO:</label>
            <select name="employee_id" id="nome">
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->nome }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Salvar">
    </form>