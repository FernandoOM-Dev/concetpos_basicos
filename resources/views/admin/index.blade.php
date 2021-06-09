@extends('layouts.base')

@section('content')

<div class="container rounded shadow mb-5">
    <h1>Zapatos en venta</h1>
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
            <tr>
                <td>1</td>
                <td><img src="images/shoes-img1.png" alt=""></td>
                <td>Zapato de ejemplo</td>
                <td>$32.66</td>
                <td>
                    <div class="row">
                        <div class="col-4">
                            <button type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><img src="images/shoes-img5.png" alt=""></td>
                <td>Zapato de ejemplo</td>
                <td>$32.66</td>
                <td>
                    <div class="row">
                        <div class="col-4">
                            <button type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><img src="images/shoes-img2.png" alt=""></td>
                <td>Zapato de ejemplo</td>
                <td>$32.66</td>
                <td>
                    <div class="row">
                        <div class="col-4">
                            <button type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><img src="images/shoes-img3.png" alt=""></td>
                <td>Zapato de ejemplo</td>
                <td>$32.66</td>
                <td>
                    <div class="row">
                        <div class="col-4">
                            <button type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>

@endsection
