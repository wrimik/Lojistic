@extends('layouts.minimal-conversion')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Parcel & Freight Audit: Find Invoice Errors & Save Money',
        'description' => 'Contact Lojistic about reducing shipping costs with our freight auditing services.',
        'keywords'    => 'placehold',
    ])
@overwrite
@section('styles')
    {{--{{ HTML::style('css/prod/pages/wholesale-ltl.css?v='.v()) }}--}}
@stop
@section('scripts')
    {{--{{ HTML::script('js/dim-cal.js') }}--}}
@stop
@section('content')
    <section class="white">
        <div class="container">
            <h1 class="navy">PARCEL & FREIGHT INVOICE AUDIT</h1>
            <div class="col-md-5 pull-right col-sm-12 col-xs-12">
                @include(
                     'parts.conversion-form',
                     array(
                         'thankyouPage' => '/thank-you',
                         'title'=>'Yes I Want My Savings!',
                         'color'=> '#00344b',
                         'colorname'=>'navy',
                         'subcolor'=> '#e8f2f3',
                         'intent' => 'Parcel Audit',
                         'btnTxt' => 'AUDIT INVOICES NOW',
                         'btnColor'=> 'orange',
                         'arrowContents'=> 'Your Savings Await',
                         'formID' => '8063c6d0-b148-401c-8b8a-2b29b186737a'
                     )
                 )
            </div>
            <div class="col-md-7 col-sm-12 col-xs-11 checklist-container-margin hidden-xs">
                    <small><span class="orange"> Recover your savings today.</span></small>

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
@stop
