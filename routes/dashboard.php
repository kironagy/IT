<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->middleware(['auth'])->group(function () {

    //    Pages Dashboard
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('/customText/Home', [PageController::class, 'index'])->name('admin.custom-text.home');
    Route::get('/users', [UserController::class, 'index'])->name('admin.users');
    Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');

    Route::post('/customText/Home', [PageController::class, 'update'])->name('admin.custom-text.update');
});
Route::get('/{page}', [AdminController::class, 'index']);
