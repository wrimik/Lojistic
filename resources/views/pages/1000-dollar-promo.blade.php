@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Parcel & Freight Audit Trial Promo -  Reduce Shipping Costs',
        'description' => 'Want to reduce shipping costs? Get a free trial of our parcel and freight audit services with a quick and easy setup at no cost to you.',
        'keywords'    => 'Privacy Policy',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            <div class="col-sm-3">
                <br/>
                <img src="/images/layout/shirt-small.png" alt="1000 Dollar Promo"/>
            </div>
            <div class="col-sm-6">
                <h1 class="text-center">$1,000 In-Your-Pocket Promo</h1>

                <p class="text-center">
                    Lojistic will waive all contingency fees on the initial
                    $1,000* that our audit services successfully have refunded back to your shipping account.
                </p>
            </div>

        </div>
    </section>
    <section class="flatBlue">
        <div class="container text-center">
            <div class="col-sm-6">
                <span class="white fs-28">Put Our Service To The Test </span><br/>
                <span class="white fs-20">Trial the Lojistic shipping audit solution <br/> with no cost or contractual commitment.</span><br/>
                <span class="flatBlack fs-16">If you are unsatisfied at any time for any<br/> reason you can discontinue the trial.</span>
            </div>
            <div class="col-sm-6">
                <span class="white fs-24">Ready To Give It A Shot?</span><br/>
                <a class="btn btn-info btn-lg" rel="nofollow" href="/parcel-freight-audit-demo">Start Your Trial Now</a>
                <hr class="slim"/>
                <a rel="nofollow" href="mailto:info@lojistic.com">or email info@lojistic.com</a>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <h2>Benifits</h2>

            <ul class="benefits free-trial ul">
                <li>Quick and Easy Trial Setup Managed Entirely by <span class="no-wrap">Our Team</span></li>
                <li>No Set-up Fees</li>
                <li>No Transaction Fees</li>
                <li>No Contingency Fees on the Initial $1,000* of Carrier Refunds that Our Audit Service Identifies and
                    Has Applied Back to Your Account
                </li>
                <li>View and Utilize Our Online Logistics Reporting Tool</li>
            </ul>
            <hr/>
            <h4>Our freight audit services guarantee to reduce shipping costs and we can prove it!</h4>
            <ul class="actions rounded-10 feature-grey secondary ul">
                <li class="trial">
                    <h3 class="start">Start Your Lojistic Audit Trial Now</h3>
                    <h4 class="call-us">Call Us at (866) 584-2672</h4>

                    <p class="or-email">or email</p>

                    <p class="email"><strong><a rel="nofollow" href="mailto:info@lojistic.com">info@lojistic.com</a></strong></p>
                </li>
            </ul>
            <hr/>
            <p class="waiver">* Contingency fee waiver amount is dependant upon annual shipping spend. Talk to one
                of our Freight &amp; Parcel Consultants for details.
            </p>
        </div>
    </section>
@stop