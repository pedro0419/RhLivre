<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Hero Section com Gráfico Visual -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900">Olá, {{ Auth::user()->name }}!</h1>
                            <p class="text-gray-600 mt-1">Visão geral do sistema de RH - {{ now()->format('d/m/Y') }}</p>
                        </div>
                    </div>

                    <!-- Estatísticas em Grid Horizontal -->
                    <div class="grid grid-cols-2 lg:grid-cols-5 gap-4">
                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-600 rounded-lg opacity-75 group-hover:opacity-100 transition duration-300"></div>
                            <div class="relative p-6 bg-white bg-opacity-90 rounded-lg">
                                <div class="text-center">
                                    <p class="text-sm font-semibold text-gray-600 uppercase tracking-wide">Funcionários</p>
                                    <p class="text-4xl font-extrabold text-gray-900 mt-2">{{ $totalEmployees ?? 0 }}</p>
                                    <div class="mt-3 flex justify-center">
                                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-lg opacity-75 group-hover:opacity-100 transition duration-300"></div>
                            <div class="relative p-6 bg-white bg-opacity-90 rounded-lg">
                                <div class="text-center">
                                    <p class="text-sm font-semibold text-gray-600 uppercase tracking-wide">Departamentos</p>
                                    <p class="text-4xl font-extrabold text-gray-900 mt-2">{{ $totalDepartments ?? 0 }}</p>
                                    <div class="mt-3 flex justify-center">
                                        <svg class="w-6 h-6 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-r from-violet-400 to-violet-600 rounded-lg opacity-75 group-hover:opacity-100 transition duration-300"></div>
                            <div class="relative p-6 bg-white bg-opacity-90 rounded-lg">
                                <div class="text-center">
                                    <p class="text-sm font-semibold text-gray-600 uppercase tracking-wide">Cargos</p>
                                    <p class="text-4xl font-extrabold text-gray-900 mt-2">{{ $totalPositions ?? 0 }}</p>
                                    <div class="mt-3 flex justify-center">
                                        <svg class="w-6 h-6 text-violet-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-r from-amber-400 to-amber-600 rounded-lg opacity-75 group-hover:opacity-100 transition duration-300"></div>
                            <div class="relative p-6 bg-white bg-opacity-90 rounded-lg">
                                <div class="text-center">
                                    <p class="text-sm font-semibold text-gray-600 uppercase tracking-wide">Avaliações</p>
                                    <p class="text-4xl font-extrabold text-gray-900 mt-2">{{ $totalReviews ?? 0 }}</p>
                                    <div class="mt-3 flex justify-center">
                                        <svg class="w-6 h-6 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-r from-rose-400 to-rose-600 rounded-lg opacity-75 group-hover:opacity-100 transition duration-300"></div>
                            <div class="relative p-6 bg-white bg-opacity-90 rounded-lg">
                                <div class="text-center">
                                    <p class="text-sm font-semibold text-gray-600 uppercase tracking-wide">Férias/Licenças</p>
                                    <p class="text-4xl font-extrabold text-gray-900 mt-2">{{ $totalLeaves ?? 0 }}</p>
                                    <div class="mt-3 flex justify-center">
                                        <svg class="w-6 h-6 text-rose-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu de Navegação Rápida em Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Gestão de Pessoas -->
                <div class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <div class="p-6 text-white">
                        <div class="flex items-center mb-4">
                            <div class="p-3 bg-white bg-opacity-20 rounded-lg">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                                </svg>
                            </div>
                            <h3 class="ml-3 text-xl font-bold">Gestão de Pessoas</h3>
                        </div>
                        <p class="text-blue-100 text-sm mb-6">Gerencie funcionários e suas informações</p>
                        <div class="space-y-2">
                            <a href="{{ route('employee.index') }}" class="block w-full text-left px-4 py-2 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg transition duration-150">
                                → Ver Funcionários
                            </a>
                            <a href="{{ route('employee.create') }}" class="block w-full text-left px-4 py-2 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg transition duration-150">
                                → Cadastrar Novo
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Estrutura Organizacional -->
                <div class="bg-gradient-to-br from-emerald-500 to-emerald-700 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <div class="p-6 text-white">
                        <div class="flex items-center mb-4">
                            <div class="p-3 bg-white bg-opacity-20 rounded-lg">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="ml-3 text-xl font-bold">Estrutura</h3>
                        </div>
                        <p class="text-emerald-100 text-sm mb-6">Departamentos e cargos da empresa</p>
                        <div class="space-y-2">
                            <a href="{{ route('department.index') }}" class="block w-full text-left px-4 py-2 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg transition duration-150">
                                → Ver Departamentos
                            </a>
                            <a href="{{ route('department.create') }}" class="block w-full text-left px-4 py-2 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg transition duration-150">
                                → Criar Departamento
                            </a>
                            <a href="{{ route('position.index') }}" class="block w-full text-left px-4 py-2 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg transition duration-150">
                                → Ver Cargos
                            </a>
                            <a href="{{ route('position.create') }}" class="block w-full text-left px-4 py-2 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg transition duration-150">
                                → Criar Cargo
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Avaliações e Ausências -->
                <div class="bg-gradient-to-br from-violet-500 to-violet-700 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <div class="p-6 text-white">
                        <div class="flex items-center mb-4">
                            <div class="p-3 bg-white bg-opacity-20 rounded-lg">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <h3 class="ml-3 text-xl font-bold">Desempenho</h3>
                        </div>
                        <p class="text-violet-100 text-sm mb-6">Avaliações e controle de ausências</p>
                        <div class="space-y-2">
                            <a href="{{ route('Performance-Reviews.index') }}" class="block w-full text-left px-4 py-2 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg transition duration-150">
                                → Ver Avaliações
                            </a>
                            <a href="{{ route('Performance-Reviews.create') }}" class="block w-full text-left px-4 py-2 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg transition duration-150">
                                → Nova Avaliação
                            </a>
                            <a href="{{ route('lacations-leaves.index') }}" class="block w-full text-left px-4 py-2 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg transition duration-150">
                                → Ver Férias/Licenças
                            </a>
                            <a href="{{ route('lacations-leaves.create') }}" class="block w-full text-left px-4 py-2 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg transition duration-150">
                                → Registrar Férias/Licença
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Informações do Sistema -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Sistema de Gestão de RH</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Plataforma completa para gerenciamento de recursos humanos. Controle funcionários, departamentos, 
                                avaliações de desempenho e muito mais em um só lugar.
                            </p>
                        </div>
                        <div class="ml-6 flex-shrink-0">
                            <div class="text-right">
                                <p class="text-xs text-gray-500 uppercase tracking-wide">Última atualização</p>
                                <p class="text-sm font-semibold text-gray-900">{{ now()->format('H:i') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>