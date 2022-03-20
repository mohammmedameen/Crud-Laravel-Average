@extends('layouts.app')
@section('content')
@section('title', 'Products')
<!-- Start Main Header Page -->
@section('header-page', 'Products')
@section('title-page', 'All')
<!-- End Main Header Page -->

<div class="jumbotron p-2 m-4">
    <h3 class="">
        <a class="btn btn-success btn-lg" href="{{ route('product.create') }}" role="button">Add New Prodect </a>
    </h3>
</div>
<h1 class=" p-3 border display-4"> All Prodects </h1>
@include('layouts.inc.message')
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Prodect Name</th>
                        <th scope="col">price</th>
                        <th scope="col">qty</th>
                        <th scope="col">image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Products as $Prodect)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>

                            <th scope="row">
                                <a href="{{ route('product.show', $Prodect->slug) }}"
                                    class="text-decoration-none">{{ $Prodect->name }}
                                </a>
                            </th>


                            <th scope="row">{{ $Prodect->price }}</th>
                            <th scope="row">{{ $Prodect->qty }}</th>

                            <th scope="row">
                                <a href="{{ route('product.show', $Prodect->slug) }}" class="text-decoration-none">
                                    <img src="/images/product/{{ $Prodect->image }}" alt="{{ $Prodect->name }}"width="80px">
                                </a>
                            </th>

                            <td>
                                <a href="{{ route('product.edit', $Prodect->id) }}" class="btn btn-info">Edit <i
                                        class="bi bi-pencil-square"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('product.destroy',$Prodect->id) }}" method="POST">
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
