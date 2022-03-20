@extends('layouts.app')
@section('content')
@section('title', 'Categories')
<!-- Start Main Header Page -->
@section('header-page', 'Categories')
@section('title-page', 'All')
<!-- End Main Header Page -->

<div class="jumbotron p-2 m-4">
    <h3 class="">
        <a class="btn btn-success btn-lg" href="{{ route('category.create') }}" role="button">Add New Category </a>
    </h3>
</div>
<h1 class=" p-3 border display-4"> All Categories </h1>
@include('layouts.inc.message')
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categories as $Category)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th scope="row">{{$Category->name}}</th>
                    <td>
                        <a href="{{route('category.edit',$Category->id)}}" class="btn btn-info">Edit <i class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                            <form action="{{route('category.destroy',$Category->id)}}" method="POST">
                                @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
