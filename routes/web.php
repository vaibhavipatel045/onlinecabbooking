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

Route::get('index','TemplateController@index')->name('index');

//Route::get('login','TemplateController@login')->name('login');

Route::get('about','TemplateController@about')->name('about');

Route::get('car','TemplateController@car')->name('car');

Route::get('booking','TemplateController@booking')->name('booking');

Route::post('booking','TemplateController@create')->name('booking');

Route::get('contact','TemplateController@contact')->name('contact');
