<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('LandingPage');
});
Route::get('/admin/home', function () {
    return view('Admin.Dashboard');
});
Route::get('/admin/category', function () {
    return view('Admin.Category.index');
});
Route::get('/admin/news', function () {
    return view('Admin.News.index');
});
