@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Parcel Freight Bill Audit Sign Up',
        'description' => 'Recover your Savings Today.',
        'keywords'    => 'keywords for Bing',
    ])
@overwrite
@section('content')
    <section class="conversion-form-small-padding">
        <div class="container">
            <h1 class="text-center navy nm">PARCEL & FREIGHT INVOICE AUDIT</h1>
            <div class="col-md-5 pull-right col-sm-12 col-xs-12">
                @include(
                     'parts.conversion-form',
                     array(
                         'howCanWeHelp'=>'false',
                         'thankyouPage' => '/thank-you',
                         'title'=>'Yes, I Want My Savings!',
                         'color'=> '#00344b',
                         'colorname'=>'navy',
                         'subcolor'=> '#e8f2f3',
                         'intent' => 'Parcel Audit',
                         'btnTxt' => 'GET THE BALL ROLLING',
                         'btnColor'=> 'orange',
                         'arrowContents'=> 'Get the Ball Rolling...<br>Your Savings Await',
                         'formID' => '8063c6d0-b148-401c-8b8a-2b29b186737a'
                     )
                 )
                <br>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-11 checklist-container-margin hidden-xs">
                    <h2 class="orange"><span > Recover your savings today.</span></h2>
                <div class="row np">
                    <!--one -->
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h3 class="navy checklist-margin">
                            <i class="eloji eloji-check orange fs-40 text-vc"></i>
                            &nbsp; Contingency Based Pricing
                        </h3>
                    </div>
                </div>
                <div class="row np">
                    <!-- two-->
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h3 class="navy checklist-margin">
                            <i class="eloji eloji-check orange fs-40 text-vc"></i>
                            &nbsp; No Contracts
                        </h3>
                    </div>
                </div>
                <!--three -->
                <div class="row np">
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h3 class="navy checklist-margin">
                            <i class="eloji eloji-check orange fs-40 text-vc"></i>
                            &nbsp; Detailed Reporting and Analytics
                        </h3>
                    </div>
                </div>
                <!-- four-->
                <div class="row np">
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h3 class="navy checklist-margin">
                            <i class="eloji eloji-check orange fs-40 text-vc"></i>
                            &nbsp; Turn-Key Setup Process
                        </h3>
                    </div>
                </div>
                <!-- five -->
                <div class="row np">
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h3 class="navy checklist-margin">
                            <i class="eloji eloji-check orange fs-40 text-vc"></i>
                            &nbsp; Save Lots of Money!
                        </h3>
                    </div>
                </div>
            </div>
            <!-- col-7 -->
        </div>
    </section>
    @include('parts.20-20-navy')
    @include('parts.why-should-you',array(
    'title'=>'Why Should You Audit All Charges?',
    'body'=>'Virtually every carrier shipping invoice contains errors. These may include: accessorial charges, rate inaccuracies, duplicate charges, and/or charges for shipments delivered outside the carrier’s service guarantee(s). Carrier errors are challenging to identify and entail a labor intensive recovery process. Consequently, almost all shippers unknowingly overpay their carrier with each payment sent.'
    ))


@stop
