<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RHLivre</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="shortcut icon" href="{{ asset('assets/img/Logo.ico') }}" size="96x96" type="image/x-icon">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50">
    
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <div class="w-32 h-auto">
                    <img src="{{ asset('assets/img/Matt_Zhang-removebg-preview.png') }}" alt="">
                </div>
                <div class="flex gap-3">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-5 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                                Entrar
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                    Cadastrar
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main>
        <!-- Hero -->
        <section class="py-20 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-5xl font-bold text-gray-900 mb-6">
                    Gerencie sua equipe<br>de forma simples
                </h2>
                <p class="text-xl text-gray-600 mb-8">
                    Controle funcionários, departamentos, férias e avaliações em um único sistema.
                </p>
                @guest
                    <a href="{{ route('register') }}" class="inline-block px-8 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                        Começar agora
                    </a>
                @else
                    <a href="{{ url('/dashboard') }}" class="inline-block px-8 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                        Ir para o sistema
                    </a>
                @endguest
            </div>
        </section>

        <!-- Features -->
        <section class="py-16 px-4 bg-white">
            <div class="max-w-6xl mx-auto">
                <h3 class="text-3xl font-bold text-center mb-12">O que você pode fazer</h3>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Funcionários</h4>
                        <p class="text-gray-600">Cadastre e organize todos os dados dos colaboradores.</p>
                    </div>

                    <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-green-100 rounded-lg mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Departamentos</h4>
                        <p class="text-gray-600">Estruture as áreas da sua empresa.</p>
                    </div>

                    <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Cargos</h4>
                        <p class="text-gray-600">Defina funções e salários base.</p>
                    </div>

                    <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Avaliações</h4>
                        <p class="text-gray-600">Acompanhe o desempenho da equipe.</p>
                    </div>

                    <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-red-100 rounded-lg mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Férias e Licenças</h4>
                        <p class="text-gray-600">Controle períodos de ausência.</p>
                    </div>

                    <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Relatórios</h4>
                        <p class="text-gray-600">Visualize dados importantes da empresa.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="py-16 px-4">
            <div class="max-w-5xl mx-auto">
                <div class="bg-blue-600 rounded-2xl p-12 text-white text-center">
                    <h3 class="text-3xl font-bold mb-4">Sistema completo de RH</h3>
                    <p class="text-xl mb-8 text-blue-100">
                        Tudo que você precisa para gerenciar pessoas em um só lugar
                    </p>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-8">
                        <div>
                            <div class="text-4xl font-bold">100%</div>
                            <div class="text-blue-200">Gratuito</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold">5</div>
                            <div class="text-blue-200">Módulos</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold">∞</div>
                            <div class="text-blue-200">Usuários</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold">24/7</div>
                            <div class="text-blue-200">Disponível</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-20 px-4 bg-white">
            <div class="max-w-3xl mx-auto text-center">
                <h3 class="text-4xl font-bold mb-4">Comece hoje mesmo</h3>
                <p class="text-xl text-gray-600 mb-8">
                    Cadastre-se gratuitamente e organize sua equipe agora
                </p>
                @guest
                    <a href="{{ route('register') }}" class="inline-block px-10 py-4 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                        Criar minha conta
                    </a>
                @else
                    <a href="{{ url('/dashboard') }}" class="inline-block px-10 py-4 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700">
                        Acessar o sistema
                    </a>
                @endguest
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>© {{ date('Y') }} Sistema RH</p>
        </div>
    </footer>

</body>
</html>