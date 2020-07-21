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


Route::get('/', 'Controller@index');
Route::get('/contact_us', 'Controller@contactUs')->name('contact_us');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/updatePost', 'HomeController@updatePost')->name('updatePost');

Route::post('/updateSetting', 'HomeController@updateSetting')->name('updateSetting');

Route::post('/sendEmail', 'Controller@sendEmail')->name('sendEmail');

