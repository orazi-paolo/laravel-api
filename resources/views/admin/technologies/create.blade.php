@extends('admin.technologies.layout-technology-admin.create-or-edit')

@section('edit-or-create-project')
Create new technology
@endsection

@section('form-action')
{{ route('admin.technologies.store') }}
@endsection

@section('create-or-update')
Create
@endsection

@section('redirect-page')
{{ route('admin.technologies.index') }}
@endsection


