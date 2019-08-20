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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/properties/{property}', 'PropertyController@show')->name('property.show');
Route::post('/properties/create', 'PropertyController@store')->name('property.store');

Route::get('/properties/{property}/billing', 'BillingController@show')->name('billing.show');