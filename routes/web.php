<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/catalog',[\App\Http\Controllers\ArticleController::class, 'index'])->name('catalog');;

Route::get('/contactus', function () {
    return view('contactus');
});


Route::get('/aboutus', function () {
    return view('aboutus');
});

// In web.php (routes)

Route::prefix('articles')->group(function () {
    Route::get('/{id}', [\App\Http\Controllers\ArticleController::class, 'artindex'])->name('articles.show');
});





Route::get('/ww', function () {
    return view('welcome');
});

