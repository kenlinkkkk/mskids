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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/back', 'Client\HomeController@redirectUrl')->name('backHome');
Route::get('/header', 'Client\HomeController@showHeader')->name('showHeader');

Route::get('/analytic', 'Admin\AnalyticController@index')->name('analytic');
Route::post('/upload', 'Upload\UploadController@uploadImage')->name('upload');
Route::post('/test', 'Upload\UploadController@test')->name('test');

Auth::routes();

Route::middleware('auth')->group(function (){
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/profile', 'Admin\UserController@index')->name('profile');

        Route::post('/change-password', 'Admin\UserController@changePassword')->name('changePassword');

        Route::prefix('category')->name('category.')->group(function () {
            Route::get('/', 'Admin\CategoryController@index')->name('index');
            Route::get('/add', 'Admin\CategoryController@add')->name('add');
            Route::get('/edit/{category_id}', 'Admin\CategoryController@edit')->name('edit');


            Route::post('/create', 'Admin\CategoryController@create')->name('create');
            Route::post('/update/{category_id}', 'Admin\CategoryController@update')->name('update');
            Route::post('/delete/{category_id}', 'Admin\CategoryController@delete')->name('delete');
        });

        Route::prefix('page')->name('page.')->group(function () {
            Route::get('/', 'Admin\PageController@index')->name('index');
            Route::get('/add', 'Admin\PageController@add')->name('add');
            Route::get('/edit/{page_id}', 'Admin\PageController@edit')->name('edit');


            Route::post('/create', 'Admin\PageController@create')->name('create');
            Route::post('/update/{page_id}', 'Admin\PageController@update')->name('update');
            Route::post('/delete/{page_id}', 'Admin\PageController@delete')->name('delete');
        });
    });
});

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('checksub')->group(function () {
    Route::prefix('/')->name('home.')->group(function () {
        Route::get('/', 'Client\HomeController@index')->name('index');
        Route::get('/test', function (){
            return view('admin.user.form');
        });
    });
});