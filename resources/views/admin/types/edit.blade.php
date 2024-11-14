@extends('admin.types.layout-types-admin.create-or-edit')

@section('edit-or-create-project', 'Edit Type')

@section('form-action',)
{{ route('admin.types.update', $type->id) }}
@endsection

@section('form-method')
    @method('PUT')
@endsection

@section('create-or-update', 'Update')

@section('redirect-page')
{{ route('admin.types.index') }}
@endsection
