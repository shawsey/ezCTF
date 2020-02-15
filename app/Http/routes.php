<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('pages.home');
});

Route::get('windows', function () {
	return view('pages.windows');
});

Route::get('linux', function () {
	return view('pages.linux');
});

Route::get('crypto', function () {
	return view('pages.crypto');
});

Route::get('osint', function () {
	return view('pages.osint');
});

Route::get('web', function () {
	return view('pages.web');
});

Route::get('forensic', function () {
	return view('pages.forensic');
});

Route::get('re', function () {
	return view('pages.re');
});

Route::get('pwn', function () {
	return view('pages.pwn');
});

/* Tools Route - Contains all tools for all categories */

Route::get('tools', 'ToolsController@index');

Route::get('tools/create', 'ToolsController@create');

Route::get('tools/{id}','ToolsController@show');

Route::post('tools', 'ToolsController@store');

