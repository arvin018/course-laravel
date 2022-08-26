@extends('Layout/isGuest')

@section('content')
    <h3>{{ $title }}</h3>
    <div>
        @foreach ($articles as $article)
            <div>
                <h3><a href="/article/{{ $article->id }}">{{ $article->title }}</a></h3>
            </div>
            <hr />
        @endforeach
    </div>
@endsection
