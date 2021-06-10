@extends('layouts.base')

@section('content')
    <div class="container rounded shadow mb-5">
        <form class="mb-3" method="POST" action="{{ route('products.update', $product->id) }}">
            @method('PUT')
            @csrf
            <h1>Editar</h1>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" name="name" value="{{ $product->name }}">
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio</label>
              <input type="text" class="form-control" id="precio" aria-describedby="emailHelp" name="price" value="{{ $product->price }}">
            </div>
            <div class="mb-3">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="description" style="height: 100px">{{ $product->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
@endsection
