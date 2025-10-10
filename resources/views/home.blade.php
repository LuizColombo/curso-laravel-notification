@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">

                {{-- Cabeçalho --}}
                <div class="text-center mb-4">
                    <h1 class="fw-bold text-primary">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </h1>
                    <p class="text-muted fs-5">Bem-vindo ao painel de controle do seu Blog Laravel 🚀</p>
                </div>

                {{-- Card principal --}}
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-primary text-white fw-semibold d-flex align-items-center">
                        <i class="bi bi-person-check me-2"></i> Área do Usuário
                    </div>

                    <div class="card-body p-4">
                        {{-- Mensagem de status --}}
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-light p-3 rounded-circle me-3">
                                <i class="bi bi-person-circle fs-1 text-primary"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">{{ Auth::user()->name ?? 'Usuário Logado' }}</h4>
                                <p class="text-muted mb-0">{{ Auth::user()->email ?? 'email@exemplo.com' }}</p>
                            </div>
                        </div>

                        <hr>

                        <p class="fs-5 text-success mb-3">
                            <i class="bi bi-check2-circle"></i> Você está logado com sucesso!
                        </p>

                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ route('posts.index') }}" class="btn btn-outline-primary">
                                <i class="bi bi-journal-text"></i> Ver Posts
                            </a>
                            <a href="{{ route('posts.create') }}" class="btn btn-outline-success">
                                <i class="bi bi-plus-circle"></i> Criar Novo Post
                            </a>
                            <a href="{{ route('logout') }}" class="btn btn-outline-danger"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i> Sair
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Card extra de informações --}}
                <div class="card border-0 shadow-sm mt-4 rounded-4">
                    <div class="card-body">
                        <h5 class="fw-semibold text-secondary mb-3">
                            <i class="bi bi-info-circle-fill text-primary"></i> Dicas Rápidas
                        </h5>
                        <ul class="mb-0">
                            <li>Gerencie seus posts facilmente pelo menu superior.</li>
                            <li>Use o Mailtrap para testar o envio de notificações por e-mail.</li>
                            <li>O sistema é totalmente responsivo e pronto para produção.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
