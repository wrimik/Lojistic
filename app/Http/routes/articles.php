<?php
/*
|--------------------------------------------------------------------------
| Articles Pages
|--------------------------------------------------------------------------
|
| When creating articles your Title, Description and Keywords will be auto
| created for you.  Make sure you name the blade template the name of
| the slug for the article and the rest is magically done for you
|
*/
Route::get('freight-and-shipping-the-history-of-the-transcontinental-railroad', function()
{
    return redirect('freight-trade-and-shipping-history');
});
Route::get('10-ways-to-help-save-the-oceans', 'ArticleController@show');
Route::get('about-the-author-tyler-glassman', 'ArticleController@show');
Route::get('about-the-author-steve-minard', 'ArticleController@show');
Route::get('dollars-for-your-parcel-the-history-of-bartering', 'ArticleController@show');
Route::get('transportation-and-shipping-during-war', 'ArticleController@show');
Route::get('famous-maritime-ships-and-their-freight-cargo', 'ArticleController@show');
Route::get('freight-audit-services-learning-about-standard-carrier-alpha-codes', 'ArticleController@show');
Route::get('freight-trade-and-shipping-history', 'ArticleController@show');
Route::get('from-land-to-sea-types-of-cargo', 'ArticleController@show');
Route::get('history-of-freight-transportation', 'ArticleController@show');
Route::get('history-of-shipping-and-trade-along-the-panama-canal', 'ArticleController@show');
Route::get('model-cargo-ships-and-more', 'ArticleController@show');
Route::get('model-trains-and-more-freight-hobbies', 'ArticleController@show');
Route::get('parcels-packages-and-more-the-history-of-the-us-postal-service', 'ArticleController@show');
Route::get('recycling-resources-for-freight-packaging-and-more', 'ArticleController@show');
Route::get('shipping-by-sea-a-look-at-bodies-of-water-around-the-world', 'ArticleController@show');
Route::get('shipping-to-north-america-leif-eriksons-place-in-history', 'ArticleController@show');
Route::get('transportation-and-shipping-during-war', 'ArticleController@show');