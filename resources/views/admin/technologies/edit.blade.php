@extends('admin.technologies.layout-technology-admin.create-or-edit')

@section('edit-or-create-project')
Edit technology
@endsection

@section('form-action')
{{ route('admin.technologies.update', $technology->id) }}
@endsection

@section('form-method')
@method('PUT')
@endsection

@section('create-or-update')
Update
@endsection

@section('redirect-page')
{{ route('admin.technologies.index') }}
@endsection
