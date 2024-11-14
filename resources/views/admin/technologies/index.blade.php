@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Admin Technologies</h1>
    <a href="{{ route('admin.technologies.create') }}" class="btn btn-primary mb-4">Add New technology</a>
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
                    <a href="{{ route('admin.technologies.show', $technology->id )}}" class="btn btn-primary btn-sm mb-1">Show</a>
                    <a href="{{ route('admin.technologies.edit', $technology->id )}}" class="btn btn-warning btn-sm mb-1">Edit</a>
                    <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm delete-technology mb-1"
                            data-technology-name="{{ $technology->name }}">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('additional-script')
<script>
    @vite('resources/js/delete-technology.js')
</script>
@endsection
