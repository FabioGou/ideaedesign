<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    $environment = App::environment();

    return View::make('home')->with('env', $environment);
});

Route::any("login", [
    "as" => "user/login",
    "uses" => "UserController@login"
]);


Route::group(['before' => 'auth'], function () {
    Route::get('adm', ['as' => 'adm', 'uses' => 'AdmController@admin']);
    Route::get('adm/empresa', ['as' => 'admCliente', 'uses' => 'AdmController@cliente']);
    Route::get('adm/consumidor', ['as' => 'admConsumidor', 'uses' => 'AdmController@consumidor']);
});