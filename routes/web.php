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

//显示首页
Route::get('/', 'PagesController@root')->name('root');

//登录界面
Route::get('/login', 'LoginController@forwardLoginView')->name('login');

//验证登录
Route::post('/check/login', 'LoginController@checkLogin')->name('check');

Route::get('/info/show/{user}', 'UserController@showUserInfo')->name('show');

Route::delete('/logout', 'UserController@userLogout')->name('logout');

Route::get('/show/questions', 'QuestionsController@forwardQuestionsView')->name('questions');