@extends('admin.projects.layout-projects-admin.create-or-edit')

@section('edit-or-create-project')
Create new project
@endsection

@section('form-action')
{{ route('admin.projects.store') }}
@endsection

@section('create-or-update')
Create
@endsection

@section('redirect-page')
{{ route('admin.projects.index') }}
@endsection


