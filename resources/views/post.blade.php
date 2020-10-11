@extends("master")

@section("title", $post->title)

@section('head')
    @parent
@endsection

@section("main")
    <h1 class="display-3 text-center mb-4">{{ $post->title }}</h1>
    <i class="material-icons text-muted">calendar_today</i><h3 class="card-subtitle mb-2 text-muted d-inline ml-2 align-top">Gepost op {{ (new Carbon\Carbon($post->created_at))->toDateString() }}</h3>
    {{ $post->content }}
@endsection