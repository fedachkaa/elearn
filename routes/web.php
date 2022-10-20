<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/elearn', function () {
    return view('index');
})->name('home');

Route::group(['middleware'=>'guest'], function(){
    Route::get('elearn/register', [UserController::class, 'create'])->name('register.create');
    Route::post('elearn/register', [UserController::class, 'store'])->name('register.store');
    Route::get('elearn/login', [UserController::class, 'loginForm'])->name('login.create');
    Route::post('elearn/login', [UserController::class, 'login'])->name('login');
});

Route::get('elearn/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('elearn/testing/result', [QuestionController::class, 'result'])->name('result');
Route::get('elearn/testing/result-clear', [QuestionController::class, 'clear'])->name('result-clear');
Route::match(['get', 'post'], 'elearn/testing/{slug}', [QuestionController::class, 'storeQuestion'])->name('test');



