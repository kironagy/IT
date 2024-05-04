<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->middleware(['auth'])->group(function () {

    //    Pages Dashboard
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('/customText/Home', [PageController::class, 'index'])->name('admin.custom-text.home');
    Route::post('/customText/Home', [PageController::class, 'update'])->name('admin.custom-text.update');
    // Route::get('/customText/Home/{id}', function () {
    //     return view('dashboard.customTextHome');
    // })->name('admin.custom-text.home.store');

});
Route::get('/{page}', [AdminController::class, 'index']);
