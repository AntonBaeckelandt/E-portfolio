@extends("master")

@section("title", "Blog")

@section('head')
    @parent
@endsection

@section("main")
    <h1 class="display-3 text-center mb-4">Blog</h1>
    <div class="row justify-content-between mb-3">
        @foreach($posts as $post)
        <article class="card mb-3">
            <div class="card-header">
                <h4 class="card-title h3 mb-3 text-truncate"><a href="{{ route('post', $post->id) }}" class="text-dark">{{ $post->title }}</a></h4>
                <div>
                    <i class="material-icons text-muted h6">calendar_today</i><h5 class="h6 card-subtitle mb-2 text-muted d-inline ml-2 align-top">Gepost op {{ (new Carbon\Carbon($post->created_at))->toDateString() }}</h5>
                </div>
                <p class="card-text">{{ $post->description }}</p>
            </div>
            <div class="card-body pt-2  d-flex flex-column justify-content-between">
                <img class="card-img-top px-3 mb-3 mt-2" src="/image/posts/{{ $post->image }}" alt="{{ $post->title }}" title="{{ $post->title }}">

                @if (!empty($post->event_name))
                    <ul class="event-data px-0 mb-0">
                        <li class="mb-2"><span class="material-icons">record_voice_over</span><span class="ml-2 align-top">{{ $post->event_name }}</span></li>
                        <li class="mb-2"><span class="material-icons">today</span><span class="ml-2 align-top">{{ (new Carbon\Carbon($post->event_date))->toDateString() }}</span></li>
                        <li class="mb-0"><span class="material-icons">place</span><span class="ml-2 align-top">{{ $post->event_location }}</span></li>
                    </ul>
                @endif

            </div>
            <a href="{{ route('post', $post->id) }}" class="btn btn-success mt-auto ml-auto mr-auto mb-2">Lees meer</a>
        </article>
        @endforeach
    </div>
    <div class="row pagination">
        {{ $posts->render() }}
    </div>
@endsection
