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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'AdminPanelController@dashboard')->name('dashboard');
Route::get('/booking', 'AdminPanelController@booking')->name('booking');
Route::get('/addBus', 'AdminPanelController@addNewBus')->name('add_bus');

Route::get('/addCancellation', 'AdminPanelController@addNewCancellation')->name('add_cancellation');
Route::get('/cancellation', 'AdminPanelController@cancellation')->name('cancellation');
Route::get('/addDriver', 'AdminPanelController@addNewDriver')->name('add_driver');
Route::get('/addRoute', 'AdminPanelController@addNewRoute')->name('add_route');
Route::get('/allRoute', 'AdminPanelController@viewAllRoute')->name('all_route');

//vehicle crud Routes

Route::get('/viewAllBus', 'VehicleController@index')->name('all_bus');
Route::post('vehicle-store', 'VehicleController@store')->name('vehicle_store');
Route::get('{id}/edit', 'VehicleController@edit')->name('vehicle_edit');
Route::post('{id}/update', 'VehicleController@update')->name('vehicle_update');
Route::get('{id}/delete', 'VehicleController@destroy')->name('vehicle_delete');
Route::get('{id}/show', 'VehicleController@show')->name('vehicle_show');

//driver crud Routes
Route::post('driver-store', 'DriverController@store')->name('driver_store');
Route::get('/allDriver', 'DriverController@index')->name('all_driver');
Route::get('{id}/edit', 'DriverController@edit')->name('driver_edit');
Route::get('{id}/show', 'DriverController@show')->name('driver_show');
Route::get('{id}/delete', 'DriverController@destroy')->name('driver_delete');

//route crud Routes

Route::post('route-store', 'RouteController@store')->name('route_store');
Route::get('/allRoute', 'RouteController@index')->name('all_route');
Route::get('{id}/edit', 'RouteController@edit')->name('route_edit');
Route::post('{id}/update', 'RouteController@update')->name('route_update');
Route::get('{id}/show', 'RouteController@show')->name('route_show');
Route::get('{id}/delete', 'RouteController@destroy')->name('route_delete');


