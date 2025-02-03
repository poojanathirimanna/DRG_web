<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/',[HomeController::class, 'home']);

Route::get('/dashboard',[HomeController::class, 'login_home'])->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';

// Admin Routes

    //admin dashboard route
    Route::get('admin/dashboard', [HomeController::class, 'index'])-> middleware(([ 'auth', 'admin']));

   
    //product detais routes
    Route::get('product_details/{id}', [HomeController::class, 'product_details']);

    //add to cart
    Route::get('add_cart/{id}', [HomeController::class, 'add_cart'])->middleware(['auth', 'verified']);

    //view cart
    Route::get('mycart', [HomeController::class, 'mycart'])->middleware(['auth', 'verified']);

    //remove cart
    Route::get('remove_cart/{id}', [HomeController::class, 'remove_cart'])->middleware(['auth', 'verified']);

    Route::post('confirm_order', [HomeController::class, 'confirm_order'])->middleware(['auth', 'verified']);

    Route::get('/myorders', [HomeController::class, 'myorders'])->middleware(['auth', 'verified']);

    //product page
    Route::get('product_page', [HomeController::class, 'product_page']);

    // About Us route
    Route::get('/about', [HomeController::class, 'about']);



Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [CustomerProfileController::class, 'show'])->name('profile.show'); // Correct method is 'show'
    Route::post('/profile/update', [CustomerProfileController::class, 'update'])->name('profile.update');
});


// Category Routes
Route::get('/view_category', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/add_category', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories.edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/update_category/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories.destroy/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// Product Routes
Route::get('/view_product', [ProductController::class, 'index'])->name('products.index');
Route::get('/add_product', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/edit_product/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/update_product/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/delete_product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::post('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('product.addToCart');

// Order Routes
Route::get('/view_orders', [OrderController::class, 'view_order'])->name('orders.index');
Route::get('/orders.cancel/{id}', [OrderController::class, 'cancel'])->name('orders.cancel');
Route::get('/orders.deliver/{id}', [OrderController::class, 'deliver'])->name('orders.deliver');

// // Search Route
// Route::get('/search', [SearchController::class, 'search'])->name('products.search');





    



