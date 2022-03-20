@extends('layouts.app')

@section('content')


@section('title', 'Products')
<!-- Start Main Header Page -->
@section('header-page', 'Products')
@section('title-page', 'Edit')
<!-- End Main Header Page -->


<div class="container">
    <div class="row">


        <div class="jumbotron p-2 m-4">
            <h3 class="">
                <a class="btn btn-primary btn-lg" href="{{ route('category.index') }}" role="button">View All Categories</a>
            </h3>
        </div>
        <h1 class=" p-3 border display-4"> Edit Categoery - {{ $Category->name }}</h1>

        <div class="col-8 mx-auto">


            @include('layouts.inc.message')

            <form class="p-4 m-3 border bg-gradient-info" method="POST" action="{{ route('category.update',$Category->id)}}">


                    @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="cat">Category Name</label>
                    <input type="text" value="{{ $Category->name }}" name="name" class="form-control" id="cat">
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-reply-all-fill"></i> Submit
                </button>
            </form>

        </div>
    </div>
</div>
@endsection
