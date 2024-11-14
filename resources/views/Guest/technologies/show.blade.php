@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Technology details</h1>

    <div class="card mb-4">
        <div class="card-header">
            <h2> {{ $technology->name }} </h2>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $technology->id }}</p>
            <p><strong>Name:</strong> {{ $technology->name }}</p>
        </div>
    </div>

    <a href="{{ route('guest.technologies.index')}}" class="btn btn-primary">Back to list</a>
</div>
@endsection
