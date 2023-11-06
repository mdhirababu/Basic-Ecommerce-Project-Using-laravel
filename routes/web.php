<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/shop/{c}', [HomeController::class, "shop"])->name('shop');
Route::get('/single', [HomeController::class, "single"])->name('mingle');
Route::get('/product-details/{id}', [HomeController::class, "productDetails"])->name('details');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/add-product', [AdminController::class, "addProduct"])->name('add.product');
    Route::get('/dashboard', [AdminController::class, "index"])->name('dashboard');
    Route::get('/add-category', [AdminController::class, "addCategory"])->name('add.category');
    Route::get('/manage-product', [AdminController::class, "manageProduct"])->name('manage.product');
    Route::post('/store-category', [AdminController::class, "store"])->name('category.store');
    Route::post('/store-product', [AdminController::class, "pstore"])->name('product.store');
    Route::get('/edit-product/{product}', [AdminController::class, "pedit"])->name('product.edit');
    Route::post('/update-product/{p}', [AdminController::class, "pupdate"])->name('product.update');
    Route::get('/delete-product/{p}', [AdminController::class, "pdelete"])->name('product.delete');
});
