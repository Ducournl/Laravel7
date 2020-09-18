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
Route::get('photo', 'PhotoController@create');
Route::post('photo', 'PhotoController@store');

Route::get('/', 'WelcomeController@index')->name('Flex');

Route::get('users', 'UsersController@create');
Route::post('users', 'UsersController@store');

// Route Article
Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

// Route Facture
Route::get('facture/{n}', function($n) {
    return view('facture')->withNumero($n);
})->where('n', '[0-9]+');

//


Route::get('users/action', function() {
    return view('users.action');
})->name('action');

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

