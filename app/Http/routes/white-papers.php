<?php
//      WHITE PAPERS        //
Route::group(['prefix' => 'white-papers'], function()
{
    //WhitePapersController Routes
    Route::get('5-secrets-ups-and-fedex-dont-want-you-to-know', 'WhitePapersController@pageFromSlug');
    Route::get('fuel-surcharge', 'WhitePapersController@pageFromSlug');
    Route::get('general-price-increase', 'WhitePapersController@pageFromSlug');
    //  TODO: add to nav dropdown
    Route::get('/', 'WhitePapersController@pageFromSlug');

    //ThankYouController Routes
    Route::match(['get', 'post'], 'fuel-surcharge-thank-you', 'ThankYouController@fuelSurcharge');
    Route::match(['get', 'post'], 'general-price-increase-thank-you', 'ThankYouController@generalPriceIncrease');
    Route::match(['get', 'post'], '5-secrets-thank-you', 'ThankYouController@fiveSecretsThankYou');
});

Route::match(['get', 'post'], 'shipping-resource-guide', 'ThankYouController@shippingResourceGuide');
Route::match(['get', 'post'], 'ShipperResourceGuide', function(){
    return redirect('shipping-resource-guide');
});
Route::get('informative-white-papers', 'PagesController@pageFromSlug');
