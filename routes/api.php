<?php

use Illuminate\Http\Request;

/*
install laravel
install passport

config/app.php
php artisan migration
app/User.php
app/Providers/AuthServiceProvider.php
config/auth.php
route/api.php
UserController.php
run
*/


//https://github.com/gzeinnumer/laravel-passport-poc
//https://www.youtube.com/watch?v=RW7RXMLuSWw
//here
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'UserController@details');
});

