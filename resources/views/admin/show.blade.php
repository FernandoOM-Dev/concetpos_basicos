@extends('layouts.base')

@section('content')

<div class="container rounded shadow mb-5">
    <h1>Información del producto</h1>
    <div class="row">
        <div class="col-4">
            <img src="{{ route('products.image', $product->id) }}" alt="">
        </div>
        <div class="col-8">
            <h5>ID:</h5>
            <p>{{ $product->id }}</p>
            <h5>Nombre:</h5>
            <p>{{ $product->name }}</p>
            <h5>Precio:</h5>
            <p>${{ $product->price }}</p>
            <h5>Descripción:</h5>
            <p>{{ $product->description }}</p>
        </div>
    </div>
</div>

@endsection
