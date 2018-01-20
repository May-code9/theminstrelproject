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

Auth::routes();

Route::get('/', ['as'=>'minstrelHome', 'uses'=>'MinstrelProjectController@index']);
Route::get('/gallery', ['as'=>'minstrelGallery', 'uses'=>'MinstrelProjectController@gallery']);
Route::get('/donate', ['as'=>'minstrelDonate', 'uses'=>'MinstrelProjectController@donate']);
Route::get('/contact', ['as'=>'minstrelContact', 'uses'=>'MinstrelProjectController@contact']);
Route::get('/teller', ['as'=>'minstrelTeller', 'uses'=>'MinstrelProjectController@teller']);
Route::post('/submitTeller', ['as'=>'minstrelSubmitTeller', 'uses'=>'MinstrelProjectController@submitTeller']);
Route::get('/about us', ['as'=>'minstrelAbout', 'uses'=>'MinstrelProjectController@about']);

Route::group(['middlemare'=>'isAdmin'], function() {
  Route::get('/dashboard', ['as'=>'minstrelDashboard', 'uses'=>'MinstrelDashboardController@index']);

  Route::resource('subscriber', 'MinstrelSubscriberController');
});
