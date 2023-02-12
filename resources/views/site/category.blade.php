@extends('site.master')
@section('title','Category Products | '.env('APP_NAME'))

@section('nav')
<nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
@stop
@section('content')
    <!-- Page Header Start -->
 @include('site.parts.header',['title'=>$category->name,'name'=>$category->name])
    <!-- Page Header End -->


    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">

            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">

                    @foreach ($category->Products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        @include('site.parts.product')
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->

@stop
