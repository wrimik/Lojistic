<?php

//Ajax Calculator Routes
Route::group(['prefix' => 'ajax','before' => 'ajax'], function()
{
    Route::post('rates-calculator', 'ShippingServiceController@getRatesReport');
    Route::get('rates-calculator/download', 'ShippingServiceController@downloadRatesReport');
    Route::post('rate-comparison', 'ShippingServiceController@getComparisonReport');
    Route::post('dim-calculator', 'ShippingServiceController@getDimReport');
    Route::get('get-carrier-services', 'ShippingServiceController@index');
    Route::get('carrier-years/{carrier}', 'ShippingServiceController@getYears');
    Route::get('carrier-services/{carrier}/{year}', 'ShippingServiceController@getServices');
});

//      SHIPPING COST CALCULATORS        //
Route::group(['prefix' => 'shipping-costs-calculators'], function()
{
    Route::get('/', ['as'=>'calculators-index','uses'=>'CalculatorController@pageFromSlug']);
    Route::get('fedex-ups-rates-calculator', ['as'=>'rate-calculator','uses'=>'CalculatorController@pageFromSlug']);
    Route::get('fedex-ups-rates-calculator', ['as'=>'rate-calculator','uses'=>'CalculatorController@pageFromSlug']);
    Route::get('fedex-ups-rate-comparison-tool', ['as'=>'comparison-calculator','uses'=>'CalculatorController@pageFromSlug']);
    Route::get('fedex-ups-ground-dim-calculator', ['as'=>'dim-calculator','uses'=>'CalculatorController@pageFromSlug']);
});

// DIM CALCULATOR//
Route::get('fedex-ground-dim-calculator', function()
{
    return redirect('dim-calculator', []);
});
Route::get('shipping-cost-calculators/fedex-ups-ground-dim-calculator', function()
{
    return redirect('dim-calculator', []);
});

