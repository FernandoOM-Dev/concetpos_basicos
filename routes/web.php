<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
//Clients routes
Route::get('home', function () {
    return view('store.home');
})->middleware('auth')->name('home');

Route::get('collection', function () {
    return view('store.collection');
})->middleware('auth')->name('collection');

Route::get('shoes', function () {
    return view('store.shoes');
})->middleware('auth')->name('shoes');

Route::get('racingboots', function () {
    return view('store.racingboots');
})->middleware('auth')->name('racingboots');

Route::get('contact', function () {
    return view('store.contact');
})->middleware('auth')->name('contact');

//Admin Routes
Route::get('products', [ProductController::class, 'index'])->name('products.index')->middleware('auth');
Route::post('products', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::get('products/{slug}', [ProductController::class, 'show'])->name('products.show')->middleware('auth');
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');
Route::delete('prodcuts/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');
Route::get('products/{slug}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');

Route::get('products/{product}/image', [ImageController::class, 'show'])->name('products.image')->middleware('auth');

Route::post('mail/send', [MailController::class, 'store'])->middleware('auth')->name('mail.send');

require __DIR__.'/auth.php';
