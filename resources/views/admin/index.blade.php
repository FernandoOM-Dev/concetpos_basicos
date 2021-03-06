@extends('layouts.base')

@section('content')

<div class="container rounded shadow mb-5">
    <h1>Zapatos en venta</h1>
    @if (Session::has('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('message') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Imagen</th>
              <th scope="col">Nombre</th>
              <th scope="col">Precio</th>
              <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product )
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><img src="{{ route('products.image', $product->id) }}" alt="" style="width: 100px;"></td>
                    <td>{{ $product->name }}</td>
                    <td>${{ $product->price }}</td>
                    <td>
                        <div class="row">
                            <div class="col-4">
                                <a href="{{ route('products.show', $product->slug) }}">
                                    <button type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></button>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="{{ route('products.edit', $product->slug) }}">
                                    <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                </a>
                            </div>
                            <div class="col-4">
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
