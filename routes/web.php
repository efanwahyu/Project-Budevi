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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','PagesController@home');
Route::get('/match','PagesController@match');
Route::get('/news', 'PagesController@news');
Route::get('/team', 'PagesController@team');
Route::get('/about', 'PagesController@about');
Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::resource('/dashboardnews','NewsController');
Route::resource('/dashboardgames','GamesController');
Route::resource('/dashboardhighlight','HighlightsController');
Route::resource('/dashboardplayer','PlayersController');
Route::resource('/dashboarddefender','DefendersController');
Route::resource('/dashboardkiper','KipersController');
Route::resource('/dashboardmidfilder','MidfildersController');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
