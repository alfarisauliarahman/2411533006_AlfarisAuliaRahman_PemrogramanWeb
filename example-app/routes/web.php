<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MahasiswaController;

// Routing Dasar
Route::get('/', function () {
    return view('welcome');
});

// Routing Parameter
Route::get('/produk/{id}', function ($id) {
    return 'Produk ID: ' . $id;
});

// Named Route
Route::get('/dashboard', function () {
    return 'Halaman Dashboard';
})->name('dashboard');

// Route Group
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });
    Route::get('/products', function () {
        return 'Data Products';
    });
});

// Route ke UserController
Route::get('/user', [UserController::class, 'index']);

// Resource Route ke ProductController (mencakup index, create, store, show, edit, update, destroy)
Route::resource('products', ProductController::class);

// Resource Route ke MahasiswaController
Route::resource('mahasiswa', MahasiswaController::class);
