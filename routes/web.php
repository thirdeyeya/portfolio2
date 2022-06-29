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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('search/create', 'Admin\SearchController@add');
    Route::post('search/create', 'Admin\SearchController@create');
    Route::get('search', 'Admin\SearchController@index')->name('comment');
    Route::get('search/edit', 'Admin\SearchController@edit');
    Route::post('search/edit', 'Admin\SearchController@update');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    Route::get('search/delete', 'Admin\SearchController@delete');
    Route::get('search/comment', 'Admin\SearchController@add');
    Route::post('search/comment', 'Admin\NewsController@comment');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//Route::get('/', 'SearchController@index');
Route::get('/profile', 'ProfileController@index')->name('profile');

