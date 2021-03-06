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


Auth::routes();

Route::middleware('auth')->group(function (){
    Route::prefix('/admin')->name('admin.')->group(function () {
        Route::get('/profile', 'Admin\UserController@index')->name('profile');

        Route::post('/change-password', 'Admin\UserController@changePassword')->name('changePassword');

        Route::prefix('/page')->name('page.')->group(function () {
            Route::get('/', 'Admin\PageController@index')->name('index');
            Route::get('/add', 'Admin\PageController@add')->name('add');
            Route::get('/edit/{page_id}', 'Admin\PageController@edit')->name('edit');

            Route::post('/create', 'Admin\PageController@create')->name('create');
            Route::post('/update/{page_id}', 'Admin\PageController@update')->name('update');
            Route::post('/delete/{page_id}', 'Admin\PageController@delete')->name('delete');
        });

        Route::prefix('/category')->name('category.')->group(function () {
                Route::get('/', 'Admin\CategoryController@index')->name('index');
                Route::get('/add', 'Admin\CategoryController@add')->name('add');
                Route::get('/edit/{category_id}', 'Admin\CategoryController@edit')->name('edit');

                Route::post('/create', 'Admin\CategoryController@create')->name('create');
                Route::post('/update/{category_id}', 'Admin\CategoryController@update')->name('update');
                Route::post('/delete/{category_id}', 'Admin\CategoryController@delete')->name('delete');
            });
    });
});

Route::get('/back', 'Client\HomeController@redirectUrl')->name('backHome');
Route::get('/header', 'Client\HomeController@showHeader')->name('showHeader');
Route::post('/upload', 'Admin\UserController@upload')->name('upload');

Route::middleware('checksub')->group(function () {
    Route::prefix('/')->name('home.')->group(function () {
        Route::get('/', 'Client\HomeController@index')->name('index');
        Route::get('/goi-dich-vu', 'Client\HomeController@showRegPage')->name('regPage');
        Route::get('/ca-nhan', 'Client\HomeController@showProfile')->name('profile');
        Route::get('/lich-su-tai-khoan', 'Client\HomeController@showLogAction')->name('logs');

        Route::post('/reg', 'Client\HomeController@regPackage')->name('reg');
    });
});

Route::get('/ung-dung', 'Client\HomeController@download')->name('download');
Route::get('/{page}', 'Client\HomeController@viewPage')->name('viewPage');
