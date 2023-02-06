@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.tags.store') }}" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                <div class="invalid-feedback">
                    @error('name')
                        <ul>
                            @foreach ($errors->get('name') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <div class="row">
                    <div class="col-9">
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
                        <div class="invalid-feedback">
                            @error('slug')
                                <ul>
                                    @foreach ($errors->get('slug') as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <button type="button" class="btn btn-primary">Genera slug</button>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Crea Tag</button>
            </div>
        </form>
    </div>
@endsection
