<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ProfileController;



Route::middleware(['auth'])->group(function (){
    Route::get('/minha-conta', [\App\Http\Controllers\MyAccountController::class, 'account']);
    Route::get('/calendario', [\App\Http\Controllers\CalendarController::class, 'index']);
    Route::post('/calendario/action', [\App\Http\Controllers\CalendarController::class, 'action']);
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'welcome'])->name('home')->middleware('auth');
Route::get('/planos', [\App\Http\Controllers\HomeController::class, 'plans']);

//Profile

Route::get('/profile',[\App\Http\Controllers\ProfileController::class, 'index']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
