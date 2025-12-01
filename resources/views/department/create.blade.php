<x-app-layout>
<h1>Cadastrar departamentos</h1>

    <form action="{{ route('department.store') }}" method="POST">
        @csrf
        <label for="nome_departamento">Nome do departamento:</label>
        <input type="text" name="nome_departamento" id="nome_departamento" /><br />

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao"/><br />

        <button type="submit">Enviar</button>
    </form>
</x-app-layout>