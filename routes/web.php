<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/badges', 'Admin\BadgeController@index');
Route::get('/admin/badges/{id}', 'Admin\BadgeController@show');
Route::post('/admin/badges', 'Admin\BadgeController@store');
Route::put('/admin/badges/{id}', 'Admin\BadgeController@update');
Route::delete('/admin/badges/{id}', 'Admin\BadgeController@destroy');
Route::put('/admin/badges/{id}/publish', 'Admin\BadgeController@publish');
Route::put('/admin/badges/{id}/archive', 'Admin\BadgeController@archive');

Route::get('/badges', 'User\BadgeController@index');
Route::get('/badges/{id}', 'User\BadgeController@show');
