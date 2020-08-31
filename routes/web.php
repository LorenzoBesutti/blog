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

Route::get('/home', 'FrontendController@home')->name('home');




Route::get('/prezzi','FrontendController@prezzi')->name('prezzi');



Route::get('city/{name}','FrontendController@city')->name('city');

Route::get('/NewYork','FrontendController@NewYork')->name('NewYork');

Route::get('/music','FrontendController@music')->name('music');

Route::get('/chi siamo','FrontendController@chisiamo')->name('chi siamo');

Route::get('/contatti','FrontendController@contacts')->name('contacts');

Route::post('/contatti/submit','FrontendController@submit')->name('contacts-submit');

Route::get('/grazie','FrontendController@thankyou')->name('thank-you');





