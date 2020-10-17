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
                <a href="{{ route('post', $post->id) }}" class="btn btn-primary ml-auto mt-auto">Lees meer</a>
            </div>
        </article>
    @endforeach

    <div class="row justify-content-between">
        @foreach($posts as $post)
        <article class="card" style="width: 18rem;">
            <img class="card-img-top px-3" src="/image/posts/{{ $post->image }}" alt="{{ $post->title }}" title="{{ $post->title }}">

            @if (!empty($post->event_name))
            <ul class="event-data px-3 mb-0">
                <li class=""><span class="material-icons">record_voice_over</span><span class="ml-2 align-top">{{ $post->event_name }}</span></li>
                <li class=""><span class="material-icons">today</span><span class="ml-2 align-top">{{ (new Carbon\Carbon($post->event_date))->toDateString() }}</span></li>
                <li class=""><span class="material-icons">place</span><span class="ml-2 align-top">{{ $post->event_location }}</span></li>         
            </ul>
            @endif
            <div class="card-body pt-2">
                <h4 class="card-title">{{ $post->title }}</h4>
                <div>
                    <i class="material-icons text-muted">calendar_today</i><h6 class="card-subtitle mb-2 text-muted d-inline ml-2 align-top">Gepost op {{ (new Carbon\Carbon($post->created_at))->toDateString() }}</h6>
                </div>
                <p class="card-text">{{ $post->description }}</p>
            </div>
            <a href="{{ route('post', $post->id) }}" class="btn btn-primary mt-auto ml-auto mr-auto mb-2">Lees meer</a>
        </article>
        @endforeach
    </div>
  
    {{ $posts->render() }}
@endsection