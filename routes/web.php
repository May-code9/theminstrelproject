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
Route::get('/video', ['as'=>'minstrelVideo', 'uses'=>'MinstrelProjectController@video']);
Route::get('/donate', ['as'=>'minstrelDonate', 'uses'=>'MinstrelProjectController@donate']);
Route::get('/contact', ['as'=>'minstrelContact', 'uses'=>'MailController@contact']);
Route::post('/contact', ['as'=>'contact.store', 'uses'=>'MailController@storeContact']);
Route::get('/fill teller', ['as'=>'minstrelTeller', 'uses'=>'MinstrelProjectController@teller']);
Route::post('/submitTeller', ['as'=>'minstrelSubmitTeller', 'uses'=>'MinstrelProjectController@submitTeller']);
Route::get('/about us', ['as'=>'minstrelAbout', 'uses'=>'MinstrelProjectController@about']);

Route::group(['middleware'=>'isAdmin'], function() {
  Route::get('/dashboard', ['as'=>'minstrelDashboard', 'uses'=>'MinstrelDashboardController@index']);

  Route::get('/add images', ['as'=>'minstrelAddImages', 'uses'=>'MinstrelDashboardController@addGallery']);
  Route::post('/post/images', ['as'=>'minstrelPostImages', 'uses'=>'ImageController@postImages']);
  Route::post('/post/editedimage', ['as'=>'postEditedImage', 'uses'=>'ImageController@postEditedImage']);
  Route::get('/view images', ['as'=>'minstrelViewImages', 'uses'=>'MinstrelDashboardController@viewGalleryImg']);
  Route::get('/SingleImage/{id}', ['as'=>'minstrelEditImages', 'uses'=>'MinstrelDashboardController@editGalleryImg']);

  Route::resource('teller', 'MinstrelTellerController');

  Route::resource('addressinfo', 'MinstrelAddressInfo');

  Route::resource('contactinfo', 'MinstrelContactInfo');

  Route::resource('guardianinfo', 'MinstrelGuardianInfo');

  Route::resource('personalinfo', 'MinstrelPersonalInfo');

  Route::resource('pricelist', 'PriceController');

  Route::resource('videoupload', 'VideoController');

  //Search Controller
  Route::get('searchaddress{page?}', ['as'=>'addressinfo.search', 'uses'=>'AdminSearchController@searchAddressInfo']);

  Route::get('searchcontact{page?}', ['as'=>'contactinfo.search', 'uses'=>'AdminSearchController@searchContactInfo']);

  Route::get('searchguardian{page?}', ['as'=>'guardianinfo.search', 'uses'=>'AdminSearchController@searchGuardianInfo']);

  Route::get('searchpersonal{page?}', ['as'=>'personalinfo.search', 'uses'=>'AdminSearchController@searchPersonalInfo']);

  Route::get('searchteller_number{page?}', ['as'=>'tellerno.search', 'uses'=>'AdminSearchController@searchTellerNo']);
});
