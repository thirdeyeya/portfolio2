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

// Route::get('/', function () {
//    return view('welcome');
// });

Route::group(['prefix' => '', 'middleware' => 'auth'], function() {
     Route::get('profile/create', 'Admin\ProfileController@add');
     Route::post('profile/create', 'Admin\ProfileController@create');
     Route::get('profile/edit', 'Admin\ProfileController@edit');
     Route::post('profile/edit', 'Admin\ProfileController@update');
     Route::get('music/genre', 'Admin\GenreController@add');
     Route::post('music/genre', 'Admin\GenreController@create'); 
     Route::get('music/music_tone', 'Admin\Music_toneController@add');
     Route::post('music/music_tone', 'Admin\Music_toneController@create'); 
     Route::get('music/gender', 'Admin\GenderController@add');
     Route::post('music/gender', 'Admin\GenderController@create'); 
     Route::post('/music/{music}/favorite', 'Admin\FavoriteController@store')->name('favorite.store');
     Route::post('/music/{music}/unfavorite', 'Admin\FavoriteController@destroy')->name('favorite.destroy');
     Route::get('/favorites', 'Admin\MusicController@favorite_music')->name('favorites');
     Route::get('/', 'Admin\MusicController@index')->name('home');
     Route::get('comment/create', 'Admin\CommentController@add');
     Route::post('comment/create', 'Admin\CommentController@create');
     Route::get('comment', 'Admin\CommentController@show')->name('comment');
     Route::get('comment/edit', 'Admin\CommentController@edit');
     Route::post('comment/edit', 'Admin\CommentController@update');
     Route::get('comment/delete', 'Admin\CommentController@delete');
});
Auth::routes();

Route::get('/profile', 'ProfileController@index')->name('profile');
