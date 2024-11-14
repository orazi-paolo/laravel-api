@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Technologies</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($technologies as $technology)
            <tr>
                <td>{{ $technology->id }}</td>
                <td>{{ $technology->name }}</td>
                <td>
                    <a href="{{ route('guest.technologies.show', $technology->id )}}" class="btn btn-primary btn-sm">Show</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
