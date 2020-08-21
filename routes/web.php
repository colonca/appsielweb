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
   return view('index');
});

Auth::routes();

Route::get('/campaña/Ebook','LandingPageController@documento')->name('camapaña.ebook');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('newsletter/suscripcion/guardar','NewsletterController@store')->name('newsletter.store');
Route::get('landingpage','MenuController@landing');
Route::post('landingpage','LandingPageController@store')->name('landing.store');


//GRUPO DE RUTAS PARA SUSCRIBSIÓN
//Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
//    //SOLICIUD
//    Route::resource('newsletter', 'NewsletterController');
//});


//GRUPO DE RUTAS PARA SUSCRIBSIÓN
Route::group(['middleware' => ['guest'], 'prefix' => 'home'], function () {
   //SOLICIUD
   Route::get('contactanos','MenuController@contactanos')->name('menu.contactanos');
});

