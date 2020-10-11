@extends("master")

@section("title", "Blog")

@section('head')
    @parent
@endsection

@section("main")
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <h3>Gepost op {{ (new Carbon\Carbon($post->created_at))->toDateString() }}</h3>
        <p>{{ $post->content }}</p>
    @endforeach
    Current page: {{ $posts->render() }}
@endsection