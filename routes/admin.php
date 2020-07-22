<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix'=>'admin'],function (){
    Route::get('index','AdminController@index');
    Route::get('create','AdminController@create');
});
