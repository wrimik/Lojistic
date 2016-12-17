<?php


//      ***     REDIRECTS FROM sourceconsulting.com URLs         ***         //
Route::get('about-source-consulting', function(){
    return redirect('about-lojistic');
});
Route::get('source-consulting-pricing', function(){
    return redirect('lojistic-pricing');
});
Route::get('source-consulting-referral-program', function(){
    return redirect('lojistic-referral-program');
});
Route::get('source-consulting-careers', function(){
    return redirect('lojistic-careers');
});
Route::get('fedex-ups-ground-dim-calculator', function(){
    return redirect('dim-calculator');
});
Route::get('fedex-ups-rates-calculator', function(){
    return redirect('shipping-costs-calculators/fedex-ups-rates-calculator');
});
Route::get('fedex-ups-rate-comparison-tool', function(){
    return redirect('shipping-costs-calculators/fedex-ups-rate-comparison-tool');
});
Route::get('5-secrets-ups-and-fedex-dont-want-you-to-know', function(){
    return redirect('white-papers/5-secrets-ups-and-fedex-dont-want-you-to-know');
});
Route::get('5-secrets-thank-you', function(){
    return redirect('white-papers/5-secrets-thank-you');
});
Route::get('general-price-increase', function(){
    return redirect('white-papers/general-price-increase');
});
Route::get('general-price-increase-thank-you', function(){
    return redirect('white-papers/general-price-increase-thank-you');
});
Route::get('fuel-surcharge', function(){
    return redirect('white-papers/fuel-surcharge');
});
Route::get('fuel-surcharge-thank-you', function(){
    return redirect('white-papers/fuel-surcharge-thank-you');
});
Route::get('contact-source-consulting', function(){
    return redirect('contact-lojistic');
});
Route::get('source-corporate-citizenship', function(){
    return redirect('lojistic-corporate-citizenship');
});
Route::get('intelliship', function(){
    return redirect('shipping-software');
});

/**
 * Redirects FOR SEO!!!
 */

Route::get('sourceconsulting', function()
{
    return redirect('/');
});
Route::get('logistics-advisors', function()
{
    return redirect('/');
});
Route::get('jaredfisher', function()
{
    return redirect('/');
});
Route::get('reduceshippingcosts', function()
{
    return redirect('reduce-shipping-costs');
});
Route::get('reducecosts', function()
{
    return redirect('reduce-shipping-costs');
});
Route::get('transportation', function()
{
    return redirect('/');
});
Route::get('solutions', function()
{
    return redirect('/#solutions');
});
Route::get('sourceconsulting/Blog', function()
{
    return redirect('/blog');
});
Route::get('dev/freight-shipping-faqs/ups-fedex-contract-negotiation-questions', function()
{
    return redirect('freight-shipping-faqs/ups-fedex-contract-negotiation-questions');
});

