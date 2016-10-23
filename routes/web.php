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

Route::get('/', [
    'uses' => 'CityController@index'
]);



Route::resource('cities', 'CityController', [
    'only' => ['index', 'show']
]);

Route::resource('stations', 'StationController', [
    'only' => ['index', 'create', 'store']
]);


Route::get('/install',  array('as' => 'install', function()
{
        try {
            echo '<br>init migrate:install...';
            Artisan::call('migrate:install');
            echo '<br>done migrate:install<br>';

            echo '<br>run migrations';
            Artisan::call('php artisan migrate:refresh --seed');
            echo '<br>done migrate:install<br>';



        } catch (Exception $e) {
            Response::make($e->getMessage(), 500);
        }

}));