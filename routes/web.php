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

Route::get('/', 'BlogController@index');
Route::get('/posts/{post}', 'BlogController@post');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/contacts', 'ContactsController@contacts');
Route::post('/contacts', ['as'=>'contacts.store','uses'=>'ContactsController@contactsPost']);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function() {
    Route::resource('/posts', 'PostController');
    Route::resource('/users', 'UserController', ['middleware' => 'admin', 'only' => ['index', 'destroy']]);
});
