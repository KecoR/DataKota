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

Route::get('/', 'HomeController@index');

Auth::routes(
    [
        'register' => false,
        'reset' => false,
        'verify' => false,
        'login' => false,
    ]
);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'HomeController@create')->name('create');
Route::get('/edit/{idkota}', 'HomeController@edit')->name('edit');
Route::get('/delete/{idkota}', 'HomeController@delete')->name('delete');

Route::post('/save', 'HomeController@formSave')->name('formSave');
