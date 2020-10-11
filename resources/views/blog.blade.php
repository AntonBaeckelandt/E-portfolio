@extends("master")

@section("title", "Blog")

@section('head')
    @parent
@endsection

@section("main")
    <h1 class="display-3 text-center mb-4">Blog</h1>
    @foreach($posts as $post)
        <article class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <h3 class="card-subtitle mb-2 text-muted">Gepost op {{ (new Carbon\Carbon($post->created_at))->toDateString() }}</h3>
                <p class="card-text">{{ $post->content }}</p>
            </div>
        </article>
    @endforeach
    {{ $posts->render() }}
@endsection