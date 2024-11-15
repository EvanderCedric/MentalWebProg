<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/catalog',[\App\Http\Controllers\ArticleController::class, 'index']);
Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, 'showCatalog'])->name('catalog');

Route::get('/contactus', function () {
    return view('contactus');
});


Route::get('/aboutus', function () {
    return view('aboutus');
});


Route::get('/ww', function () {
    return view('welcome');
});

