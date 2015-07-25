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

Route::get('/', 'WelcomeController@index');
Route::get('contact', 'WelcomeController@contact');
Route::get('about', 'PagesController@about');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//get('/', ['as' => 'posts', 'uses' => 'PostController@index']);
//get('unpublished', ['as' => 'posts.unpublished', 'uses' => 'PostController@unpublished']);


//get('post/create',      ['as' => 'posts.create',  'uses' => 'PostController@create']);
//post('post',            ['as' => 'posts.store',   'uses' => 'PostController@store']);
//get('post/{post}',      ['as' => 'posts.show',    'uses' => 'PostController@show']);
//get('post/{post}/edit', ['as' => 'posts.edit',    'uses' => 'PostController@edit']);
//post('post/{post}',     ['as' => 'posts.update',  'uses' => 'PostController@update']);

$router->resource('post', 'PostController');



