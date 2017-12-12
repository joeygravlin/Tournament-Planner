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


/**
 * Eh, we'll just leave this here for now... Remove once API Auth is complete.
 */

Auth::routes();

/**
 * Match all URI's, except for the '/api' prefix,
 * and route them to the main layout template.
 */

Route::any('{all}', function () {
    return view('layouts.app');
})->where(['all' => '^((?!api).)*$']);

// Route::get('/', function () {
//     return view('welcome');
// });


