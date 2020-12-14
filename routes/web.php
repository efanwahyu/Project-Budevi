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

//Manage Login
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

//manage User Interface
Route::get('/','PagesController@home');
    Route::get('/match','PagesController@match');
    Route::get('/news', 'PagesController@news')->name('news.index');;
    Route::get('/readberita/{id}','PagesController@readberita')->name('news.isi_berita');
    Route::get('/team', 'PagesController@team');
    Route::get('/about', 'PagesController@about');
    
//manage auth
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', 'PagesController@dashboard');
    Route::resource('/dashboardnews','NewsController');
    Route::resource('/dashboardgames','GamesController');
    Route::resource('/dashboardhighlight','HighlightsController');
    Route::resource('/dashboardplayer','PlayersController');
    Route::resource('/dashboarddefender','DefendersController');
    Route::resource('/dashboardkiper','KipersController');
    Route::resource('/dashboardmidfilder','MidfildersController');
});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
