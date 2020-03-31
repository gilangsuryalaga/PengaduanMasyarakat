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

Route::get('/login', 'AksesController@login');
Route::post('/login', 'AksesController@postLogin')->name('login');
Route::get('/registrasi', 'AksesController@registrasi');
Route::post('/registrasi', 'AksesController@postRegis')->name('register');