@extends('layouts.app')

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

@endsection