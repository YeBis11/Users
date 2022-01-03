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


Route::get('/', 'App\Http\Controllers\IndexController@loginForm')->name('login');
Route::post('/', 'App\Http\Controllers\IndexController@login')->name('login.login');
Route::get('/logout', 'App\Http\Controllers\IndexController@logout')->name('login.logout');





/*Route::get('/dashboard', 'App\Http\Controllers\DashController@index')->name('dashboard');*/
Route::get('/dashboard', ['middleware' => 'auth', 'uses' => 'App\Http\Controllers\DashController@index'])->name('dashboard');
Route::post('/dashboard', ['middleware' => 'auth', 'uses' => 'App\Http\Controllers\DashController@edit'])->name('dashboard.edit');

Route::get('/register', 'App\Http\Controllers\RegisterController@index')->name('register.index');
Route::post('/register', 'App\Http\Controllers\RegisterController@register')->name('register.register');

Route::get('/admin', 'App\Http\Controllers\Admin\IndexController@index')->name('admin.index');
