@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Shipping Price Increase History - Lojistic',
        'description' => 'Shipping prices summarizes historical rate increase. Better anticipate and control rising shipping prices with Lojistic.',
        'keywords'    => 'shipping prices, ups freight rates, fedex freight rates, shipping price, us postal service rate increase',
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
                <h2>General Price Increase History</h2>
                <p>UPS &amp; FedEx rates have increased 28% since 2008. This report contains the
                    comprehensive details of each UPS and FedEx price increase history since 2008
                    and valuable insight on the impact to your company.</p>

                <p>
                    Whether your business is large or small, it can be difficult to clearly define
                    how increased shipping prices have cut into your bottom line over time. A complete
                    shipping price report can help you get the full picture as to the way in which growing
                    UPS freight rates and FedEx freight rates make your shipping contracts and other
                    overhead expenses far greater than they were previously. Such information is
                    invaluable for charting a strategy to hold down your shipping prices and increase
                    your profit margin.
                </p>

                <p>
                    On this page, Lojistic is offering a free report that provides a
                    thorough overview of how UPS freight rates and FedEx freight rates have changed
                    over the past several years. Our extensive experience in freight management is
                    brought to bear in this shipping price report, allowing us to highlight the
                    information that will be most pertinent to the majority of companies that use
                    UPS and FedEx services. By identifying the main factors that affect shipping
                    costs, it becomes easier to manager the future trends in shipping prices.
                </p>

                <p>
                    In addition to this helpful shipping price report, Lojistic also offers
                    valuable freight audit services that can help you find where you may have been
                    overcharged for shipping in the past and even receive refunds of your UPS freight
                    rates and FedEx freight rates. Input your information in the form below to download
                    your free shipping price increase report, and feel free to contact us with any
                    questions you have about our services and how they can benefit you.
                </p>
                <p>
                    Complete the form above to download the UPS &amp; Fedex Fuel Surcharge History
                </p>
            </article>
        </div>
    </section>
@stop