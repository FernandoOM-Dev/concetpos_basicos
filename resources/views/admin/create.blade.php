@extends('layouts.base')

@section('content')
<!-- contact section start -->
<div class="collection_text">Nuevo producto</div>
<div class="layout_padding contact_section">
    <div class="container rounded shadow mb-5">
        <form class="mb-3" method="POST" action="{{ route('products.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="name">
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio</label>
              <input type="text" class="form-control" id="precio"  name="price">
            </div>
            <div class="mb-3">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" style="height: 100px" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Agregar imagen</label>
                <input class="form-control" type="file" id="image" name="image">
              </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
<!-- contact section end -->
@endsection
