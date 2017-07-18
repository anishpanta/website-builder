<?php

	
	Route::get('/login/superlogin', 'LoginController@getSuperlogin');
	Route::post('/login/superlogin', 'LoginController@postSuperlogin');
	Route::get('/login/supersignup', 'LoginController@getSupersignup');
	Route::post('/login/supersignup', 'LoginController@postSupersignup');
	Route::get('/login/signup', 'LoginController@getSignup');
	Route::post('/login/signup', 'LoginController@postSignup');
	Route::get('/login/dologin', 'LoginController@getDologin');
	Route::post('/login/dologin', 'LoginController@postdologin');
	Route::get('/login','LoginController@getlogin');
	
Route::group(['middleware'=>'auth'],function(){
	Route::get('/logout', 'LoginController@getLogout');
	Route::get('/changepassword','LoginController@getChangepassword');
	Route::post('/changepassword','LoginController@postChangepassword');
	Route::controller('/admin', 'AdminController');
	Route::controller('/', 'WelcomeController');	
});





