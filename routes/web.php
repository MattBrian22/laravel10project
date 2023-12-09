<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/about-us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/home', [ProductController::class, 'index']);  
Route::get('/shopping-cart', [ProductController::class, 'productCart'])->name('shopping.cart');
Route::get('/product/{id}', [ProductController::class, 'addProductToCart'])->name('addproduct.to.cart');
Route::patch('/update-shopping-cart', [ProductController::class, 'updateCart'])->name('update.shopping.cart');
Route::delete('/delete-cart-product', [ProductController::class, 'deleteProduct'])->name('delete.cart.product');