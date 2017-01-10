<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');



// Route om een link met een naam erin te verwerken in functie $name.
Route::get('hello/{name}', function($name){
   echo 'Hello there '. $name;
});

Auth::routes();

Route::get('/home', 'HomeController@index');
