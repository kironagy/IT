<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::prefix('/admin')->middleware(['auth'])->group(function () {

    //    Pages Dashboard
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('/customText/Home', [PageController::class, 'index'])->name('admin.custom-text.home');

    // Admin
    Route::get('/users', [UserController::class, 'index'])->name('admin.users')->middleware('isAdmin');
    Route::post('/user/delete', [UserController::class, 'destroy'])->name('admin.users.destroy')->middleware('isAdmin');
    Route::delete('/blogs/{blog}', 'BlogController@destroy')->name('blogs.destroy');
    Route::post('/users', [UserController::class, 'store'])->name('admin.users.store')->middleware('isAdmin');

    //    Category

    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::post('/customText/Home', [PageController::class, 'update'])->name('admin.custom-text.update');

    // blog
    Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blogs')->middleware('isAdmin');
    Route::post('/blogs/store', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::post('/blogs/destroy', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
    Route::post('/blogs/update', [BlogController::class, 'update'])->name('admin.blogs.update');
    /////////////////
    Route::get('/blog_details', function () {
        return view('blog_details');
    })->name('blog_details');
});
Route::get('/{page}', [AdminController::class, 'index']);
