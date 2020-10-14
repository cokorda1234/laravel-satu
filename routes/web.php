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

//Route::get('/', 'HomeController@index');

Route::get('/', function (){
    return view('satu');
});

Route::get('/data-tables',function (){
   return view('dua');
});

Route::get('/register' , 'AuthController@index')->name('register');

Route::post('/welcome','AuthController@welcome')->name('welcome');
