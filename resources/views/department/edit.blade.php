<x-app-layout>
<h1>Editar Funcionario</h1>

    <form action="{{ route('department.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nome_departamento">Nome do cargo:</label>
            <input type="text" name="nome_departamento" value="{{ old('nome_departamento', ($department->nome_departamento)) }}">
        </div>

        <div>
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" value="{{ old('descricao', ($department->descricao)) }}">
        </div>

        <button type="submit">Salvar</button>
    </form>
</x-app-layout>