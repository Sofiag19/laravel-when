<?php

use Illuminate\Support\Facades\Route;

//index no-login
Route::get('/', 'MainController@index') -> name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
