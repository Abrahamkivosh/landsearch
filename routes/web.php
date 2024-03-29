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
})->name('welcome');
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
Route::get('/history/{id}/{land}/preview', 'SearchHistoryController@singleSearch')->name('printsingleSearch');
Route::post('/history/{id}', 'SearchHistoryController@storeSearch')->name('storeSearch');

Route::get('dash/map', 'HomeController@map')->name('map');
Route::resource('lands', 'LandController');
Route::get('lands','LandController@search')->name('search');
Route::get('/profile/{id}', 'ProfileController@show')->name('profile');


//app/Http/Controllers/AuthAdmin


    Route::prefix('admin1')->group(function () {
        Route::get('test', 'Admin\LoginController@test');
        Route::resource('clerks', 'ClerkController');

       Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
       Route::post('login', 'Admin\LoginController@login')->name('admin.login.submit');
       Route::resource('clients', 'ClientController');
       Route::get('owners', 'AdminController@owners')->name('owners');
       Route::resource('land', 'Admin\LandController');
       Route::get('/{id}', 'AdminController@profile')->name('profile');
       Route::get('register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
       Route::post('register', 'Admin\RegisterController@register')->name('admin.register.submit');
       Route::get('/', 'AdminController@index')->name('dashboard');
    });





