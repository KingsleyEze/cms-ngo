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


Route::get('/', 'SynController@index');
Route::get('/mission', 'SynController@mission');
Route::get('/work', 'SynController@work');
Route::get('/stories', 'SynController@stories');
Route::get('/prisonreformconference2015', 'SynController@conference');
Route::get('/delegate-form', 'SynController@delegate');
Route::get('/about', 'SynController@about');
Route::get('/donation', 'SynController@donation');
Route::get('/contact', 'SynController@contact');

Route::get('/backoffice', 'AdminController@login');
Route::get('/backoffice/dashboard', 'AdminController@dashboard');
Route::get('/backoffice/cms', 'AdminController@cms');
Route::get('/backoffice/members', 'AdminController@members');
Route::get('/backoffice/delegate', 'AdminController@delegate');
Route::get('/backoffice/photos', 'AdminController@photos');
Route::get('/backoffice/feedback', 'AdminController@feedback');


Route::post('/backoffice/dashboard', 'AdminController@store_article');
Route::post('/prisonreformconference2015', 'SynController@store_delegate');

Route::get('/backoffice/delegate/{id}', 'AdminController@delegateShow');
Route::get('/stories/{id}', 'SynController@storiesArticleShow');
Route::get('/{id}', 'SynController@indexArticleShow');
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

