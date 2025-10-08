@extends('layouts.app')

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
@endsection
