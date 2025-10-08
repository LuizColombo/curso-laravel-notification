<hr>

@if (auth()->check())
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comments.store') }}" method="POST" class="form">
        @csrf

        <input type="hidden" name="post_id" value="{{ $post->id }}">

        <div class="form-group">
            <input type="text" name="title" placeholder="titulo" class="form-control">
        </div>

        <div class="form-group">
            <textarea name="body" cols="80" rows="5" class="form-control" placeholder="Conteúdo"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
@else
    <p>Para comentar, <a href="{{ route('login') }}">faça login</a></p>
@endif
