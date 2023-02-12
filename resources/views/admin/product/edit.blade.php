@extends('admin.master')
@section('title', 'Edit Product | ' . env('APP_NAME'))
@section('content')

    <h1>Edit Product</h1>
    @include('admin.errors')
    <form action="{{ route('admin.products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')


        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $product->name }}" placeholder="Name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" value="{{ $product->price }}" placeholder="Price" class="form-control">
        </div>
        <div class="mb-3">
            <label>Old Price</label>
            <input type="number" name="oldPrice" value="{{ $product->oldPrice }}" placeholder="Old Price" class="form-control">
        </div>
        <div class="mb-3">
            <label>Size</label>
            <input type="text" name="size" value="{{ $product->size }}" placeholder="Size" class="form-control">
        </div>
        <div class="mb-3">
            <label>Color</label>
            <input type="text" name="color" value="{{ $product->color }}" placeholder="Color" class="form-control">
        </div>
        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id ==$category->id?'selected':''}}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3">
            <label>Description</label>
            <textarea class="myedit" placeholder="Description" name="description">{{ $product->description }}</textarea>
        </div>


        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image"  class="form-control">
            <img width="80" src="{{ asset('images/products/'.$product->image) }}" alt="">
        </div>

        <button class="btn btn-success px-5">Update</button>
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
