<?php

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

use App\User;

Auth::routes();
// Route::get('/', 'HomeController@landing');
Route::get('/', function () {
	if (Auth::check()) {
		return redirect('/home');
	} else {
		return view('landing')
			->with('css', 'css/landing.css')
			->with('title', 'Welcome');
	}
});
Route::get('/profile', 'ProfileController@index');
Route::get('/home', 'HomeController@home')->name('home');
