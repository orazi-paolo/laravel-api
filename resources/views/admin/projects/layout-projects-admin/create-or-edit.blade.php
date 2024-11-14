@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>@yield('edit-or-create-project')</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="@yield('form-action')" method="POST" enctype="multipart/form-data">
        @csrf
        @yield('form-method')
        <p>Technologies:</p>
        <div class="mb-3">
        @foreach($technologies as $technology)
            <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
            @if (in_array($technology->id, old('technologies', $project->technologies->pluck('id')->toArray())))
                checked
            @endif>
            <label class="me-2">{{ $technology->name }}</label>
        @endforeach
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}">
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Type</label>
            <select name="type_id" id="type_id" class="form-control">
                @foreach ($types as $type)
                <option value="{{ $type->id }}"
                    @if (old('type_id', $project->type_id) == $type->id)
                    selected
                    @endif>
                    {{ $type->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description"
                value="{{ old('description', $project->description) }}">
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Url</label>
            <input type="text" class="form-control" id="url" name="url" value="{{ old('url', $project->url) }}">
        </div>
        <div class="mb-3">
            <label for="image_url" class="form-label">Image URL</label>
            <input type="file" class="form-control" id="image_url" name="image_url">
        </div>
        <button type="submit" class="btn btn-primary">@yield('create-or-update')</button>
        <a href="@yield('redirect-page')" class="btn btn-secondary">Return</a>
    </form>
</div>
@endsection
