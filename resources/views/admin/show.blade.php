@extends('layouts.base')

@section('content')

<div class="container rounded shadow mb-5">
    <h1>Información del producto</h1>
    <div class="row">
        <div class="col-4">
            <img src="images/shoes-img1.png" alt="">
        </div>
        <div class="col-8">
            <h5>ID:</h5>
            <p>1</p>
            <h5>Nombre:</h5>
            <p>Zapato de ejemplo</p>
            <h5>Precio:</h5>
            <p>$35</p>
            <h5>Descripción:</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam fugit, nemo, quas cum nostrum vero dolores a ducimus facilis aperiam molestias ad quia est earum illum culpa inventore dicta nisi!</p>
        </div>
    </div>
</div>

@endsection
