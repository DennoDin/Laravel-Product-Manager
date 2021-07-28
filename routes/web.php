<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use App\Mail\ProductCreated;

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

Route::get('/products', [ProductController::class, 'index'])->middleware(['auth'])->name('products');

Route::get('/products/create', [ProductController::class, 'create']);

Route::post('/products', [ProductController::class, 'store']);

Route::get('/products/{sku}/edit', [ProductController::class, 'edit']);

Route::put('/products', [ProductController::class, 'update']);

Route::delete('/products', [ProductController::class, 'destroy']);

Route::get('/mail', function() {
    $product = [
        "name" => "dustin",
        "SKU" => "100",
        "description" => "hello world",
    ];
    Mail::to('dustin.andy.tran@gmail.com')->send(new ProductCreated($product));
    return '<h1>Email Sent</h1>';
});

require __DIR__.'/auth.php';
