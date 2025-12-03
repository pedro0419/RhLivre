<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Funcionário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="mb-6">
                        <a href="{{ route('employee.index') }}" 
                           class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Voltar para lista
                        </a>
                    </div>

                    @if ($errors->any())
                        <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                            <div class="flex items-center mb-2">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                                <strong>Ops! Há alguns erros:</strong>
                            </div>
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('employee.update', $employee->id) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="nome" class="block text-sm font-medium text-gray-700 mb-2">
                                Nome <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   name="nome" 
                                   id="nome" 
                                   value="{{ old('nome', $employee->nome) }}"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 @error('nome') border-red-500 @enderror"
                                   required>
                            @error('nome')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="cpf" class="block text-sm font-medium text-gray-700 mb-2">
                                    CPF <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="cpf" 
                                       id="cpf" 
                                       value="{{ old('cpf', $employee->cpf) }}"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 @error('cpf') border-red-500 @enderror"
                                       required>
                                @error('cpf')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="telefone" class="block text-sm font-medium text-gray-700 mb-2">
                                    Telefone <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="telefone" 
                                       id="telefone" 
                                       value="{{ old('telefone', $employee->telefone) }}"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 @error('telefone') border-red-500 @enderror"
                                       required>
                                @error('telefone')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="data_nascimento" class="block text-sm font-medium text-gray-700 mb-2">
                                    Data de Nascimento <span class="text-red-500">*</span>
                                </label>
                                <input type="date" 
                                       name="data_nascimento" 
                                       id="data_nascimento" 
                                       value="{{ old('data_nascimento', $employee->data_nascimento) }}"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 @error('data_nascimento') border-red-500 @enderror"
                                       required>
                                @error('data_nascimento')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="salario" class="block text-sm font-medium text-gray-700 mb-2">
                                    Salário <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="salario" 
                                       id="salario" 
                                       value="{{ old('salario', $employee->salario) }}"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 @error('salario') border-red-500 @enderror"
                                       required>
                                @error('salario')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nome_cargo" class="block text-sm font-medium text-gray-700 mb-2">
                                    Cargo <span class="text-red-500">*</span>
                                </label>
                                <select name="cargo_id" 
                                        id="nome_cargo"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 @error('cargo_id') border-red-500 @enderror"
                                        required>
                                    @foreach ($positions as $position)
                                        <option value="{{ $position->id }}" 
                                            {{ $employee->cargo_id == $position->id ? 'selected' : '' }}>
                                            {{ $position->nome_cargo }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('cargo_id')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="nome_departamento" class="block text-sm font-medium text-gray-700 mb-2">
                                    Departamento <span class="text-red-500">*</span>
                                </label>
                                <select name="departamento_id" 
                                        id="nome_departamento"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 @error('departamento_id') border-red-500 @enderror"
                                        required>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}"
                                            {{ $employee->departamento_id == $department->id ? 'selected' : '' }}>
                                            {{ $department->nome_departamento }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('departamento_id')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex items-center justify-end space-x-3 pt-4">
                            <a href="{{ route('employee.index') }}" 
                               class="px-6 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold rounded-lg transition duration-150">
                                Cancelar
                            </a>
                            <button type="submit" 
                                    class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition duration-150">
                                Salvar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>