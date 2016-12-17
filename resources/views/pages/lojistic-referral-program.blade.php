@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Client Referral Program - Lojistic',
        'description' => 'We want to know who you know... and we will pay you for it!',
        'keywords'    => 'Freight Audit Services, Reduce Shipping Costs',
    ])
@overwrite
@section('content')
    <section>
        <div class="container">
            <article>
            <h2>Lojistic Referral Program</h2>

            <p>
                We want to know who you know... and we will pay you for it! Bring
                reduced shipping costs to your employer, clients, associates,
                and friends. Start generating income through a referral
                partnership with Lojistic.
            </p>

            <p>Excellent sales and marketing programs, along with the expert
                knowledge of industry veterans, support Lojistic&rsquo;s
                referral partners.  Your success is our goal.  We pride ourselves
                on integrity and strong client relationships and hope that you
                will find a partnership with Lojistic to be worthwhile.
                Our generous compensation program will provide you unlimited
                growth opportunity and upside.
            </p>
            <p>
                <img src="images/network.gif" />
            </p>
            <p>
                Any high volume shipper currently using UPS, FedEx, and/or one
                of the many freight carriers will benefit from our solutions.
                Our comprehensive logistics cost management solutions include:
                Carrier Bill & Service Auditing as well as Carrier Rate Analysis
                &amp; Negotiation Solutions. As a Lojistic partner, you
                will be able to offer companies in your network our cost
                savings solutions that require:
            </p>
            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                <ul class="accessorial-charges checkmarks ul">
                    <li>No set-up costs</li>
                    <li>No operational changes</li>
                    <li>No long-term contracts</li>
                    <li>Guaranteed transportation costs savings</li>
                </ul>
            </div>
        </div>
        </article>
    </div>
</section>
    <section class="silver">
        <div class="container">
            <article>
                <h2>Referral Partner Program</h2>
                <h3 class="text-center">
                    We want to know who you know.<br/>
                    Fill out the form to obtain more information on our Partner Program.
                </h3>
                <p></p>
                <div class="col-sm-6 col-sm-offset-3">
                    @include(
                        'parts.hubspot-form',
                        array(
                            'thankyouPage' => '/thank-you',
                            'intent' => 'Referral Program',
                            'btnTxt' => 'LEARN MORE',
                            'formID' =>  '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
                        )
                    )
                </div>
                <div class="col-xs-12">
                    <hr/>
                    <p class="text-center">
                        Or email us at: <a href="mailto:referrals@lojistic.com">referrals@lojistic.com</a>
                    </p>
                </div>
        </div>
        </article>
    </div>
</section>
@stop