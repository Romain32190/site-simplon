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
	$gestion = App\Gestion::find(1);
    return view('welcome',['backImage' => $gestion->image ]);
});


Route::get('/liens', function () {
		$gestion = App\Gestion::find(1);
    return view('liens',['backImage' => $gestion->image ]);
});

Route::get('/about', function (){
$gestion = App\Gestion::find(1);
  return view('simplon',['backImage' => $gestion->image,'philosophie' => $gestion->philosophie,'programme' => $gestion->programme]);
});

Route::get('/contact', function(){
  return view('contact');
});
Route::post('/contact', 'ContactController@postContact');

Route::get('/promo', function(){
	$gestion = App\Gestion::find(1);
	return view('promotion',['backImage' => $gestion->image ]);
});

Route::get('/blog', 'BlogController@getBlog');

Route::get('/flux', function(){
  return view('flux');
});

Route::get('/article', function(){
  return view('newarticle');
});

Route::post('/newarticle', 'BlogController@nvArticle');

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

Route::get('profile', 'UserController@profile');

Route::post('profile', 'UserController@update_avatar');
Route::post('profile/cv', 'UserController@update_cv');
Route::post('profile/email', 'UserController@update_email');
Route::post('profile/password', 'UserController@update_password');
Route::post('profile/desc', 'UserController@update_desc');

Route::get('gestion', 'UserController@gestion');

Route::post('gestion/img', 'UserController@update_img');
Route::post('gestion/philo', 'UserController@update_philo');
Route::post('gestion/prog', 'UserController@update_prog');
