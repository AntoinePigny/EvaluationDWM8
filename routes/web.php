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

Route::get('/', 'BaseController@index');

Route::get('/records', 'BaseController@recordsList');
Route::get('/artists', 'BaseController@artistsList');

Route::get('/newrecord', 'BaseController@newRecord');
Route::get('/newartist', 'BaseController@newArtist');

Route::post('/newrecord/insert', 'RecordController@insertRecord');
Route::post('/newartist/insert', 'ArtistController@insertArtist');

Route::get('/record/delete/{id}', 'RecordController@deleteRecord');
Route::get('/record/update/{id}', 'RecordController@updateForm');
Route::post('/record/update', 'RecordController@updateAction');

Route::get('/artist/delete/{id}', 'ArtistController@deleteArtist');
Route::get('/artist/update/{id}', 'ArtistController@updateForm');
Route::post('/artist/update', 'ArtistController@updateAction');
