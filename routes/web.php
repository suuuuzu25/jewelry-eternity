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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('information/create', 'Admin\InformationController@add');
    Route::post('information/create', 'Admin\InformationController@create');
    Route::get('information', 'Admin\InformationController@index');
    Route::get('information/edit', 'Admin\InformationController@edit');
    Route::post('information/edit', 'Admin\InformationController@update');
    Route::get('information/delete', 'Admin\InformationController@delete');
    Route::get('work/create', 'Admin\WorkController@add');
    Route::post('work/create', 'Admin\WorkController@create');
    Route::get('work', 'Admin\WorkController@index');
    Route::get('work/edit', 'Admin\WorkController@edit');
    Route::post('work/edit', 'Admin\WorkController@update');
    Route::get('work/delete', 'Admin\WorkController@delete');
    Route::get('contact', 'Admin\ContactController@index');
    Route::get('contact/delete', 'Admin\ContactController@delete');
    Route::get('/', 'Admin\IndexController@index');
    
    
});
Route::get('/', 'JewelryController@index');
Route::get('/information', 'JewelryController@information');
Route::get('/work', 'JewelryController@work');
Route::get('/profile', 'JewelryController@profile');
Route::get('/contact', 'JewelryController@contact');
// Route::post('/contact/confirm', 'JewelryController@confirm');
Route::post('/contact/complete', 'JewelryController@complete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
