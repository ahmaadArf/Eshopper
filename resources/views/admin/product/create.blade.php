@extends('admin.master')
@section('title', 'Add New Product | ' . env('APP_NAME'))
@section('content')

    <h1>Add new Product</h1>
    @include('admin.errors')
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" value="{{ old('price') }}" placeholder="Price" class="form-control">
        </div>
        <div class="mb-3">
            <label>Old Price</label>
            <input type="number" name="oldPrice" value="{{ old('oldPrice') }}" placeholder="Old Price" class="form-control">
        </div>
        <div class="mb-3">
            <label>Size</label>
            <input type="text" name="size" value="{{ old('size') }}" placeholder="Size" class="form-control">
        </div>
        <div class="mb-3">
            <label>Color</label>
            <input type="text" name="color" value="{{ old('color') }}" placeholder="Color" class="form-control">
        </div>
        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control">
                <option value="">Select</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3">
            <label>Description</label>
            <textarea class="myedit" placeholder="Description" name="description">{{ old('description') }}</textarea>
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
