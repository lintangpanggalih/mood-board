<?php

use App\Http\Controllers\Api\ArticleApiController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('apps.register');
});
Route::get('/introduce', function () {
    return view('apps.register');
});
Route::post('/introduce', [RegisterController::class, 'register'])->name('register');
Route::group(['prefix' => 'mission', 'as' => 'mission.', 'middleware' => 'check-quiz'], function () {
    Route::get('/', [QuizController::class, 'index'])->name('index');
    Route::post('/question/submit', [QuizController::class, 'submit'])->name('question.submit');
    Route::get('/question/{order?}', [QuizController::class, 'show'])->name('question');
    Route::get('/article/{id}', [ArticleApiController::class, 'show'])->name('article');
});
