<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Rotte Ristorante
Route::get('/restaurants', 'Api\RestaurantController@index');
Route::get('/restaurants/{slug}', 'Api\RestaurantController@show');

//Rotte Tipologie di Ristorante
Route::get('/tipologies','Api\TipologyController@index');
Route::get('/tipologies/{slug}','Api\TipologyController@show');

//Rotte Ordini
Route::get('orders/generate','Api\OrderController@generate');
Route::post('orders/make/payment','Api\OrderController@makePayment');

//Rotte Prodotti
Route::get('products','Api\ProductController@index');



// Rotta salva ordine
Route::post('orders/save','Api\OrderController@saveOrder');

