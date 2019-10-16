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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('cliants.about');
});
Route::get('/services', function () {
    return view('cliants.services');
});
Route::get('/Portfolio', function () {
    return view('cliants.portfolio');
});
Route::get('/blog', function () {
    return view('cliants.blog');
});
Route::get('/contact', function () {
    return view('cliants.contact');
});


Route::get('/plots', function () {
    return view('dashboard.plots');
});
Auth::routes();

Route::get('/dash', 'HomeController@index')->name('home');
Route::get('/dash', 'HomeController@searchLand')->name('searchLand');
Route::get('/history/{id}', 'SearchHistoryController@landSearch')->name('allSearch');
Route::get('/history/{id}/{land}', 'SearchHistoryController@singleSearch')->name('singleSearch');
Route::post('/history/{id}', 'SearchHistoryController@storeSearch')->name('storeSearch');


Route::resource('lands', 'LandController');



