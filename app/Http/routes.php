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

Route::post('burritos/{burrito}/reviews', 'ReviewsController@store');

Route::resource('burritos', 'BurritosController');

// Route::resource('burritos', 'BurritosController', [
//   'except' => [
//     'edit'
//   ]
// ]);


// Route::get('/burritos/{ $burrito }/reviews', "BurritosController@show");

// Route::resource('reviews', 'ReviewsController');

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::get('/', 'PagesController@home');
//
// Route::get('burritos', 'BurritosController@index');
//
// Route::get('burritos/{id}', 'BurritosController@show');

// Route::get('about', function()  {
//   return view('about');
// });
