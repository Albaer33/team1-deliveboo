<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function() {
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('dishes', 'DishController');
        
        Route::resource('restaurants', 'RestaurantController');

/*         Route::get('/restaurants', 'RestaurantController@index')->name('restaurants.index');
        Route::get('/restaurants/create', 'RestaurantController@create')->name('restaurants.create');
        Route::put('/restaurants/store', 'RestaurantController@store')->name('restaurants.store');
        Route::get('/restaurants/{restaurant}', 'RestaurantController@show')->name('restaurants.show');
        Route::get('/restaurants/{restaurant}/edit', 'RestaurantController@edit')->name('restaurants.edit');
        Route::put('/restaurants/update/{restaurant}', 'RestaurantController@update')->name('restaurants.update');
        Route::delete('/restaurants/{restaurant}', 'RestaurantController@destroy')->name('restaurants.destroy'); */

    });

Route::get('{any?}', function() {
    return view('guests.home');
})->where('any', '.*');



