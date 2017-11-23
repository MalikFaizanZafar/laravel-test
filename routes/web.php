<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CommentController;
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
    return view('welcome');
});
Route::get('/logout',function(){
  Auth::logout();
  return redirect('/films/all');
});
Route::get('films/all','FilmController@index');
Route::get('films/{slug}','FilmController@show');
Route::post('/films/films/{id}','CommentController@store');

Route::get('/add/film', function(){
  return view('Create');
})->middleware('auth');
Route::post('/films/add','FilmController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
