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

use GuzzleHttp\Client;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inspire', function(){
    $quote = \Illuminate\Foundation\Inspiring::quote();

    $webhookUrl = "https://discordapp.com/api/webhooks/608896486050234378/YSy8pRPwiTIN3Cvys6PaonZ_CDe_pdTciDRGI3zrxO6gqAfH86jYkm9Pu7Qt6yDf64p3";
    $client = new Client();

    $data = [
        "content" => "Seems like you need some inspiration. Here's a quote: " . $quote
    ];

    $response = $client->request('GET', "$webhookUrl", $data);

    dd($response->getBody());

    return redirect(route('welcome'));
});
