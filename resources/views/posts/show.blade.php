{{-- @extends('layouts.app')

@section('content')
    <h1>Detalhes do Post: {{ $post->Title }}</h1>

    <div>
        <h2>{{ $post->body }}</h2>
    </div>

    <div>
        <h3>Comentários ({{ $post->comments->count() }})</h3>
        @foreach ($post->comments as $comment)
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <p>
                    <b>{{ $autor }} comentou:</b>
                    {{ $comment->title }} - {{ $comment->body }}
                </p>
            </div>
        @endforeach
    </div>

    @include('posts.comments.comment')
@endsection --}}

@extends('layouts.app')

@section('content')
    <div class="container py-5">

        {{-- Cabeçalho do Post --}}
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body">
                <h1 class="card-title text-primary mb-3">
                    Detalhes do Post: <span class="fw-bold">{{ $post->title }}</span>
                </h1>
                <p class="card-text fs-5 text-secondary">{{ $post->body }}</p>
            </div>
        </div>

        {{-- Comentários --}}
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body">
                <h3 class="card-title text-dark mb-4">
                    <i class="bi bi-chat-dots-fill text-primary"></i>
                    Comentários ({{ $post->comments->count() }})
                </h3>

                @forelse ($post->comments as $comment)
                    <div class="card mb-3 border-0 border-start border-4 border-primary shadow-sm">
                        <div class="card-body">
                            <h5 class="mb-1">
                                <i class="bi bi-person-circle text-secondary"></i>
                                <strong>{{ $comment->author ?? 'Usuário Anônimo' }}</strong> comentou:
                            </h5>
                            <p class="mb-1 text-muted">{{ $comment->title }}</p>
                            <p class="mb-0">{{ $comment->body }}</p>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-secondary text-center" role="alert">
                        Nenhum comentário disponível.
                    </div>
                @endforelse
            </div>
        </div>

        {{-- Formulário de Novo Comentário --}}
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h4 class="card-title mb-3 text-success">
                    <i class="bi bi-pencil-square"></i> Adicionar Comentário
                </h4>
                @include('posts.comments.comment')
            </div>
        </div>

    </div>
@endsection
