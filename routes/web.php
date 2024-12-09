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

Route::get('/surveypage', [SurveyController::class, 'index'])->name('surveypage.index');  
Route::post('/surveypage', [SurveyController::class, 'store'])->name('surveypage.store');  
Route::get('/surveyresults', [SurveyController::class, 'results'])->name('surveyresults');  

// Route to view responses for a specific question
Route::get('/question/{questionId}/responses', [SurveyController::class, 'viewResponse'])->name('survey.viewResponses');



//Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    // Admin Routes
    Route::middleware('can:is-admin')->group(function () {
        Route::get('/admin/users', [App\Http\Controllers\UserController::class, 'index'])->name('admin.users.index'); // User management
        Route::delete('/admin/users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('admin.users.destroy'); // Delete user
        Route::get('/admin/table', [App\Http\Controllers\UserController::class, 'index'])->name('admin.table'); // Example admin table
    });

    // User Profile Routes
    Route::get('/profile/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('profile.edit'); // Edit profile
    Route::put('/profile/update', [App\Http\Controllers\UserController::class, 'update'])->name('profile.update'); // Update profile
});