<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())->group(function() {
// Route::group(['prefix' => LaravelLocalization::setLocale()], function() {

    Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified', 'check_user'])->group(function() {
        Route::get('/', [AdminController::class, 'index'])->name('index');

        Route::get('categories/trash', [CategoryController::class, 'trash'])->name('categories.trash');
        Route::get('categories/restore/{id}', [CategoryController::class, 'restore'])->name('categories.restore');
        Route::get('categories/forcedelete/{id}', [CategoryController::class, 'forcedelete'])->name('categories.forcedelete');
        Route::resource('categories', CategoryController::class);

        Route::get('products/trash', [ProductController::class, 'trash'])->name('products.trash');
        Route::get('products/restore/{id}', [ProductController::class, 'restore'])->name('products.restore');
        Route::get('products/forcedelete/{id}', [ProductController::class, 'forcedelete'])->name('products.forcedelete');
        Route::resource('products', ProductController::class);
    });


    Route::get('/', function() {
        return view('welcome');
    })->name('web.index');

    Route::view('not-allowed', 'not-allowed')->name('not-allowed');

    Auth::routes(['verify' => true]);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
