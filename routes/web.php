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

Route::get('/newrecord', 'BaseController@newRecord');

Route::post('/newrecord/insert', 'RecordController@insertRecord');

Route::get('/record/delete/{id}', 'RecordController@deleteRecord');
Route::get('/record/update/{id}', 'RecordController@updateForm');
Route::post('/record/update', 'RecordController@updateAction');
