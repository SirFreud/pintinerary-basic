<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/itinerary'], function () {
    Route::get('/create', 'ItineraryController@create');
});

Route::get('/home', 'HomeController@index')->name('home');

