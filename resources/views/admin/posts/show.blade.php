@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    @if(isset($post->category->name))
    <h2>Nella categoria: {{ $post->category->name }}</h2>
    @endif
    @if ($post->tags)
        Tags:
        @foreach ($post->tags as $tag)
            {{ $tag->name }}{{ $loop->last ? '' : ', '}}
        @endforeach
    @endif
    {{-- <img src="{{ $post->image }}" alt="{{ $post->title }}"> --}}
    <div>
        <img src="{{ asset('storage/' . $post->uploaded_img) }}" alt="{{ $post->title }}">
        <p>
            {{ $post->content }}
        </p>
    </div>
</div>
@endsection
