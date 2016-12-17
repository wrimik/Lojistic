@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'UPS & FedEx Dimensional Weight Calculator - Lojistic',
        'description' => 'Stop getting slapped with unnecessary charges and try our Dimensional Weight Calculator. Let’s put some of that money back in your pocket, where it belongs.',
        'keywords'    => 'FedEx and DIM, FedEx and UPS  Ground Rates, Dimensional Weight, DIM Calculator, FedEx and UPS Rate Calculator',
    ])
@overwrite
@section('styles')
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/chartist/0.9.4/chartist.min.css') !!}
    {!! Html::style('/css/pages/dim-calc.css?v='.v()) !!}
@stop
@section('scripts')
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/chartist/0.9.4/chartist.min.js') !!}
@stop
@section('content')

    <section  class="banner orange">
        <div class="container">
            <div class="col-sm-3 col-xs-12 text-center">
                <i class="fs-150 white eloji-dim"></i>
            </div>
            <div class="col-sm-9 col-xs-12">
                <h1 class="white">Dimensional Weight Calculator</h1>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <h2>
                Everyone Ships Differently. <br/>
                Describe One Of Your Common Parcels:
            </h2>
            <br/>
            <div class="col-sm-5 col-md-4 text-center">
                <i class="fs-275 orange eloji-dim"></i>
            </div>

            <div class="col-sm-7 col-md-8">
                <div class="col-sm-12">
                    <!-- first row controls -->
                    <div class="col-sm-3 col-xs-4">
                        <span class="fs-12">Length</span><br/>
                        <input id="length" value="15" type="text" class="form-control dim-calc-testing"/>
                    </div>
                    <div class="col-xs-1 hidden-xs">
                        <br/>
                        <span class="fs-12 flatGrey">&times;</span>
                    </div>
                    <div class="col-sm-3 col-xs-4">
                        <span class="fs-12">Width</span><br/>
                        <input id="width" value="15" type="text" class="form-control dim-calc-testing"/>
                    </div>
                    <div class="col-xs-1  hidden-xs">
                        <br/>
                        <span class="fs-12 flatGrey">&times;</span>
                    </div>
                    <div class="col-sm-3 col-xs-4">
                        <span class="fs-12">Height</span><br/>
                        <input id="height" value="15" type="text" class="form-control dim-calc-testing"/>
                    </div>
                </div> <!-- end first row controls -->
                <div class="col-xs-12">
                    <div class="col-sm-3 col-xs-offset-4">
                        <span class="fs-12 flatGrey">in inches</span>
                    </div>
                </div>
                <!-- second row controls -->
                <div class="col-sm-12">
                    <div class="col-sm-3 col-xs-4">
                        <span class="fs-12">Weight</span><br/>
                        <input id="weight" value="5" type="text" class="form-control dim-calc-testing"/>
                    </div>
                    <div class="col-sm-3 col-xs-4 col-sm-offset-1">
                        <span class="fs-12">Volume</span><br/>
                        <input id="per_month" value="1000" type="text" class="form-control dim-calc-testing"/>
                    </div>
                    <div class="col-sm-3 col-xs-4 col-sm-offset-1">
                        <span class="fs-12">Carrier</span><br/>
                        <select id="carrier" class="form-control dim-calc-testing">
                            <option value="ups">UPS</option>
                            <option value="fedex">FedEx</option>
                        </select>
                    </div>
                </div>
                <!-- end second row controls -->
                <!-- advanced controls -->
                <div id="advanced" class="col-sm-12">
                    <div class="advanced">
                        <div class="col-xs-4">
                            <span class="fs-12">Carrier Disc.</span><br/>
                            <input id="discount" value="0" type="text" class="form-control dim-calc-testing"/>
                            %
                        </div>
                        <div class="col-xs-4">
                            <span class="fs-12">Min. Charge</span><br/>
                            <input id="min_charge" value="0" type="text" class="form-control dim-calc-testing"/>
                        </div>
                        <div class="col-xs-4">
                            <span class="fs-12">DIM Divisor</span><br/>
                            <input id="dim_divisor" value="166" type="text" class="form-control dim-calc-testing"/>
                        </div>
                    </div>
                </div>
                <!-- end advanced controls -->
                <div class="col-xs-12">
                    <div class="dim-calc-button-alignment">
                        <div class="btn btn-primary pull-right" id="calculate-dims">CALCULATE</div>
                        <div id="toggle-advanced" class="btn btn-info pull-right flatBlue" style="min-width:208px;">
                            ADVANCED OPTIONS
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="no-results">
        <div class="container">
            <div class="alert alert-success" role="alert"></div>
        </div>
    </section>
    <section id="dim-results">
        <div class="container">
            <div id="zone-toggle" class="navy">
                Your Results Based On
                <select class="form-control">
                    <option value="2">ZONE 2</option>
                    <option value="3">ZONE 3</option>
                    <option value="4">ZONE 4</option>
                    <option value="5" selected>ZONE 5</option>
                    <option value="6">ZONE 6</option>
                    <option value="7">ZONE 7</option>
                    <option value="8">ZONE 8</option>
                </select>
            </div>
            <div id="res-summary" class="col-xs-12 col-sm-5">
                <div class="row">
                    <div class="col-xs-5 col-sm-5">
                        <div class="res blue">
                            <div class="res-title">
                                Actual Weight
                            </div>
                            <div class="res-content res-actual-w">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-1 np text-vc">
                        <img src="{{ URL::asset('images/vs.png') }}"/>
                    </div>
                    <div class="col-xs-5 col-sm-5">
                        <div class="res red">
                            <div class="res-title">
                                Dimensional Weight
                            </div>
                            <div class="res-content res-dim-w">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-5 col-sm-5">

                        <div class="res blue">
                            <div class="res-title">
                                Actual Weight<br/>
                                Cost Per Package
                            </div>
                            <div class="res-content res-actual-p">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-1 np text-vc">
                        <img src="{{ URL::asset('images/vs.png') }}"/>
                    </div>
                    <div class="col-xs-5 col-sm-5">
                        <div class="res red">
                            <div class="res-title">
                                Dimensional Weight<br/>
                                Cost Per Package
                            </div>
                            <div id="yearly-total" class="res-content res-dim-p">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-5 col-sm-5">
                        <div class="res blue">
                            <div class="res-title">
                                Your Rate Increase<br/>
                                Per Package
                            </div>
                            <div class="res-content res-inc-pp">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-2 col-sm-1 np text-vc">
                        <img src="{{ URL::asset('images/dim-arrow.png') }}"/>
                    </div>
                    <div class="col-xs-5 col-sm-5">
                        <div class="res red">
                            <div class="res-title">
                                Your Rate Increase<br/>
                                Per Month
                            </div>
                            <div class="res-content res-inc-pm">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-11">
                        <div class="res red">
                            <div class="res-title">
                                Yearly Difference
                            </div>
                            <div class="res-content res-inc-py">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div id="charts" class="col-xs-12 col-sm-7">
                <b>Price Per Package (By Zone)</b>

                <div class="chart ct-chart" id="chart-ppz">
                </div>
                <b>Monthly Projected Costs</b>

                <div class="chart ct-chart" id="chart-mpc">
                </div>
            </div>
        </div>
    </section>
    <!--<div class="widowspeak"></div>-->
    <section class="navy">
        <div class="container">
            <div class='col-sm-8 col-xs-12 text-center' id="slap">
                <b>Stop getting slapped with unnecessary charges.</b><br class="hidden-xs"/>
                <b>Let&rsquo;s put some of that <span class="res-inc-py">money </span></b><br class="hidden-xs"/>
                <b>back in your pocket, where it belongs.</b><br class="hidden-xs"/>
                We can help.
                <hr class="visible-xs"/>
            </div>
            <div class='col-sm-4 col-xs-12'>
                @include(
                'parts.hubspot-form',
                    array(
                        'thankyouPage' => '/thank-you',
                        'intent' => 'DIM',
                        'btnTxt' => 'Continue',
                        'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
                    )
                )
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <div class="col-sm-6 col-xs-12">
                <article>
                    <h3>The New FedEx &amp; UPS DIM Rule</h3>

                    <p>
                        FedEx &amp; UPS just announced what will likely be the single largest rate increase on record
                        for many shippers.
                        Effective December 29, 2014 for UPS and Thursday, January 1, 2015 for FedEx, both carriers will
                        impose dimensional weight (DIM) pricing on all Ground packages.
                    </p>

                    <p>
                        Currently, FedEx &amp; UPS only apply DIM pricing to Ground packages measuring three cubic feet
                        (5184 cubic inches) or greater.
                        Come 2015, FedEx &amp; UPS are eliminating this rule, enabling their ability to apply
                        dimensional weight pricing to
                        EVERYTHING (including Ground packages measuring less than three cubic feet). Subjecting all
                        packages to dimensional
                        weight pricing will affect virtually all US shippers, as the vast majority of Ground shipments
                        are less than three cubic feet.
                    </p>

                    <p>
                        For those who have negotiated a custom DIM factor greater than 166... you are not immune to this
                        change.
                        Make no mistake; unless your contract specifies an exception to the 3 cubic foot DIM threshold,
                        this will affect you.
                        The dimensional pricing rule change will coincide with the typical annual price increase, thus
                        having an extraordinary
                        impact on the cost of shipping in 2015 and beyond.
                    </p>

                    <p>
                        It is not advisable to wait until after the rate increase has taken effect before taking action.
                        Now is the time to start planning.
                    </p>

                    <p>
                        Curious to know how this major rate increase will affect your costs? Lojistic can quantify the
                        impact to your
                        business and help you determine a strategic approach to mitigate this change to Ground shipping
                        prices.
                    </p>
                </article>
            </div>
            <div class="col-sm-5 col-sm-offset-1 col-xs-12">
                <div id="samples">

                    <div class="row">
                        <div class="col-xs-5">
                            <div class="res grey">
                                <div class="res-title">
                                    BOX SIZE
                                </div>
                                <div class="res-content" id="res-actual-w">
                                    6&times;6&times;6 in
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="res">
                                <div class="res-title">

                                </div>
                                <div class="res-content" id="res-actual-w">
                                    <img src="{{ URL::asset('images/dim-eq.png') }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-5">
                            <div class="res grey">
                                <div class="res-title">
                                    MINIMUM WEIGHT
                                </div>
                                <div class="res-content" id="res-actual-w">
                                    2 Lbs.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-5">
                            <div class="res grey">
                                <div class="res-title">
                                    BOX SIZE
                                </div>
                                <div class="res-content" id="res-actual-w">
                                    12&times;12&times;12 in
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="res">
                                <div class="res-title">

                                </div>
                                <div class="res-content" id="res-actual-w">
                                    <img src="{{ URL::asset('images/dim-eq.png') }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-5">
                            <div class="res grey">
                                <div class="res-title">
                                    MINIMUM WEIGHT
                                </div>
                                <div class="res-content" id="res-actual-w">
                                    11 Lbs.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-5">
                            <div class="res grey">
                                <div class="res-title">
                                    BOX SIZE
                                </div>
                                <div class="res-content" id="res-actual-w">
                                    16&times;16&times;16 in
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="res">
                                <div class="res-title">

                                </div>
                                <div class="res-content" id="res-actual-w">
                                    <img src="{{ URL::asset('images/dim-eq.png') }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-5">
                            <div class="res grey">
                                <div class="res-title">
                                    MINIMUM WEIGHT
                                </div>
                                <div class="res-content" id="res-actual-w">
                                    25 Lbs.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            @include('parts.forms.contact-or-schedule', array(
                'scheduleTitle' => 'SCHEDULE A DEMO',
                'scheduleText'  => 'Our Savings Demo Is Quick And Will Demonstrate How To Significantly Reduce Your Shipping Costs.',
                'scheduleBtnText' => 'SCHEDULE NOW',
                'formVars' => array(
                    'thankyouPage' => '/thank-you',
                    'intent' => 'DIM',
                    'btnTxt' => 'Continue',
                    'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
                )
            ))
        </div>
    </section>
@stop