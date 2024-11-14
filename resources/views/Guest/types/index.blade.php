@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Types</h1>
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
                    <a href="{{ route('guest.types.show', $type->id )}}" class="btn btn-primary btn-sm">Show</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
