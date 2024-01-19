<?php

use App\Http\Controllers\QuestionController;
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
    return view('apps.home');
});
Route::get('/introduce', function () {
    return view('apps.register');
});
Route::post('/introduce', [RegisterController::class, 'register'])->name('register');
Route::group(['prefix' => 'mission', 'as' => 'mission.'], function () {
    Route::get('/', function () { return view('apps.mission.index'); })->name('index');
    Route::get('/question/{order?}', [QuestionController::class, 'show'])->name('question');
});
