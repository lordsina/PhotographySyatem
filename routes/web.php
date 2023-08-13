<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UsersController;
use App\Models\Hall;
use App\Models\User;
use Symfony\Component\Finder\Comparator\DateComparator;

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


    Route::group(['middleware'=>['web']],function(){



    Route::get('/',['as'=>'Home' ,function(){
        return view('home');
    }]);


// nothing 

    Route::get('dashboard',[CustomAuthController::class,"dashboard"])->middleware(['auth','verified'])->name("dashboard");


    Route::get('login',[CustomAuthController::class,"index"])->name("login");
    Route::post('logincheck',[CustomAuthController::class,"logincheck"])->name("logincheck");

    Route::get('register',[CustomAuthController::class,"register"])->name('register-user');
    Route::post('registercheck',[CustomAuthController::class,"registercheck"])->name('registercheck');

    Route::get('logout',[CustomAuthController::class,"logout"])->name('logout');

    Route::get('edit/{id}',[CustomAuthController::class,"edit"])->name('edit');

    Route::group(['prefix'=>'books','as'=>'books.'],function(){
        Route::get('/','App\Http\Controllers\BooksController@index');//Show-Books
        Route::get('/{book}/edit','App\Http\Controllers\BooksController@edit');//Show-Books
        Route::post('/','App\Http\Controllers\BooksController@store');//Add-Books
        Route::patch('/{book}','App\Http\Controllers\BooksController@update');
        //---------------------
        Route::get('/{book}','App\Http\Controllers\BooksController@show');//Show-BookComments
        Route::post('/{book}','App\Http\Controllers\BookCommentsController@store');//Add-BookComments
        Route::get('/bookcomments/{bookcomment}','App\Http\Controllers\BookCommentsController@edit');//Edit-BookComments
        Route::post('/bookcomments/{bookcomment}','App\Http\Controllers\BookCommentsController@update');//Update-BookComments
    });


  

    Route::get('users',[UsersController::class,"index"]);//show-Users

    Route::resource('todos',TodoController::class);


    // Route::group(['prefix'=>'api','middleware'=>'auth:sanctum'],function(){

    //     Route::get('{term}',['middleware'=>['throttle:3'],function($term){
    //         return ['result'=>$term];
    //     }]);

    //     Route::get('user/{user}',['middleware'=>['throttle:3'],function(User $user){
    //         return $user;
    //     }]);

    // });



    Route::group(['prefix'=>'studio','as'=>'studio.'],function(){
        Route::resource('halls',HallController::class);
    });

    

   

});






