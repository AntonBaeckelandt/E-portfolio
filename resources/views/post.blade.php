@extends("master")

@section("title", $post->title)

@section('head')
    @parent
@endsection

@section("main")
    <h1 class="display-3 text-center mb-4">{{ $post->title }}</h1>
    <div class="text-center">
        @if (!empty($post->event_name))
            <ul class="event-data px-3 mb-3">
                <li class="d-inline"><span class="material-icons">record_voice_over</span><span class="ml-1 mr-3 align-top">{{ $post->event_name }}</span></li>
                <li class="d-inline"><span class="material-icons">today</span><span class="ml-1 mr-3 align-top">{{ (new Carbon\Carbon($post->event_date))->toDateString() }}</span></li>
                <li class="d-inline"><span class="material-icons">place</span><span class="ml-1 mr-3 align-top">{{ $post->event_location }}</span></li>         
            </ul>
        @endif
    </div>
 {{ $post->content }}
@endsection