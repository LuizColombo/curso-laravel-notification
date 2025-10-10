<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts via Vite -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-light text-dark d-flex flex-column min-vh-100 p-3">
    <div id="app">
        <header class="w-100 mb-4">
            @if (Route::has('login'))
                <nav class="d-flex justify-content-end gap-2">
                    @auth
                        {{-- <a href="{{ route('posts.index') }}" class="btn btn-outline-dark">
                        Posts
                    </a> --}}
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <div class="d-flex justify-content-center w-100">
            <main class="d-flex flex-column-reverse flex-lg-row w-100" style="max-width: 1200px;">

                {{-- Conteúdo principal --}}
                <div class="flex-fill p-4 p-lg-5 bg-white text-dark rounded shadow mb-4 mb-lg-0">
                    <h1 class="fw-bold text-primary mb-3">Blog de Posts com Laravel & Mailtrap</h1>
                    <p class="text-muted fs-5 mb-4">
                        Este é um projeto de exemplo desenvolvido em <strong>Laravel</strong>, demonstrando o uso de
                        recursos de
                        CRUD (Create, Read, Update, Delete) para gerenciamento de posts, além da integração com o
                        <strong>Mailtrap</strong> para envio de e-mails de teste de forma segura e prática.
                    </p>

                    <p class="fs-6">
                        A aplicação inclui funcionalidades como:
                    </p>
                    <ul class="fs-6">
                        <li>Criação e edição de posts com autenticação;</li>
                        <li>Envio automático de e-mails via Mailtrap;</li>
                        <li>Seção de comentários integrada;</li>
                        <li>Paginação elegante com Bootstrap;</li>
                        <li>Layout responsivo e intuitivo.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="{{ route('posts.index') }}" class="btn btn-primary btn-lg shadow-sm">
                            <i class="bi bi-journal-text"></i> Ver Todos os Posts
                        </a>
                        <a href="{{ route('posts.create') }}" class="btn btn-outline-success btn-lg ms-2">
                            <i class="bi bi-plus-circle"></i> Criar Novo Post
                        </a>
                    </div>
                </div>

                {{-- Painel lateral / informações adicionais --}}
                <aside
                    class="p-4 p-lg-5 bg-light rounded shadow-lg ms-lg-4 mb-4 mb-lg-0 d-flex flex-column justify-content-between">
                    <div>
                        <h3 class="fw-semibold text-secondary mb-3">
                            <i class="bi bi-info-circle-fill text-primary"></i> Sobre o Projeto
                        </h3>
                        <p class="text-muted mb-4">
                            Este blog foi criado com o intuito de demonstrar boas práticas no desenvolvimento web
                            com Laravel, incluindo o uso de controllers, rotas nomeadas, Blade templates e
                            integração com serviços externos.
                        </p>
                    </div>

                    <div class="border-top pt-3">
                        <h6 class="text-uppercase text-secondary fw-bold mb-2">Tecnologias Utilizadas</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-danger">Laravel</span>
                            <span class="badge bg-primary">Bootstrap 5</span>
                            <span class="badge bg-dark">PHP 8</span>
                            <span class="badge bg-info text-dark">Mailtrap</span>
                            <span class="badge bg-secondary">MySQL</span>
                        </div>
                    </div>
                </aside>

            </main>
        </div>
    </div>




    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
