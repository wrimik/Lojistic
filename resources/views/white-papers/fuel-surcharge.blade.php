@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Fuel Surcharge and Trucking Rates - Lojistic',
        'description' => 'Freight fuel surcharge rates have increased dramatically over the past few years. See the history and current diesel and trucking surcharge rates.',
        'keywords'    => 'fuel surcharge trucking, current fuel surcharge, diesel fuel surcharge, fuel surcharge rates, fuel surcharge history, freight fuel surcharge',
    ])
@overwrite
@section('styles')
    {!! Html::style('css/pages/whitepapers.css?v='.v())  !!}
@stop
@section('content')

    <section class="white">
        <div class="container">
            <h2>Shipping Price Increase History</h2>
            <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                <div class="col-md-6 text-vc">
                    <img class="wp-img animated tada" src="/images/UPS-Fedex-General-Price-Increase-History.png" alt="5 Secrets UPS &amp; FedEx Don't Want You To Know"/>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-12">
                    @include(
                    'parts.hubspot-form',
                        array(
                    'thankyouPage' => '/white-papers/general-price-increase-thank-you',
                    'intent' => 'White Paper Download',
                    'btnTxt' => 'Download Report',
                    'howCanWeHelp' => 'Downloading GPI  (auto generated comment)',
                    'formID' => '183c4da6-1fef-4a32-92fe-4fd09f439a80'
                    )
                    )
                </div>
            </div>
        </div>
    </section>


    <section class="silver">
        <div class="container">
            <article>
                <h2>
                    Looking for information to help minimize the impact of fuel costs?
                </h2>
                <p>
                    Need to know what your carrier&rsquo;s fuel surcharge used to be?
                    This fuel surcharge history report contains a comprehensive record of
                    the fluctuations in air and ground fuel surcharges over the past two years.
                </p>

                <p>As we all know, when the price of oil increases, so does the cost of fuel.
                    This drives up the prices of shipping because carriers pass on their cost
                    increases, at least partially, in the form of a diesel fuel surcharge and other
                    fuel surcharges. Over the past few years in particular, increasing fuel charges
                    have led to an increase in the cost of shipping contracts, and your company has
                    no doubt been impacted by this change in fuel surcharge rates.
                </p>

                <p>
                    While past increases in freight fuel surcharge costs do not form a foolproof
                    indicator as to where prices will be in the future, it is nonetheless true that
                    an accurate understanding of the fuel surcharge history can help companies make
                    educated projections when they are setting their freight management budgets for
                    the coming years.
                </p>

                <p>
                    Here at Lojistic, we are well aware of how the current fuel surcharge
                    from many carriers affects the cost of shipping. That is why our parcel audit
                    services are designed particularly to look for the cost of fuel surcharge.
                    Trucking services that deliver parcels are particularly hard hit by increasing
                    fuel surcharge rates.  We have designed our freight audit services to locate where
                    our clients have paid a greater freight fuel surcharge than they were required
                    to pay. We have also developed several resources to help companies see just how
                    drastic the change in diesel fuel surcharge prices has been in recent years. One
                    of the most valuable of these is the downloadable report with the history of each
                    major carrier&rsquo;s fuel surcharge.
                </p>

                <p>
                    Lojistic&rsquo;s two-year diesel fuel surcharge report gives an overview of
                    changes in fuel surcharge rates, which can help you estimate more accurately how
                    much you will have to pay in freight fuel surcharge costs over the next fiscal
                    year. This fuel surcharge history report is free for you to download, and it is
                    a convenient way for you to do the research into each carrier's past fuel charge.
                </p>
                <p>
                    Complete the form above to download the UPS &amp; Fedex Fuel Surcharge History
                </p>
            </article>
        </div>
    </section>
@stop