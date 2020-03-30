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

Route::group(['prefix' => 'auth/'], function () {
    Route::get('login', 'AuthController@login');
    Route::get('register', 'AuthController@register');
    Route::get('forgot-password', 'AuthController@forgot_password');

    Route::post('register-user', 'AuthController@postRegister');
});

Route::get('/', 'MenuController@listMenu');

Route::group(['prefix' => 'setting/'], function () {
    Route::get('info-sekolah', 'SettingController@infoSekolah');
});
