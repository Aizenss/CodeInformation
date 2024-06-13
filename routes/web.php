<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingController::class, 'index'])->name('Landing');
Route::get('/{slug}', [LandingController::class, 'show'])->name('Landing.Detail');

Route::get('/about-us',function () {
    return view ('AboutUs');
});

Route::get('/detail-news',function () {
    return view ('DetailNews');
});

Route::get('/admin/home', function () {
    return view('Admin.Dashboard');
});
Route::get('/login', function () {
    return view('Auth.login');
});
Route::resource('/admin/category', CategoryController::class);
Route::resource('/admin/news', NewsController::class);
Route::put('admin/news/toggleFeatured/{id}', [NewsController::class, 'toggleFeatured'])->name('news.toggleFeatured');

