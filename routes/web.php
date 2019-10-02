<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/place', 'PlaceController@index');
Route::get('/create', 'PlaceController@create')->name('createPlace');
Route::post('/', 'PlaceController@store')->name('storePlace');


Route::get('/company', 'CompanyController@index')->name('start');
Route::get('/about', 'CompanyController@create')->name('createCompany');
Route::post('/', 'CompanyController@store')->name('storeCompany');
