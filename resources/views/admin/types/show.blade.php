@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Types details</h1>

    <div class="card mb-4">
        <div class="card-header">
            <h2> {{ $type->name }} </h2>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $type->id }}</p>
            <p><strong>Name:</strong> {{ $type->name }}</p>
        </div>
    </div>

    <a href="{{ route('admin.types.index')}}" class="btn btn-primary">Back to list</a>
    <a href=" {{ route('admin.types.edit', $type->id) }}" class="btn btn-warning">Edit type</a>
</div>
@endsection
