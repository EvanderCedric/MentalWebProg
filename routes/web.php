<?php

use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;


//Navigation Bar

Route::get('/', function () {return view('home');});
Route::get('/home', function () {return view('home');});
Route::get('/catalog', [\App\Http\Controllers\ArticleController::class, 'showCatalog'])->name('catalog');
Route::get('/survey', function () {return view('survey');});
Route::get('/surveypage', function () {return view('surveypage');});

Route::get('/contactus', [\App\Http\Controllers\ExpertContactController::class, 'index'])->name('contactus');



//Login Signup
Route::get('/login', [\App\Http\Controllers\FormController::class, 'login'])->name('login');
Route::get('/signup', [\App\Http\Controllers\FormController::class, 'signup'])->name('signup');

//Users


// Articles
Route::prefix('articles')->group(function () {
    Route::get('/{id}', [\App\Http\Controllers\ArticleController::class, 'artindex'])->name('articles.show');
});




//Otherrs
Route::get('/ww', function () {
    return view('welcome');
});

//Survey
Route::get('/surveypage', [SurveyController::class,'index']);

