<?php

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

// Route::resource('products', ProductController::class)->only(['index', 'create', 'store', 'update', 'destroy']);


Route::get('/products', function () {
    return view('products');
})->middleware(['auth'])->name('products');

Route::post('/products');

require __DIR__.'/auth.php';
