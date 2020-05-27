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
    return view('admin.user.form');
});

Route::get('/analytic', 'Admin\AnalyticController@index')->name('analytic');
Route::post('/upload', 'Upload\UploadController@uploadImage')->name('upload');
Route::post('/test', 'Upload\UploadController@test')->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
