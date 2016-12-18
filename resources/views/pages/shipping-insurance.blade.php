@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Shipping Insurance Solution  - Lojistic',
        'description' => 'Shipping insurance, carrier analysis and freight audit services by Lojistic help reduce shipping costs.  We deliver measurable and sustainable results with compensation based on results.',
        'keywords'    => 'shipping insurance, freight management, Lojistic, carrier analysis, shipment tracking software, freight auditing companies, freight audit companies',
    ])
@overwrite
@section('scripts')
<script src="//www.google.com/jsapi"></script> <!-- used in charts -->
@stop
@section('styles')
{{--    {{ HTML::style('/css/prod/pages/insurance.css?v='.v())}}--}}
@stop
@section('content')

    <section  class="banner navy">
        <div class="container">
            <div class="col-sm-3 col-xs-12 text-center">
                <i class="fs-150 white eloji-insurance"></i>
            </div>
            <div class="col-sm-9 col-xs-12">
                <h1 class="white">Shipping Insurance</h1>
            </div>
        </div>
    </section>

    <!--    Intro   -->
    <section class="white">
        <div class="container">
            <h2>Shipping Insurance</h2>

            <p>
                Our full coverage shipping insurance solution is offered at a substantial
                discount to the carrier&rsquo;s declared value rates. With a quick implementation,
                integrated reporting, and an expeditious paperless claims process, we have
                simplified the shipping insurance experience.
            </p>
        </div>
    </section>

    <!--    SAVINGS   -->
    <section class="silver hidden-xs">
        <div class="container">
            <div class="col-sm-3 text-center">
                <i class="fs-200 navy eloji eloji-insurance"></i>
            </div>
            <div class="col-sm-4 text-center text-vc">
                <span class="fs-76 fw-bold navy">SAVE</span><br/>
                <span class="fs-56 fw-bold flatGrey">50-92%</span><br/>
                <span class="fs-16 fw-bold navy">ON SHIPPING INSURANCE</span>
            </div>
            <div class="col-sm-5 text-center text-vc">
                <span class="fs-16 flatGrey">Parcel Insurance Rates Have Increased</span><br/>
                <span class="fs-100 fw-bold navy" style="line-height: 0.97;">33%</span><br/>
                <span class="fs-20 fw-bold flatGrey">Over The Past 5 Years</span>
            </div>
        </div>
    </section>

    <!--    Calculator Inputs   -->
    <section class="white" id="insurance-calculator">
        <div class="container" id="calculator">
            <h3 class="text-center navy">How Much Can You Reduce Your Insurance Costs?<br/>
                Use Our Shipping Insurance Calculator To Estimate Your Savings </h3>
            <hr class="white"/>
            <div class="col-sm-2 text-center">
                <i class="fs-150 eloji eloji-calc navy"></i>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <label>Average Shipment Value</label>
                <input id="dec_val" class="form-control" type="text" value="500">
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <label># Of Packages Per Month</label>
                <input id="num" class="form-control" type="text" value="5000">
            </div>
            <div class="col-sm-3 pull-right">
                <br/>
                <div class="btn btn-primary btn-lg pull-right calculate scrollTo" data-target="#results" data-anal="Calculator|Insurance Calculator">CALCULATE
                    SAVINGS
                </div>
            </div>
        </div>
        <div class="container hidden" id="results">
            <hr />
            <h2 class="navy">Your Results</h2>
            <div class="col-sm-5">
                <div id="old">
                    @include('parts.snippets.flag', array(
                        'flagColor' => 'red', //navy
                        'size' => '12',
                        'heading' => 'Standard Carrier Rate',
                        'text' => '<span class="price"><b class="fs-40 red">?</b></span>'
                    ))
                    <div class="col-xs-12 rates fs-12">
                        <br>
                        <p>
                            Based on a unit cost of
                            <input type="text" class="form-control inline" id="carrier_rate" value="0.90" style="display:none; max-width:70px; margin:0 5px 0 10px"/>
                            <b>0.90</b> per $100 insured
                            <a id="edit_rate" class="edit">(edit)</a><br/>
                            And a minimum fee per shipment of
                            <input type="text" class="form-control inline" id="min" value="2.70" style="display:none; max-width:70px;margin:0 5px 0 10px"/>
                            <b>2.70</b> <a id="edit_min" class="edit">(edit)</a>
                        </p>
                        <div class="btn btn-primary calculate calculate">RECALCULATE</div>
                        <br/>
                        <br/>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <br>
                <div class="circ circ-75 navy text-center"><b class="white fw-thin fs-28  text-vc">VS</b></div>
                <br>
            </div>
            <div class="col-sm-5">
                <div id="new">
                    @include('parts.snippets.flag', array(
                        'flagColor' => 'flatBlue', //navy
                        'size' => '12',
                        'heading' => 'Our Awesome Fonzie Rates &#128077;',
                        'text' => '<span class="price"><b class="fs-40 flatBlue">?</b></span>'
                    ))
                    <div class="col-xs-12 rates fs-12">
                        <br>
                        <p>
                            Based on our Standard Awesome Fonzie rate of 0.40 per $100 insured<br/>
                            &check; No minimum fee
                        </p>
                    </div>
                </div>
            </div>
            <hr class="slim white"/>
            <div class="col-xs-12 silver" id="chart">
                <div class="col-sm-9">
                    <br/>
                    <div id="chart_div" style="height:300px"></div>
                    <br/>
                </div>
                <div class="col-sm-3 text-center text-vc">
                    <p>
                        <strong>Estimated Yearly Savings</strong><br/>
                        <span id="chart_total"></span><br/><br/>
                    </p>
                    <span class="btn btn-success btn-lg scrollTo" data-target="#convert">START SAVING</span>
                </div>
            </div>
        </div>
    </section>
    <section id="dang" class="flatBlue hidden">
        <div class="container">
            <p class="text-center">
                Dang, you've got some good prices!<br/>
                We're almost certain we can offer competitive rates, but
                that's the kind of thing a person would have to determine after looking at your account.
            </p>
            <p class="text-center">
                <a class="btn btn-info" rel="nofollow" href="signup-insurance.php">RESET THE CALCULATOR</a>
                <a class="btn btn-info" rel="nofollow" href="signup-insurance.php">GET A CUSTOM QUOTE</a>
            </p>
        </div>
    </section>


    <section class="silver hidden-xs">
        <div class="container">
            <h2>Lojistic Shipping Insurance Benefits</h2>
            <table class="comparison-table fs-16 col-xs-12">
                <thead class="blue">
                <tr>
                    <th>Features</th>
                    <th>FedEx &amp; UPS</th>
                    <th>Lojistic Shipping Insurance</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Minimum Fee</td>
                    <td>$2.70</td>
                    <td>
                        <i class="eloji eloji-check green"></i>
                        No Minumum
                    </td>
                </tr>
                <tr>
                    <td>Rates</td>
                    <td>90&cent; per $100 Covered</td>
                    <td>
                        <i class="eloji eloji-check green"></i>
                        55-92% Less Than Your Current Costs
                    </td>
                </tr>
                <tr>
                    <td>Coverage</td>
                    <td>Restricted</td>
                    <td>
                        <i class="eloji eloji-check green"></i>
                        Most Items Covered
                    </td>
                </tr>
                <tr>
                    <td>Claims</td>
                    <td>Total pain in the ass</td>
                    <td>
                        <i class="eloji eloji-check green"></i>
                        Simplified Paperless Process
                    </td>
                </tr>
                <tr>
                    <td>True All Risk Insurance</td>
                    <td>No</td>
                    <td>
                        <i class="eloji eloji-check green"></i>
                        <i>Yes!</i>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="white">
        <div class="container">
            @include('parts.forms.contact-or-schedule', array(
                'scheduleTitle' => 'SCHEDULE A TALK',
                'scheduleText'  => 'Want To Discuss Your Needs?<br/>Get A No Cost, No Obligation Analysis Of Your Parcel Insurance Today!',
                'scheduleBtnText' => 'SCHEDULE NOW',
                'formVars' => array(
                            'thankyouPage' => '/thank-you',
                            'intent' => 'Parcel Insurance',
                            'btnTxt' => 'Continue',
                            'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
                        )
            ))
        </div>
    </section>
@stop