@extends('admin.projects.layout-projects-admin.create-or-edit')

@section('edit-or-create-project')
Edit project
@endsection

@section('form-action')
{{ route('admin.projects.update', $project->id) }}
@endsection

@section('form-method')
@method('PUT')
@endsection

@section('create-or-update')
Update
@endsection

@section('redirect-page')
{{ route('admin.projects.index') }}
@endsection
