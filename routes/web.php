<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [ProjectController::class, 'index'])->name('home');

Route::get('/products', [ProjectController::class, 'products'])
->name('products');

Route::get('/single-product', [ProjectController::class, 'singleProduct'])
->name('singleProduct');


Route::get('/about-us', [ProjectController::class, 'about'])
->name('about');
Route::get('/contact-us', [ProjectController::class, 'contact'])
->name('contact');

Route::get('/newest', [ProductController::class, 'newest'])
->name('newestProducts');

Route::get('/lowest-price', [ProductController::class, 'lowestPrice'])
->name('lowestPrice');

Route::get('/highest-price', [ProductController::class, 'highestPrice'])
->name('highestPrice');

Route::get('/men', [ProductController::class, 'menClothing'])
->name('menClothing');

Route::get('/women', [ProductController::class, 'womenClothing'])
->name('womenClothing');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::post('/add_to_cart', [CartController::class, 'addToCart'])->name('addToCart');


Route::post('/remove-from-cart/{id}',[CartController::class, 'removeFromCart'])
->name('removeFromCart');

Route::post('/edit-product-quantity/{id}',[CartController::class, 'edit_product_quantity'])
->name('editProductQuantity');

Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::post('/place-order',[OrderController::class, 'placeOrder'])->name('placeOrder');
Route::get('/place-order', function(){
    return redirect('/');
});

Route::get('/payment', [OrderController::class, 'payment'])->name('payment');

Route::get('/verify_payment/{transaction_id}', [OrderController::class, 'verifyPayment'])
->name('verifyPayment');

Route::get('/complete_payment', [OrderController::class, 'completePayment'])
->name('completePayment');

Route::get('/thank_you', [OrderController::class, 'thankYou'])
->name('thankYou');

