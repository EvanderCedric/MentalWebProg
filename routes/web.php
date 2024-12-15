<?php

use App\Http\Controllers\SurveyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ExpertContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

use Illuminate\Support\Facades\Route;

// Navigation Bar and Auth
Auth::routes();


Route::get('/', [ArticleController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/catalog', [ArticleController::class, 'showCatalog'])->name('catalog');
Route::get('/survey', function () {return view('survey');});
Route::get('/contactus', [ExpertContactController::class, 'index'])->name('contactus');

// Articles
Route::prefix('articles')->group(function () {
    Route::get('/{id}', [ArticleController::class, 'artindex'])->name('articles.show');
});

// Survey
Route::get('/surveypage', [SurveyController::class, 'index'])->name('surveypage.index');  
Route::post('/surveypage', [SurveyController::class, 'store'])->name('surveypage.store');  
Route::get('/surveyresults', [SurveyController::class, 'results'])->name('surveyresults');  

// Question
Route::get('/question/{questionId}/responses', [SurveyController::class, 'viewResponse'])->name('survey.viewResponses');

// Admin
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/{id}/edit', [AdminController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{id}', [AdminController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{id}', [AdminController::class, 'destroy'])->name('admin.users.destroy');
});

// User Profile Routes
Route::get('/profile/edit', [UserController::class, 'edit'])->name('profile.edit'); 
Route::put('/profile/update', [UserController::class, 'update'])->name('profile.update'); 


//lang

// Route::get('/lang/{lang}', function ($lang) {

//     session(['lang' => $lang]); 
//     return redirect()->back();
// })->name('change-language');
