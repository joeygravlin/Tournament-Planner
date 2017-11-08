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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//user specific
Route::get('user','UserController@currentUser');
Route::get('user/tournaments','UserController@tournaments');

//tournament specific
Route::get('tournament/{id}/users', 'TournamentController@users');
Route::get('tournament/{id}/teams', 'TournamentController@teams');
Route::get('tournament/{id}/brackets', 'TournamentController@brackets');

//team specific
Route::get('team/{id}/users','TeamController@users');
Route::get('team/{id}/guests', 'TeamController@guests');

//for any table: get row via 'table/id'
Route::get('user/{user}', 'UserController@show');
Route::get('team/{team}', 'TeamController@show');
Route::get('tournament/{tournament}', 'TournamentController@show');
Route::get('bracket/{bracket}', 'BracketController@show');
Route::get('guest/{guest}','GuestController@show');
