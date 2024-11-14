@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Projects</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Url</th>
                <th>Technologies</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->url }}</td>
                <td>
                    @foreach($project->technologies as $technology)
                    <span class="badge bg-primary">{{ $technology->name }}</span>
                    @endforeach
                </td>
                <td>{{ $project->type->name }}</td>
                <td>
                    <a href="{{ route('guest.projects.show', $project->id )}}" class="btn btn-primary btn-sm">Show</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
