<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('users');
});

Route::resource('users', 'UserController');
Route::get('phones/create/{user_id}', [
    'as' => 'phones.create',
    'uses' =>'PhoneController@create'
]);
Route::get('phones/store/{user_id}', [
    'as' => 'phones.store',
    'uses' =>'PhoneController@store'
]);

Route::get('phones/destroy/{user_id}', [
    'as' => 'phones.destroy',
    'uses' =>'PhoneController@destroy'
]);

Route::resource('phones', 'PhoneController', ['except' => 'create', 'destroy']);
