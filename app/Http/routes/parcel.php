<?php

Route::group(['prefix' => 'parcel'], function ()
{
    Route::get('/', 'ParcelController@index');
});
Route::group(['prefix' => 'parcèl'], function ()
{
    Route::get('/', 'ParcelController@index');
});
Route::get('parc%E8l', 'ParcelController@index'); // safari special character fix
