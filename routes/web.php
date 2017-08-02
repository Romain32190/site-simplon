<?php

/*
|-------------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
/
/-------------------------------------------------------------------------------
/Pages routes
/-------------------------------------------------------------------------------
/
/
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/q=simplon', function (){
  return view('simplon');
});

Route::get('/contact', function(){
  return view('contact');
});



/*
/
/
/-------------------------------------------------------------------------------
/ Auth routes
/-------------------------------------------------------------------------------
/
/
/
*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
