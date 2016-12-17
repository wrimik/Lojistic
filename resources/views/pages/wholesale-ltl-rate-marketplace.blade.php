@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Wholesale LTL Freight Marketplace',
        'description' => 'Lojistic created an online marketplace for wholesale LTL freight rates that offers an ever-increasing network of carriers. Our wholesale LTL marketplace provides an easy way to connect with lots of carriers for all your shipping needs.',
        'keywords'    => '',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            <h2 class="flatSeafoam">A Marketplace For Wholesale LTL Rates<br/>
                <small>Great shipping rates. Lots of LTL carriers.</small>
            </h2>
            <div class="row">
                <div class="col-sm-4">
                    @include('parts.snippets.social-circles', array(
                    'circleSize'=>'circ-150',
                    'elojiSize' => 'fs-72',
                    'eloji' => 'eloji-upload',
                    'color' => 'flatSeafoam',
                    'title'=>'Easy Sign Up',
                    'text'=> 'Sign up, login, & ship.<br>It\'s that simple.' ))
                </div>
                <div class="col-sm-4">
                    @include('parts.snippets.social-circles', array(
                    'circleSize'=>'circ-150',
                    'elojiSize' => 'fs-72',
                    'eloji' => 'eloji-shopping-cart-alt',
                    'color' => 'flatSeafoam',
                    'title'=>'Shop Wholesale Rates',
                    'text'=> 'Competitive LTL rates... <br> compare ship, and save.' ))
                </div>
                <div class="col-sm-4">
                    @include('parts.snippets.social-circles', array(
                    'circleSize'=>'circ-150',
                    'elojiSize' => 'fs-72',
                    'eloji' => 'eloji-bigrig',
                    'color' => 'flatSeafoam',
                    'title'=>'Well-Known Carriers',
                    'text'=> 'LTL carriers you know and love...&nbsp;and then some.' ))
                </div>
            </div>
            <div class="col-centered col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                <a href="wholesale-ltl-rate-marketplace/sign-up"
                   class="btn btn-thick flatSeafoam text-center hover-color-opacity">
                    SIGN UP NOW
                </a>
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <h2 class="text-center flatSeafoam">Shop Wholesale LTL Rates In The Lojistic Marketplace</h2>

            <div class="col-sm-8">
                <p class="fs-20">
                    <br>
                    Lojistic created an online marketplace for wholesale LTL freight rates that offers an
                    ever-increasing network of carriers. Our wholesale LTL marketplace provides an easy way to connect
                    with lots of carriers for all your shipping needs. In addition to great discounts, you can compare
                    rates, ship, track and save on all your LTL freight service needs.
                    <br><br>
                    You can select LTL services within our vast network of carriers based on cost, transit time, or a
                    combination of both. Our marketplace ensures you have lots of options at great rates.
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <br/>
                <img src="/images/special-shopping-cart.png">
            </div>
        </div>
        <div class="text-center">
            <br>
            <a href="/wholesale-ltl-rate-marketplace/sign-up">
                <div class="btn btn-primary btn-lg" style="max-width: 300px">START SHOPPING LTL RATES</div>
            </a>
        </div>
    </section>

    <section class="flatSeafoam">
        <div class="container same-height-parent">
            <h2 class="white">The Lojistic LTL Marketplace Advantage</h2>

            <div class="row ">
                <div class=" col-xs-12 col-sm-12 col-md-4">
                    @include('parts.snippets.door-hanger', [
                        'title' => 'COMPLIMENTARY <br> ACCESS',
                        'titleColor' => 'lightGrey',
                        'eloji' => 'eloji-shopping-cart-2',
                        'elojiCircColor' => 'flatSeafoam',
                        'text' => 'No cost, no catch access to our exclusive LTL marketplace for all your shipping needs'
                    ])
                </div>
                <div class=" col-xs-12 col-sm-12 col-md-4">
                    @include('parts.snippets.door-hanger', [
                        'title' => 'COMPETITIVE <br> RATES',
                        'titleColor' => 'lightGrey',
                        'eloji' => 'eloji-dollar-sign',
                        'elojiCircColor' => 'flatSeafoam',
                        'text' => 'Super competitive rates from the carriers you’ve come to know and love...and then some'
                    ])
                </div>
                <div class=" col-xs-12 col-sm-12 col-md-4">
                    @include('parts.snippets.door-hanger', [
                        'title' => 'FREIGHT <br> CONCIERGE',
                        'titleColor' => 'lightGrey',
                        'eloji' => 'eloji-operator',
                        'elojiCircColor' => 'flatSeafoam',
                        'text' => 'Personalized customer service from your own dedicated freight concierge'
                    ])
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    @include('parts.snippets.door-hanger', [
                        'title' => 'PRODUCT<br>VISIBILITY',
                        'titleColor' => 'lightGrey',
                        'eloji' => 'eloji-computer-graph',
                        'elojiCircColor' => 'flatSeafoam',
                        'text' => 'Centralized tracking and predictive freight management technology'
                    ])
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    @include('parts.snippets.door-hanger', [
                        'title' => 'INVOICED <br>ON DELIVERY',
                        'titleColor' => 'lightGrey',
                        'eloji' => 'eloji-delivery-cart',
                        'elojiCircColor' => 'flatSeafoam',
                        'text' => 'Shipments invoiced on delivery with POD and all carrier service documents'
                    ])
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    @include('parts.snippets.door-hanger', [
                        'title' => 'COMPLIMENTARY <br>FREIGHT AUDIT',
                        'titleColor' => 'lightGrey',
                        'eloji' => 'eloji-audit',
                        'elojiCircColor' => 'flatSeafoam',
                        'text' => 'Every invoice receives a free freight audit to help ensure carrier billing accuracy'
                    ])
                </div>
            </div>
        </div>
    </section>

    @include('parts.20-20-leadin')

    <section class="silver">
        <div class="text-center">
            <div class="container">
                <h3 class="flatSeafoam">THIS WHOLESALE LTL FREIGHT MARKETPLACE IS RAD!!!<br>
                    <small>Share it with your best friend, neighbor, coworker...</small>
                </h3>
                <hr class="slim">
                <div class="col-sm-10 col-sm-offset-1 ">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-sm-3 col-xs-6 text-center">
                            <div class="social-spacing">
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//lojistic.com/audisee&title=Free%20Parcel%20Audit%20Web%20Tool&summary=Instantly%20audit%20your%20UPS%20and%20FedEx%20Invoice">
                                    <div class="circ circ-75 flatSeafoam calc-hover text-center">
                                        <i class="eloji-linkedin text-vc fs-36 white"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3  col-xs-6 text-center">
                            <div class="social-spacing">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//lojistic.com/audisee">
                                    <div class="circ circ-75 flatSeafoam calc-hover text-center">
                                        <i class="eloji-facebook text-vc fs-36 white"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6 text-center">
                            <div class="social-spacing">
                                <a href="https://twitter.com/home?status=Check%20out%20our%20free%20audit%20tool%3A%20http%3A//lojistic.com/audisee%20">
                                    <div class="circ circ-75 flatSeafoam calc-hover text-center">
                                        <i class="eloji-twitter text-vc fs-36 white"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3  col-xs-6 text-center">
                            <div class="social-spacing">
                                <a href="mailto:info@lojistic.com">
                                    <div class="circ circ-75 flatSeafoam calc-hover text-center">
                                        <i class="eloji-email text-vc fs-36 white"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- This section is was purposely built in case the marketing strategy changed-->
    <section class="hidden">
        <div class="container">
            <h2 class="flatSeafoam">Well Known Carriers At Wholesale Rates</h2>

            <p class="text-center">Ship with carriers you've come to know and love...and then some.<br>
                Download an intro brochure on our wholesale LTL marketplace and a longer list of available carriers</p>
            <!-- <div class="row">
                <div class="col-md-3"><img  src="{{ asset('images/logos/conway.png') }}"></div>
                <div class="col-md-3"><img  src="{{ asset('images/logos/fedex-logo.png') }}"></div>
                <div class="col-md-3"><img  src="{{ asset('images/logos/rl-logo.png') }}"></div>
                <div class="col-md-3"><img  src="{{ asset('images/logos/ups-logo.png') }}"></div>
            </div>
            <div class="row">
                <div class="col-md-3"><img  src="{{ asset('images/logos/abf-logo.png') }}"></div>
                <div class="col-md-3"><img  src="{{ asset('images/logos/estes-logo.png') }}"></div>
                <div class="col-md-3"><img  src="{{ asset('images/logos/old-dominion-logo.png') }}"></div>
                <div class="col-md-3"><img  src="{{ asset('images/logos/yrc-logo.png') }}"></div>
            </div>-->
            <br>

            <div class="text-center">
                <div class="btn btn-primary uppercase btn-lg" style="max-width: 300px">DOWNLOAD INTRO BROCHURE</div>
            </div>
        </div>
    </section>

    <section class="brightBlue np">
        <div class="container">
            <div class="closing-section">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <i class="eloji eloji-wrench-thingy white fs-250"></i>
                    </div>
                    <div class="col-sm-8">
                        <br>

                        <h2 class="text-center">Shipping Resource Guide</h2>

                        <p class="fs-20 text-center">
                            Free web tools, white paper resources and helpful tips<br>
                            NO COST &bull; NO CATCH &bull; NO JOKE<br>
                            Download this informative guide today<br>
                        </p>

                        <div class="text-center">
                            <a href="/pdf/Shipping-Resource-Guide.pdf" target="_blank" class="btn btn-info btn-md">
                                GIMME MY GUIDE
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <h2 class="flatSeafoam"> Check Out These Sweet (and free) Web Tools!</h2>

            <div class="" style="margin-top:25px;">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="" href="/shipping-costs-calculators/fedex-ups-rates-calculator">
                        <div class="circ circ-120 flatSeafoam text-center calc-hover">
                            <i class="eloji eloji-calc text-vc fs-60"></i>
                        </div>
                    </a>

                    <p class="tools-title flatSeafoam text-center">UPS & FedEx Rates<br>Calculator</p>
                    <br>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a class="" href="/shipping-costs-calculators/fedex-ups-rate-comparison-tool">
                        <div class="circ circ-120 flatSeafoam text-center calc-hover">
                            <i class="eloji eloji-calc-rates text-vc fs-60 white"></i>
                        </div>
                    </a>

                    <p class="tools-title flatSeafoam text-center">UPS & FedEx Rates<br>Comparison Tool</p>
                    <br>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="/shipping-costs-calculators/fedex-ups-ground-dim-calculator">
                        <div class="circ circ-120 flatSeafoam text-center calc-hover">
                            <i class="eloji eloji-dim text-vc fs-60 white"></i>
                        </div>
                    </a>

                    <p class="tools-title flatSeafoam text-center">Dimensional Weight<br>Calculator</p>
                    <br>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="/shipping-insurance#insurance-calculator">
                        <div class="circ circ-120 flatSeafoam text-center calc-hover">
                            <i class="eloji eloji-calc-insurance text-vc fs-60 white"></i>
                        </div>
                    </a>

                    <p class="tools-title flatSeafoam text-center">Shipping Insurance<br>Savings Calculator</p>
                    <br>
                </div>
            </div>
        </div>
    </section>

@stop