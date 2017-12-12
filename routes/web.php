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


//Route::any('{all}', function () {
    //return view('layouts.app');
//})->where(['all' => '.*']);

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

Route::put('tournament/{tid}/adduser/{uid}','TournamentController@addUser');
Route::delete('tournament/{tid}/remove/{uid}','TournamentController@removeUser');
Route::post('tournament/create','TournamentController@create');
Route::delete('tournament/{id}','TournamentController@deleteTournament');

//Brackets
Route::post('tournament/{id}/start','BracketController@initTree');
Route::post('win/{id}','BracketController@win');
Route::post('bracket/{id}/score/{score}','BracketController@setScore');

//team specific
Route::get('team/{id}/users','TeamController@users');
Route::get('team/{id}/guests', 'TeamController@guests');
Route::put('team/{tid}/adduser/{uid}','TeamController@addUser');
Route::delete('team/{tid}/remove/{uid}','TeamController@removeUser');
Route::put('team/{tid}/addguest/{name}','TeamController@addGuest');
Route::post('team/create','TeamController@create');
Route::delete('team/{id}','TeamController@deleteTeam');

//guest specific
Route::delete('guest/{id}','GuestController@deleteGuest');

//for any table: get row via 'table/id'
Route::get('user/{user}', 'UserController@show');
Route::get('team/{team}', 'TeamController@show');
Route::get('tournament/{tournament}', 'TournamentController@show');
Route::get('bracket/{bracket}', 'BracketController@show');
Route::get('guest/{guest}','GuestController@show');
