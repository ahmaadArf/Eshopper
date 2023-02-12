@extends('admin.master')
@section('title', 'Add New Slider | ' . env('APP_NAME'))
@section('content')

    <h1>Add new Slider</h1>
    @include('admin.errors')
    <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Content</label>
            <textarea class="myedit" placeholder="Content" name="content">{{ old('content') }}</textarea>
        </div>


        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image"  class="form-control">
        </div>

        <button class="btn btn-success px-5">Add</button>
    </form>

@stop

@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js" integrity="sha512-tofxIFo8lTkPN/ggZgV89daDZkgh1DunsMYBq41usfs3HbxMRVHWFAjSi/MXrT+Vw5XElng9vAfMmOWdLg0YbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
tinymce.init({
    selector: '.myedit'
})
</script>

@stop
