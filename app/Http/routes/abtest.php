<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AbTestController;

Route::post('/track/{key}/{value}', function( Request $request, $key, $value) {
    AbTestController::track($request, $key, $value);
});
Route::group(['prefix' => 'tests'], function() {
    Route::post('/abtest','AbTestController@store');
});