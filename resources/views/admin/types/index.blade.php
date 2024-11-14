@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Types</h1>
    <a href="{{ route('admin.types.create') }}" class="btn btn-primary mb-4">Add New Type</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
            <tr>
                <td>{{ $type->id }}</td>
                <td>{{ $type->name }}</td>
                <td>
                    <a href="{{ route('admin.types.show', $type->id )}}" class="btn btn-primary btn-sm">Show</a>
                    <a href="{{ route('admin.types.edit', $type->id )}}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm delete-type"
                            data-type-name="{{ $type->name }}">Delete</button>
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
    @vite('resources/js/delete-type.js')
</script>
@endsection
