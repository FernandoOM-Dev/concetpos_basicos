<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*Route::get('hola', function () {
    return 'Hola a todos';
});*/

Route::get('json', function () {
    $persona = [
        'nombre' => 'Fernando',
        'telefono' => '123456'
    ];
    return $persona;
});

Route::get('hola/{nombre?}', [App\Http\Controllers\EjemploController::class, 'saludo']);

Route::get('tablas/{numero}', [App\Http\Controllers\EjemploController::class, 'tablas']);
