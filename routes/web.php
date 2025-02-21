<?php

use App\Http\Controllers\Api\ArticleApiController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RegisterController::class, 'index']);
// Route::get('/introduce', [RegisterController::class, 'index']);
Route::post('/introduce', [RegisterController::class, 'register'])->name('register');
Route::group(['prefix' => 'mission', 'as' => 'mission.', 'middleware' => 'check-quiz'], function () {
    Route::get('/', [QuizController::class, 'index'])->name('index');
    Route::post('/question/submit', [QuizController::class, 'submit'])->name('question.submit');
    Route::get('/question/{order?}', [QuizController::class, 'show'])->name('question');
    Route::get('/article/{id}', [ArticleApiController::class, 'show'])->name('article');
});
