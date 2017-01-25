<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Entity\Member;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'View\MemberController@toLogin');
Route::get('/register', 'View\MemberController@toRegister');

Route::get('/email','View\MemberController@mail');
Route::any('service/validate_email', 'Service\ValidateController@validateEmail');
Route::any('/service/register','Service\MemberController@register');
Route::any('service/validate_code/create','Service\ValidateController@create');
Route::any('service/validate_code/send','Service\ValidateController@sendSMS');




