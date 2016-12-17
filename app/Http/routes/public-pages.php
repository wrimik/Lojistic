<?php
use Illuminate\Http\Request;
Route::get('/', function() {
    return view('pages/home');
});
//Pages From Slug
Route::get('pardot', 'PagesController@pageFromSlug');
Route::get('about-lojistic', 'PagesController@pageFromSlug');
Route::get('videos', 'PagesController@pageFromSlug');
Route::get('reduce-shipping-costs', 'PagesController@pageFromSlug');
Route::get('free-shipping-resources', 'PagesController@pageFromSlug');
Route::get('lojistic-pricing', 'PagesController@pageFromSlug');
Route::get('lojistic-referral-program', 'PagesController@pageFromSlug');
Route::get('freight-news-events', 'PagesController@pageFromSlug');
Route::get('lojistic-careers', 'PagesController@pageFromSlug');
Route::get('contact-lojistic', 'PagesController@pageFromSlug');
Route::get('carrier-contract-negotiation', 'PagesController@pageFromSlug');
Route::get('freight-management', 'PagesController@pageFromSlug');
Route::get('shipping-insurance', ['as'=>'insurance-calculator','uses'=>'PagesController@pageFromSlug']);
//Route::get('shipping-software', 'PagesController@pageFromSlug');
Route::get('halo', 'PagesController@pageFromSlug');
Route::get('savings-checklist', 'PagesController@pageFromSlug');
Route::get('20-20', 'PagesController@pageFromSlug');
Route::get('carrier-rate-analysis', 'PagesController@pageFromSlug');
Route::get('1000-dollar-promo', 'PagesController@pageFromSlug');
Route::get('customer-testimonials', 'PagesController@pageFromSlug');
Route::get('lojistic-corporate-citizenship', 'PagesController@pageFromSlug');
Route::get('parcel-freight-audit-demo', 'PagesController@pageFromSlug');
Route::get('privacy-policy', 'PagesController@pageFromSlug');
Route::get('sitemap', 'PagesController@pageFromSlug');
Route::get('say-hi', 'PagesController@pageFromSlug');
Route::get('wholesale-shipping-rates', 'PagesController@pageFromSlug');
Route::get('visitor-conversion', 'PagesController@pageFromSlug');

//Wholesale-ltl-rate-marketplace
Route::group(['prefix' => 'wholesale-ltl-rate-marketplace'], function()
{
    Route::get('/', function(){ return view('pages/wholesale-ltl-rate-marketplace'); });
    Route::get('sign-up', function(){ return view('pages/wholesale-ltl-rate-marketplace/sign-up'); });
    Route::get('sign-up-alt', function(){ return view('pages/wholesale-ltl-rate-marketplace/sign-up-alt'); });
});

//audit product page
Route::get('parcel-freight-bill-audit', 'PagesController@pageFromSlug');

//parcel audit pages
Route::group(['prefix' => 'parcel-audit'], function()
{
    Route::get('/', 'PagesController@pageFromSlug');
    Route::get('fedex-audit', 'PagesController@pageFromSlug');
    Route::get('ups-audit', 'PagesController@pageFromSlug');
});

// FAQS //
Route::group(['prefix' => 'freight-shipping-faqs'], function()
{
    Route::get('/', 'PagesController@pageFromSlug');
    Route::get('ftl-ltl-ocean-rail-air-freight-audit-questions', 'PagesController@pageFromSlug');
    Route::get('parcel-freight-contract-negotiation-questions', 'PagesController@pageFromSlug');
    Route::get('ups-fedex-audit-questions', 'PagesController@pageFromSlug');
    Route::get('ups-fedex-contract-negotiation-questions', 'PagesController@pageFromSlug');
});

Route::get('greater-good-campaign', 'PagesController@pageFromSlug');
Route::get('greatergood', function(){
    return redirect('greater-good-campaign');
});

//Pages Not From Slugs
Route::get('legacy', 'PagesController@homeLegacy');


Route::get('/lojistic', function() {
    return view('pages/splash');
});
Route::get('/splash', function() {
    return view('pages/splash');
});
Route::get('/splash-thank-you', function() {
    return view('pages/thank-you');
});

Route::get('/schedule', function() {
    return view('pages/schedule');
});

//      PRODUCTS        //

Route::group(['prefix' => 'freight-management'], function(){
    Route::get('/', 'PagesController@pageFromSlug');
    Route::get('/freight-rates', 'PagesController@pageFromSlug');
});

Route::group(['prefix' => 'shipping-software'], function(){
    Route::get('/', 'PagesController@pageFromSlug');
    Route::get('sign-up', function(){ return view('pages/shipping-software-sign-up'); });
//    Route::get('sign-up', function(){ return view('pages/shipping-software-sign-up'); });
//    Route::get('sign-up/test', function(){ return view('pages/shipping-software-sign-up-test'); });
    Route::post('sign-up/create', 'IntellishipUserController@create');
    Route::post('sign-up/email', 'IntellishipUserController@mailLink');
});

Route::get('parcel-shipping-software', function(){
    return redirect('shipping-software');
});

Route::get('readypay', function() {
    $data = array(
        'title' => 'ReadyPay - Lojistic',
        'description' => 'ReadyPay is Lojistic\'s exclusive audit and pay system that allows you to keep 100% of your audit recovery, and it doesn\'t cost you a dime.',
        'keywords' => 'free parcel audit, audit and pay, readypay, freight audit, freight bill auditing, freight bill audit, parcel audit, freight auditing, shipping audit, transportation audit, freight auditing companies, shipping auditing, freight invoice audit',
        'bodyClass' => 'parcel-freight-bill-audit',
        'legacy' => false
    );
    return view('pages/parcel-audit')->with($data);
});

//      FAQs        //
Route::get('freight-shipping-faq', function(){ // spelling error
    return redirect('freight-shipping-faqs');
});
Route::get('freight-shipping-faq/{category}', function($category){ // spelling error
    return redirect('freight-shipping-faqs/'.$category);
});

//      ***     Thank You Pages       ***         //
Route::match(['get', 'post'], 'thank-you', function(Request $request){
    $ThankYouController = new App\Http\Controllers\ThankYouController($request);
    return $ThankYouController->genericThankYou();
});

/**
 * the below routes are for A/B testing the sign up forms
 */

// test minimal
Route::get('/testing-conversion', 'PagesController@pageFromSlug') ;

//Wholesale-ltl-rate-marketplace conversion testing page
Route::group(['prefix' => 'wholesale-ltl-rate-marketplace'], function()
{
    Route::get('sign-up', function(){ return view('pages/wholesale-ltl-rate-marketplace/sign-up'); });
    Route::get('sign-up-form', function(){ return view('pages/wholesale-ltl-rate-marketplace/sign-up-form'); });
});
//carrier-contract-negotiation
Route::group(['prefix' => 'carrier-contract-negotiation'], function()
{
    Route::get('sign-up', function(){ return view('pages/carrier-contract-negotiation/sign-up'); });
    Route::get('sign-up-form', function(){ return view('pages/carrier-contract-negotiation/sign-up-form'); });
});
//freight-management
Route::group(['prefix' => 'freight-management'], function()
{
    Route::get('sign-up', function(){ return view('pages/freight-management/sign-up'); });
    Route::get('sign-up-form', function(){ return view('pages/freight-management/sign-up-form'); });
});
//parcel-freight-bill-audit
Route::group(['prefix' => 'parcel-freight-bill-audit'], function()
{
    Route::get('sign-up', function(){ return view('pages/parcel-freight-bill-audit/sign-up'); });
    Route::get('sign-up-form', function(){ return view('pages/parcel-freight-bill-audit/sign-up-form'); });
    Route::get('pricing', function(){ return view('pages/parcel-freight-bill-audit/pricing'); });
});
//shipping-insurance
Route::group(['prefix' => 'shipping-insurance'], function()
{
    Route::get('sign-up', function(){ return view('pages/shipping-insurance/sign-up'); });
    Route::get('sign-up-form', function(){ return view('pages/shipping-insurance/sign-up-form'); });
});
//shipping-software
//Route::group(['prefix' => 'shipping-software'], function()
//{
//    Route::get('sign-up', function(){ return view('pages/shipping-software/sign-up'); });
//    Route::get('sign-up-form', function(){ return view('pages/shipping-software/sign-up-form'); });
//});

Route::get('give', function(){
    $donations =  DB::table('holiday_donations')->sum('donation');
    $total = $donations * 2 + 3660;
    $percent = round($total/15000 * 100, 4);
    return View::make('pages/give', array('total'=>$total, 'percent'=>$percent, 'donations'=>$donations));
});



// pay
Route::get('/pay', 'PagesController@pageFromSlug') ;
