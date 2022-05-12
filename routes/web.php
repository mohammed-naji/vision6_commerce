<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())->group(function() {
// Route::group(['prefix' => LaravelLocalization::setLocale()], function() {

    Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified', 'check_user'])->group(function() {
        Route::get('/', [AdminController::class, 'index'])->name('index');
    });


    Route::get('/', function() {
        return view('welcome');
    })->name('web.index');

    Route::view('not-allowed', 'not-allowed')->name('not-allowed');

    Auth::routes(['verify' => true]);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
