<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'welcome']);
Route::get('/planos', [\App\Http\Controllers\HomeController::class, 'plans']);
Route::get('/minha-conta', [\App\Http\Controllers\MyAccountController::class, 'account']);
Route::get('/meu-perfil', [\App\Http\Controllers\UserProfileController::class, 'userprofile']);


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('welcome');
})->name('welcome');

