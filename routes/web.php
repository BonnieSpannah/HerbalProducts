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

Auth::routes();
//Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return redirect()->route('products.index');
    });
    Route::get('home', 'HomeController@index')->name('home');

    Route::get('users', 'UserController@index')->name('users.index');
    Route::get('users/create', 'UserController@create')->name('users.create');
    Route::post('users', 'UserController@store')->name('users.store');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    Route::post('users/{user}/update', 'UserController@update')->name('users.update');
    Route::get('users/{user}/deactivate', 'UserController@deactivate')->name('users.deactivate');
    Route::get('users/{user}/activate', 'UserController@activate')->name('users.activate');

    Route::get('products', 'ProductController@index')->name('products.index');
    Route::get('products/create', 'ProductController@create')->name('products.create');
    Route::post('products', 'ProductController@store')->name('products.store');
    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
    Route::post('products/{product}/update', 'ProductController@update')->name('products.update');
    Route::get('products/{product}/delete', 'ProductController@delete')->name('products.delete');
});
