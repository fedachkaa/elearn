<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/elearn', function () {
    return view('welcome');
})->name('home');

Route::group(['middleware'=>'guest'], function(){
    Route::get('elearn/register', [UserController::class, 'create'])->name('register.create');
    Route::post('elearn/register', [UserController::class, 'store'])->name('register.store');
    Route::get('elearn/login', [UserController::class, 'loginForm'])->name('login.create');
    Route::post('elearn/login', [UserController::class, 'login'])->name('login');
});

Route::get('elearn/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

