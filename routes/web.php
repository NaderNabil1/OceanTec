<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

// BackEnd routes
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function(){
    // Dashboard route
    Route::any('/dashboard', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard');
    });

    // User routes
    Route::prefix('users')->group(function(){
        Route::any('/', [App\Http\Controllers\Dashboard\UserController::class, 'index'])->name('users');
        Route::any('/add', [App\Http\Controllers\Dashboard\UserController::class, 'add'])->name('add-user');
        Route::any('/edit/{id}', [App\Http\Controllers\Dashboard\UserController::class, 'edit'])->name('edit-user');
        Route::any('/delete/{id}', [App\Http\Controllers\Dashboard\UserController::class, 'delete'])->name('delete-user');
        Route::any('/{id}', [App\Http\Controllers\Dashboard\UserController::class, 'show'])->name('show-user');
    });
    // Admin routes
    Route::prefix('admins')->group(function(){
        Route::any('/', [App\Http\Controllers\Dashboard\AdminController::class, 'index'])->name('be-admins');
        Route::any('/add', [App\Http\Controllers\Dashboard\AdminController::class, 'add'])->name('add-admin');
        Route::any('/edit/{id}', [App\Http\Controllers\Dashboard\AdminController::class, 'edit'])->name('edit-admin');
        Route::any('/delete/{id}', [App\Http\Controllers\Dashboard\AdminController::class, 'delete'])->name('delete-admin');
    });

    // Products routes
    Route::prefix('products')->group(function(){
        Route::any('/', [App\Http\Controllers\Dashboard\ProductController::class, 'index'])->name('be-products');
        Route::any('/add', [App\Http\Controllers\Dashboard\ProductController::class, 'add'])->name('add-product');
        Route::any('/edit/{id}', [App\Http\Controllers\Dashboard\ProductController::class, 'edit'])->name('edit-product');
        Route::any('/delete/{id}', [App\Http\Controllers\Dashboard\ProductController::class, 'delete'])->name('delete-product');
    });
    // Categories routes
    Route::prefix('category')->group(function(){
        Route::any('/', [App\Http\Controllers\Dashboard\CategoryController::class, 'index'])->name('be-categories');
        Route::any('/add', [App\Http\Controllers\Dashboard\CategoryController::class, 'add'])->name('add-category');
        Route::any('/edit/{id}', [App\Http\Controllers\Dashboard\CategoryController::class, 'edit'])->name('edit-category');
        Route::any('/delete/{id}', [App\Http\Controllers\Dashboard\CategoryController::class, 'delete'])->name('delete-category');
    });


// FrontEnd routes
Route::prefix('/')->group(function(){
    // Page routes
    Route::any('/', [App\Http\Controllers\FrontEnd\PageController::class, 'home'])->name('home');
    // Category routes
    Route::prefix('categories')->group(function(){
        Route::any('/', [App\Http\Controllers\FrontEnd\CategoryController::class, 'index'])->name('categories');
        Route::any('/{slug}/products', [App\Http\Controllers\FrontEnd\CategoryController::class, 'products'])->name('products');
        Route::any('/{slug}/products/{prodSlug}', [App\Http\Controllers\FrontEnd\CategoryController::class, 'show'])->name('product-details');
    });

    // Account routes
    Route::any('/edit-account', [App\Http\Controllers\FrontEnd\UserController::class, 'edit'])->name('edit-account');
    Route::any('/reset-password', [App\Http\Controllers\FrontEnd\UserController::class, 'reset_password'])->name('reset-password');
    Route::any('/change-password', [App\Http\Controllers\FrontEnd\UserController::class, 'change_password'])->name('change-password');
});
