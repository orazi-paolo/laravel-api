@extends('admin.types.layout-types-admin.create-or-edit')

@section('edit-or-create-project', 'Create new Type')

@section('form-action', route('admin.types.store'))

@section('create-or-update', 'Create')

@section('redirect-page')
{{ route('admin.types.index') }}
@endsection

