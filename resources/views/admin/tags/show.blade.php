@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">Tag: {{ $tag->name }}</h1>

        <ul>
            Post con questo tag:
            @foreach ($posts as $post)
                <li><a href="{{ route('admin.posts.show', ['post' => $post]) }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
        {{$posts->links()}}
    </div>
@endsection
