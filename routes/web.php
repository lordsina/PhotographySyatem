<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BooksController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[CustomAuthController::class,"home"]);
Route::get('dashboard',[CustomAuthController::class,"dashboard"])->name("dashboard");


Route::get('login',[CustomAuthController::class,"index"])->name("login");
Route::post('logincheck',[CustomAuthController::class,"logincheck"])->name("logincheck");

Route::get('register',[CustomAuthController::class,"register"])->name('register-user');
Route::post('registercheck',[CustomAuthController::class,"registercheck"])->name('registercheck');

Route::get('logout',[CustomAuthController::class,"logout"])->name('logout');

Route::get('edit/{id}',[CustomAuthController::class,"edit"])->name('edit');

//Convention Over Configuration
Route::get('books','App\Http\Controllers\BooksController@index');
Route::get('books/{book}','App\Http\Controllers\BooksController@show');