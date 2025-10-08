{{-- @extends('layouts.app')

@section('content')
<h1>Listagem dos Posts</h1>

@forelse ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <h2>{{ $post->id }}</h2>
    <a href="{{ route('posts.show', $post->id)}}">Detalhes</a>
    <hr>
@empty
    <p>Nenhum Post Cadastrado</p>
@endforelse

<div class="py-4">
    {!! $posts->links() !!}
</div>

@endsection --}}

@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-primary">Listagem de Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Novo Post
            </a>
        </div>

        @forelse ($posts as $post)
            <div class="card mb-4 shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title mb-1">{{ $post->title }}</h4>
                        </div>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-eye"></i> Ver Detalhes
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-warning text-center mt-5" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i>
                Nenhum post cadastrado.
            </div>
        @endforelse

        <div class="d-flex justify-content-center py-4">
            {!! $posts->links('pagination::bootstrap-5') !!}
        </div>
    </div>
@endsection
