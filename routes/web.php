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

Route::get('/', 'ThreadController@index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('pages', 'ThreadController');
Route::get('/create', 'ThreadController@create');
Route::post('store', 'ThreadController@store')->name('form.store');
Route::post('destroy/{id}', 'ThreadController@destroy')->name('form.destroy');
Route::post('/update/{id}', 'ThreadController@update')->name('form.update');

Route::resource('admin/permission', 'Admin\\PermissionController');

Route::resource('admin/role', 'Admin\\RoleController');
