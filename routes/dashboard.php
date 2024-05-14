<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->middleware(['auth'])->group(function () {

    //    Pages Dashboard
    //     Route::get('/', function () {
    //         return view('dashboard.index');
    //     })->name('dashboard');
    Route::get('/', [PageController::class, 'index']);

    Route::get('/customText/Home', [PageController::class, 'index'])->name('admin.custom-text.home');

    // Admin
    Route::get('/users', [UserController::class, 'index'])->name('admin.users')->middleware('isAdmin');
    Route::post('/user/delete', [UserController::class, 'destroy'])->name('admin.users.destroy')->middleware('isAdmin');
    Route::delete('/blogs/{blog}', 'BlogController@destroy')->name('blogs.destroy');
    Route::post('/users', [UserController::class, 'store'])->name('admin.users.store')->middleware('isAdmin');

    //    Category

    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::post('/category/update', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::post('/category/destory', [CategoryController::class, 'destroy'])->name('admin.category.destory');

    Route::post('/customText/Home', [PageController::class, 'update'])->name('admin.custom-text.update');
    Route::post('/customText/destroy', [PageController::class, 'destory'])->name('admin.custom-text.destroy');

    // blog
    Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blogs')->middleware('isAdmin');
    Route::post('/blogs/store', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::post('/blogs/destroy', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
    Route::post('/blogs/update', [BlogController::class, 'update'])->name('admin.blogs.update');

    // Photos
    Route::get('/photos', [\App\Http\Controllers\PhotoController::class, 'index'])->name('admin.photos');
    Route::post('/photos/update', [\App\Http\Controllers\PhotoController::class, 'update'])->name('admin.photos.update');
    //    Team
    Route::get('/team', [\App\Http\Controllers\TeamController::class, 'index'])->name('admin.team');
    Route::post('/team/store', [\App\Http\Controllers\TeamController::class, 'store'])->name('admin.team.store');
    Route::post('/team/destroy', [\App\Http\Controllers\TeamController::class, 'destroy'])->name('admin.team.destroy');
    // Galary
    // Route::get('/galary', [\App\Http\Controllers\GalaryController::class, 'index'])->name('admin.galary');
    // Route::post('/galary/store', [\App\Http\Controllers\GalaryController::class, 'store'])->name('admin.galary.store');
    // Route::post('/galary/destroy', [\App\Http\Controllers\GalaryController::class, 'destroy'])->name('admin.galary.destroy');

    /////////////////
    Route::get('/blog_details', function () {
        return view('blog_details');
    })->name('blog_details');
});
Route::get('/{page}', [AdminController::class, 'index']);
