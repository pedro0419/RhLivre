<x-app-layout>
<h1>Editar Funcionario</h1>

    <form action="{{ route('position.update', $position->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nome_cargo">Nome do cargo:</label>
            <input type="text" name="nome_cargo" value="{{ old('nome_cargo', ($position->nome_cargo)) }}">
        </div>

        <div>
            <label for="salario_base">Salario base:</label>
            <input type="text" name="salario_base" value="{{ old('salario_base', ($position->salario_base)) }}">
        </div>

        <button type="submit">Salvar</button>
    </form>
</x-app-layout>