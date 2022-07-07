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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('music/create', 'Admin\MusicController@add')->name('comment');
     Route::post('music/create', 'Admin\MusicController@create'); 
     Route::get('music', 'Admin\MusicController@index');
     Route::get('profile/create', 'Admin\ProfileController@add');
     Route::post('profile/create', 'Admin\ProfileController@create');
     Route::get('profile/edit', 'Admin\ProfileController@edit');
     Route::post('profile/edit', 'Admin\ProfileController@update');
     Route::get('music/edit', 'Admin\MusicController@edit'); 
     Route::post('music/edit', 'Admin\MusicController@update');
     Route::get('music/delete', 'Admin\MusicController@delete');
     Route::get('music/comment', 'Admin\SearchController@add');
     Route::post('music/comment', 'Admin\NewsController@create');
     Route::get('music/genre', 'Admin\GenreController@add');
     Route::post('music/genre', 'Admin\GenreController@create'); 
     Route::get('music/music_tone', 'Admin\Music_toneController@add');
     Route::post('music/music_tone', 'Admin\Music_toneController@create'); 
     Route::get('music/gender', 'Admin\GenderController@add');
     Route::post('music/gender', 'Admin\GenderController@create'); 
});
Auth::routes();

Route::get('/', 'Admin\MusicController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
