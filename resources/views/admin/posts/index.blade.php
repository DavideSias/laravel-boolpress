@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('deleted'))
            <div class="alert alert-warning">
                Post id: {{ session('deleted')->id }} deleted
            </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Slug</th>
                <th scope="col">Titolo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tags</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a class="text-decoration-none" href="{{ route('admin.categories.show', ['category' => $post->category])}}">{{ $post->category->name ?? '' }}</a>
                    </td>
                    <td>
                        @foreach ($post->tags as $tag)
                            <a class="text-decoration-none" href="{{ route('admin.tags.show', ['tag' => $tag])}}">{{ $tag->name }}{{ $loop->last ? '' : ', '}}</a>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.show', ['post' => $post]) }}" class="btn btn-primary">Visita</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.edit', ['post' => $post]) }}" class="btn btn-warning">Edita</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.posts.destroy', ['post' => $post]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-delete-me" data-id="{{ $post->id }}">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$posts->links()}}
</div>
@endsection