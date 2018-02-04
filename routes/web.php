<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/itinerary'], function () {
    Route::get('/create', 'ItineraryController@create')->name('itinerary.create');
    Route::post('/', 'ItineraryController@store')->name('itinerary.store');
});

Route::get('/home', 'HomeController@index')->name('home');

