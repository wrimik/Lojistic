@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Carrier Rate Cost Analysis - UPS & FedEx Rate Analysis',
        'description' => 'Shipping rate and carrier analysis for businesses to help manage shipping and transportation costs despite the increasing fees and charges by freight carriers.',
        'keywords'    => 'rate analysis, carrier analysis, transportation analysis, freight cost analysis, transportation cost analysis, transport cost analysis',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            <article>
                <h2>Carrier Rate Transportation Analysis</h2>
                <div class="col-sm-5">
                    <img src="images/rate_tab2.png" width="560" alt="Free Rate Analysis"/>
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <p>For a limited time, Lojistic is offering new clients a FREE* UPS &amp;
                        FedEx Rate Increase Analysis. Let us help you plan your company's transportation
                        budget for the coming year with the help of a transportation cost analysis.</p>
                </div>
            </article>
        </div>
    </section>
    <section class="flatBlue">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <h3>Call us today to review your transport cost analysis, then outline the solutions
                we can provide for you.</h3>
                <br/>
                <a class="btn btn-info btn-lg inline scrollTo" data-target="#convert">START THE CONVERSATION</a>
            </div>
        </div>
    </section>
    <section class="white">
        <div class="container">
            <article>
                <h2>Accessorial Charge Impact of January's GPI</h2>
                <p>Every year, UPS and FedEx announce their respective general price
                    increase (GPI). Shippers, both large and small, scramble to determine
                    the effective impact on their freight management as well as their
                    shipping costs. Since the announced increases are only averages,
                    the true impact on any given business can vary greatly. This is where
                    our carrier analysis and transport cost analysis services can prove
                    beneficial to a business.</p>

                <div class="row">
                    <div class="col-sm-6">
                        <ul class="ul">
                            <li>Residential Surcharge</li>
                            <li>Delivery Area Surcharge</li>
                            <li>Address Correction Fees</li>
                        </ul>
                        <p></p>
                    </div>
                </div>
                <p>
                    Changes to the dimensional weight (DIM) factor can also be dramatic.
                    UPS and FedEx both assess a dimensional charge to more packages than
                    ever. These changes should prompt adjustments to a company's freight
                    cost analysis strategy.
                </p>

                <p>
                    Since most businesses charge their customers for shipping or try to
                    work it into the price of the product being sold, it is highly
                    beneficial that every company pre-plans their response to the
                    announced GPI. In short, a carrier analysis is essential.
                </p>

                <h3>Best Practice Suggestions</h3>

                <p>
                    Every business, based on their historical and/or anticipated
                    shipping volume and characteristics, ought to analyze the cost
                    impact of their carrier's GPI before the increase becomes effective.
                    In fact, many businesses find a strategic rate analysis to be
                    invaluable to their bottom line.
                </p>

                <p>
                    If your company's rates, volume, and characteristics are such that a
                    margin of opportunity exists to improve your discounts and incentives,
                    consider taking advantage of our transportation analysis services and
                    initiating negotiations concerning shipping contracts with your carrier
                    before the annual rate increase becomes effective. By using our rate
                    analysis services, a company is taking a proactive approach to keeping
                    shipping costs under control.
                </p>

                <p>
                    With a transportation cost analysis, Lojistic can help your
                    company implement the best practices we have suggested above and much more.
                </p>
                <p>
                    Our team thoroughly understands today's complex carrier pricing
                    environment and are experts at providing freight audit services. With
                    our transportation analysis and <a href="/parcel-audit">parcel audit</a>
                    we have helped hundreds
                    of companies reduce shipping costs. Contact Lojistic today
                    to review the freight cost analysis services and other solutions we
                    can provide for you.
                </p>
            </article>
        </div>
    </section>
    <section class="flatBlue">
        <div class="container same-height-parent">
            <div class="col-sm-4 same-height">
                <a href="/white-papers/general-price-increase">
                    <img class="wp-img" src="/images/GPI.png" alt="UPS &amp; FedEx General Price Increases">
                </a>
            </div>
            <div class="col-sm-8 same-height text-vc">
                <span class="fs-28 white">
                    Have You Seen The <i>General Price Increase</i> Whitepaper?
                </span><br/>
                <hr class="slim white"/>
                <a class="btn btn-info btn-lg inline" href="/white-papers/general-price-increase">CHECK IT OUT</a>
            </div>
        </div>
    </section>
    <section class="white">
        <div class="container">
            @include('parts.forms.contact-or-schedule', array(
                'scheduleTitle' => 'LET US HELP',
                'scheduleText'  => 'Our analysts can help you plan your company\'s 2015 transportation budget.',
                'scheduleBtnText' => 'SCHEDULE NOW',
                'formVars' => array(
                    'thankyouPage' => '/thank-you',
                    'intent' => 'Rate Analysis / Negotiations',
                    'btnTxt' => 'CONTINUE',
                    'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
                )
            ))
        </div>
    </section>
@stop