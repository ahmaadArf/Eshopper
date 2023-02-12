@extends('admin.master')
@section('title', 'Edit Client | ' . env('APP_NAME'))
@section('content')

    <h1>Edit Client</h1>
    @include('admin.errors')
    <form action="{{ route('admin.clients.update',$client->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image"  class="form-control">
            <img width="80" src="{{ asset('images/clients/'.$client->image) }}" alt="">

        </div>

        <button class="btn btn-success px-5">Update</button>
    </form>

@stop
