@extends("master")

@section("title", "Blog")

@section('head')
    @parent
@endsection

@section("main")
    <h1 class="display-3 text-center mb-4">Blog</h1>
    @foreach($posts as $post)
        <article class="card mb-4 flex-row flex-wrap pt-3 pb-3">
            <img src="/image/posts/{{ $post->image }}" alt="{{ $post->title }}" title="{{ $post->title }}" class="mw-25 w-25 mx-3" />
            <div class="card-body px-2 w-25 ml-4 d-flex flex-column">
                <h2 class="card-title">{{ $post->title }}</h2>
                <div>
                    <i class="material-icons text-muted">calendar_today</i><h3 class="card-subtitle mb-2 text-muted d-inline ml-2 align-top">Gepost op {{ (new Carbon\Carbon($post->created_at))->toDateString() }}</h3>
                </div>
                <p class="card-text mw-25 pr-3">{{ $post->description }}</p>
                <a href="{{ route('post', $post->id) }}" class="btn btn-outline-primary ml-auto mt-auto">Lees meer</a>
            </div>
        </article>
    @endforeach

    <article class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </article>
    {{ $posts->render() }}
@endsection