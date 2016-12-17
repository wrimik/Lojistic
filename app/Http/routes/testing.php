<?php


//Ajax Calculator Routes
Route::group(['prefix' => 'tests'], function() {
    Route::post('/abtest','ABTestController@store');
});

Route::get('hubspot-testing', function(){
    return View::make('internal.testing-pages.hubspot-dev-form');
});