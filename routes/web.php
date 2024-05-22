<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/about-us',function () {
    return view ('AboutUs');
});

Route::get('/detail-news',function () {
    return view ('DetailNews');
});

Route::get('/admin/home', function () {
    return view('Admin.Dashboard');
});
Route::resource('/admin/category', CategoryController::class);
Route::resource('/admin/news', NewsController::class);
Route::put('admin/news/toggleFeatured/{id}', [NewsController::class, 'toggleFeatured'])->name('news.toggleFeatured');
