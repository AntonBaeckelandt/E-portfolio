@extends("master")

@section("title", "Blog")

@section('head')
    @parent
@endsection

@section("main")
    <h1 class="display-3 text-center mb-4">Blog</h1>
    <div class="row justify-content-between mb-3">
        @foreach($posts as $post)
        <article class="card" style="width: 18rem;">
            <div class="card-header">
                <img class="card-img-top px-3" src="/image/posts/{{ $post->image }}" alt="{{ $post->title }}" title="{{ $post->title }}">

                @if (!empty($post->event_name))
                <ul class="event-data px-3 mb-0">
                    <li><span class="material-icons">record_voice_over</span><span class="ml-2 align-top">{{ $post->event_name }}</span></li>
                    <li><span class="material-icons">today</span><span class="ml-2 align-top">{{ (new Carbon\Carbon($post->event_date))->toDateString() }}</span></li>
                    <li><span class="material-icons">place</span><span class="ml-2 align-top">{{ $post->event_location }}</span></li>         
                </ul>
                @endif
            </div>
            <div class="card-body pt-2">
                <h4 class="card-title h3">{{ $post->title }}</h4>
                <div>
                    <i class="material-icons text-muted">calendar_today</i><h5 class="h6 card-subtitle mb-2 text-muted d-inline ml-2 align-top">Gepost op {{ (new Carbon\Carbon($post->created_at))->toDateString() }}</h5>
                </div>
                <p class="card-text">{{ $post->description }}</p>
            </div>
            <a href="{{ route('post', $post->id) }}" class="btn btn-primary mt-auto ml-auto mr-auto mb-2">Lees meer</a>
        </article>
        @endforeach
    </div>
    <div class="row pagination">
        {{ $posts->render() }}
    </div>
@endsection