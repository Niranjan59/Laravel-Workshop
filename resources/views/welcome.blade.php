@extends('layouts.master')


@section('home')

    <div class="my-5">
        <h2 class="font-bold text-center ">Our Products</h2>
        <div class="grid grid-cols-3 px-16">
            @foreach ($products as $product)
            <div class="bg-gray-400 m-5 p-5 rounded-lg shadow-lg">
                <p class="font-bold">{{ $product->name}}</p>
                <p>Rs. {{ $product->rate}}/-</p>
                <p>Available stock: {{ $product->stock}} pcs</p>
                <p>Description: {{$product->description}}</p>
            </div>

           
                
            @endforeach
           
        </div>
        <form class="w-6/12 bg-blue-200 p-6 mx-auto rounded-lg" action="{{ route('product.store')}}" method="POST">
            @csrf
            <h2 class="font-bold text-center my-6">Add Product</h2>
            <input class="bg-gray-200 m-2 w-full p-2" type="text" name="name" placeholder="Product Name">
            <input class="bg-gray-200 m-2 w-full p-2" type="number" name="stock" placeholder="Stocks">
            <input class="bg-gray-200 m-2 w-full p-2" type="number" name="rate" placeholder="Rate">
            <input class="bg-gray-200 m-2 w-full p-2" type="text" name="description" placeholder="Description">

            <input class="bg-blue-500 text-white p-2 rounded-lg" type="submit" value="Add Product">
        </form>
    </div>

    <h2>Welcome {{ $products }}</h2>
    <img style="height: 250px; width: 250px; "src="{{ asset('images/1.jpg')}}" alt="">
@endsection 