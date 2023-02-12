@extends('admin.master')
@section('title', 'Add New Category | ' . env('APP_NAME'))
@section('content')

    <h1>Add new Category</h1>
    @include('admin.errors')
    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image"  class="form-control">
        </div>

        <button class="btn btn-success px-5">Add</button>
    </form>

@stop
