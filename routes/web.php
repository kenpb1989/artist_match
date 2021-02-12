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

Route::get('', 'App\Http\Controllers\ArtistController@index')->name('index');
Route::get('list', 'App\Http\Controllers\ArtistController@list')->name('list');
Route::get('show', 'App\Http\Controllers\ArtistController@show')->name('show');

Route::middleware('auth')->group(function () {
    Route::get('new', 'App\Http\Controllers\UserController@new');
    Route::POST('new', 'App\Http\Controllers\UserController@new2');
    Route::get('mypage', 'App\Http\Controllers\UserController@mypage')->name('mypage');
    Route::get('/edit', 'App\Http\Controllers\UserController@edit')->name('edit');
    Route::post('/edit', 'App\Http\Controllers\UserController@edit2');
});



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
