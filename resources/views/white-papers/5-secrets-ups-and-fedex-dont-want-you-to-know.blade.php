@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => '5 Secrets to Lowering Your UPS and FedEx Shipping Costs without Sacrificing Service',
        'description' => 'UPS and FedEx proudly advertise that they are focused on low prices. Nevertheless, these companies haven\'t told us everything we need to know about saving on shipping. In fact, there are 5 secrets they don\'t want you to know.',
        'keywords'    => 'ups shipping costs, fedex shipping costs, ups shipping, fedex shipping',
    ])
@overwrite
@section('styles')
    {!! Html::style('/css/pages/whitepapers.css?v='.v())  !!}
@stop
@section('content')
    <section class="white">
        <div class="container">
            <h2>5 Secrets UPS & Fedex <br/>Don't Want You to Know</h2>
            <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                <div class="col-md-6 text-vc col-xs-12">
                    <img class="wp-img animated tada" src="/images/5-Secrets-UPS-&-FedEx-Dont-Want-You-to-Know-Final.png" alt="5 Secrets UPS &amp; FedEx Don't Want You To Know"/>
                </div>
                <div class="col-md-5 col-md-offset-1 col-xs-12">
                    @include(
                       'parts.hubspot-form',
                           array(
                               'thankyouPage' => '/white-papers/5-secrets-thank-you',
                               'intent' => 'White Paper Download',
                               'btnTxt' => 'Download Report',
                               'howCanWeHelp' => 'Downloading 5 Secrets  (auto generated comment)',
                               'formID' => '1de384f9-c8a4-4294-a9d9-e67af61b6509'
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
                    Eliminate These Five Hidden<br/>UPS And FedEx Shipping Costs!
                </h2>
                <h3>
                    Learn tips and tricks from our team of industry experts on how to reduce the excessive cost of shipping.
                </h3>
                <p>
                    UPS and FedEx provide a great service to businesses of all sizes, delivering
                    packages efficiently to locations all around the globe. Of course, such
                    delivery is not free. There can be significant UPS shipping costs and FedEx
                    shipping costs associated with their delivery services.
                </p>
                <p>
                    Companies that are able to significantly reduce their UPS shipping cost and
                    FedEx shipping cost can increase their profitability. This is particularly
                    true of companies that ship frequently through carriers such as UPS and FedEx.
                    Business owners who know the secrets to reducing their shipping costs are
                    poised to save a lot of money, but navigating these secret strategies is often
                    more difficult than one might imagine.
                </p>
                <p>
                    Here at Lojistic, we have put together the report 5 Secrets UPS &
                    FedEx Don't Want You to Know. We want to make it simpler for companies to
                    learn and use the information that can help reduce UPS shipping costs and
                    FedEx shipping costs the most. Our extensive background in freight management
                    and working with these delivery services providers has shown us the common
                    oversights that companies of all sizes make when they are trying to lower
                    their UPS costs and FedEx costs. If they are looking to dramatically lower
                    the fees they pay to UPS and FedEx, business owners and managers such as
                    yourself have no better resource to turn to when you are setting up your
                    shipping contracts for regular mailing through these delivery services.</p>

                <p>
                    When Lojistic conducts a parcel audit or performs one of our other
                    shipping cost reduction services, clients are routinely shocked at all the
                    savings they have been leaving on the table. We are here to help you control
                    your transportation costs, and this report on the 5 secrets of UPS and FedEx
                    is just one of the many ways we can help you significantly reduce your UPS
                    shipping costs and FedEx shipping costs. So if you want to lower the prices
                    you pay for FedEx shipping and UPS shipping, then download our report today,
                    and feel free to contact us with any questions you might have about our
                    freight management services.
                </p>
                <p>
                    Complete the form above to download the 5 Secrets UPS &amp; Fedex Don't Want You to Know
                </p>
            </article>
        </div>
    </section>
@stop