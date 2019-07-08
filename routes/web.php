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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/phpinfo', function () {
    return view('phpinfo'); 
});

// 前台首页
Route::get('/login', 'Home\Auth\LoginController@index');
// 登录界面的展示
// Route::get('auth/{service}', 'Auth\SocialiteLoginController@redirectToProvider')->name('socialite_login_form');
// 登录回调的处理
// Route::get('auth/{service}/callback', 'Auth\SocialiteLoginController@handleProviderCallback')->name('socialite_login');

