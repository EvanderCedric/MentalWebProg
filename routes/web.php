<?php

use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;


//Navigation Bar

Route::get('/', [\App\Http\Controllers\ArticleController::class, 'index'])->name('home');
Route::get('/home', [\App\Http\Controllers\ArticleController::class, 'index'])->name('home');

Route::get('/catalog', [\App\Http\Controllers\ArticleController::class, 'showCatalog'])->name('catalog');
Route::get('/survey', function () {return view('survey');});
Route::get('/surveypage', function () {return view('surveypage');});

Route::get('/contactus', [\App\Http\Controllers\ExpertContactController::class, 'index'])->name('contactus');




// Articles
Route::prefix('articles')->group(function () {
    Route::get('/{id}', [\App\Http\Controllers\ArticleController::class, 'artindex'])->name('articles.show');
});




//Otherrs
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

//Survey

Route::get('/surveypage', [SurveyController::class, 'index'])->name('surveypage');  
Route::post('/surveypage', [SurveyController::class, 'store'])->name('surveypage');  
Route::get('/surveyresults', [SurveyController::class, 'results'])->name('surveyresults');  

// Route to view responses for a specific question
Route::get('/question/{questionId}/responses', [SurveyController::class, 'viewResponse'])->name('survey.viewResponses');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
