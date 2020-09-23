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

Route::view('/','home');
Route::view('/admin','backoffice/layouts/admin');
Route::view('/contactUs','contactUs');
Route::view('/aboutUs','aboutUs');
Route::view('/landingpage','campaigns/ebookLandingPage');
Route::view('/blog','blog');
Route::get('/blog/{slug}','BlogController@show')->name('blog.post');

Auth::routes();

Route::get('/campaña/Ebook','LandingPageController@documento')->name('camapaña.ebook');
Route::post('landingpage','LandingPageController@store')->name('landing.store');
//Route::view('/categories','backoffice.categories.list')->name('categories.index');
//GRUPO DE RUTAS PARA EL MODULO BLOG
Route::group(['middleware' => 'auth', 'prefix' => 'backoffice/blog'], function () {
    Route::resource('categories','CategoryController');
    Route::resource('post','PostController');
});



