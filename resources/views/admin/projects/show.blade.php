@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Project details</h1>

    <div class="card mb-4">
        <div class="card-header">
            <img src="{{ asset("/storage/". $project->image_url)}}" alt="{{$project->name}}'s image">
            <h2> {{ $project->name }} </h2>
        </div>
        <div class="card-body">
            <p>
                <strong>Technologies: </strong>
                @foreach ($project->technologies as $technology)
                <span class="badge text-bg-primary"> {{ $technology->name }} </span>
                @endforeach
            </p>
            <p><strong>ID:</strong> {{ $project->id }}</p>
            <p><strong>Name:</strong> {{ $project->name }}</p>
            <p><strong>Type:</strong> {{ $project->type->name }}</p>
            <p><strong>Description:</strong> {{ $project->description }}</p>
            <p><strong>Url:</strong> <a href="{{ $project->url }}">{{ $project->url }}</a></p>
        </div>
    </div>

    <a href="{{ route('admin.projects.index')}}" class="btn btn-primary">Back to list</a>
    <a href=" {{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Edit project</a>
</div>
@endsection
