<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function () {

        require __DIR__.'/auth.php';

        Route::get('/', [PageController::class, 'show'])->name('home');

        Route::get('/about', function () {
            return view('about');
        })->name('about');

        Route::get('/blog', function () {
            return view('blog');
        })->name('blog');
        Route::get('/blog_details', function () {
            return view('blog_details');
        })->name('blog_details');

        Route::post('/page/create', [PageController::class, 'store']);

        Route::resource('pages', PageController::class);
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/dashboard.php';
