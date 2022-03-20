@extends('layouts.app')
@section('content')
@section('title', 'Products')
<!-- Start Main Header Page -->
@section('header-page', 'Products')
@section('title-page', 'Add')
<!-- End Main Header Page -->

<div class="jumbotron p-2 m-4">
        <h3 class="">
            <a class="btn btn-primary btn-lg" href="{{route('product.index')}}" role="button">View All Products </a>
        </h3>
    </div>
    <h1 class=" p-3 border display-4">  Add New Product  </h1>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                @include('layouts.inc.message')
                <form class="p-4 m-3 border bg-gradient-info" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="cat">Category</label>
                        <select name="category_id"  class="form-control" id="cat">
                        @foreach ($Categories as $Category)
                        <option value="{{$Category->id}}">{{$Category->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="catname">Product Name</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="catname" >
                    </div>
                    <div class="form-group">
                        <label for="catprice">Product Price</label>
                        <input type="number" name="price" value="{{old('price')}}" class="form-control" id="catprice" >
                    </div>
                    <div class="form-group">
                        <label for="catqty">Product Quantity</label>
                        <input type="number" name="qty" value="{{old('qty')}}" class="form-control" id="catqty" >
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">upload photo</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                      </div>
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a description here" id="des" name="description" style="height: 100px">{{old('description')}}</textarea>
                        <label for="floatingTextarea2">Description</label>
                      </div>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-reply-all-fill"></i> Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
