@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Shipping Insurance Sign Up',
        'description' => 'placehold',
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
            <h1 class="text-center brightBlue">SHIPPING INSURANCE<br><small> Comprehensive Coverage At Discounted Rates</small></h1>
            <div class="col-md-5 pull-right col-sm-12 col-xs-12">
                &nbsp;<br>
                @include(
                     'parts.conversion-form',
                     array(
                         'thankyouPage' => '/thank-you',
                         'title'=>'I Want Shipping Insurance!',
                         'color'=> '#009ff2',
                         'colorname'=>'brightBlue',
                         'subcolor'=> '#e8f2f3',
                         'intent' => 'Shipping Insurance',
                         'btnTxt' => 'GET COVERAGE NOW',
                         'btnColor' => 'orange',
                         'arrowContents'=> 'Start saving today...<br>Our low cost coverage awaits',
                         'howCanWeHelp'=> false,
                         'formID' => '8063c6d0-b148-401c-8b8a-2b29b186737a'
                     )
                 )
            </div>
            <div class="col-md-7 col-sm-12 col-xs-11 checklist-container-margin">
                <div class="row np">
                    <!--one --><br>
                    <div class="col-sm-3 hidden-xs text-center">
                            <div class="circ circ-50 brightBlue"><i class="eloji eloji-check white fs-24 text-vc "></i></div>
                    </div>
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h3 class="brightBlue checklist-margin-md">Save 50-92% Off Your Current Costs</h3>
                    </div>
                </div>
                <div class="row np checklist-margin-md">
                    <!-- two-->
                    <div class="col-sm-3 hidden-xs text-center">
                        <div class="circ circ-50 brightBlue"> <i class="eloji eloji-check white fs-24 text-vc "></i></div>
                    </div>
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h3 class="brightBlue checklist-margin-md">No Minimums</h3>
                    </div>
                </div>
                <!--three -->
                <div class="row np checklist-margin-md">
                    <div class="col-sm-3 hidden-xs text-center">

                            <div class="circ circ-50 brightBlue"> <i class="eloji eloji-check white fs-24 text-vc "></i></div>

                    </div>
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h3 class="brightBlue checklist-margin-md">Most Items Covered</h3>
                    </div>
                </div>
                <!-- four-->
                <div class="row np checklist-margin-md">
                    <div class="col-sm-3 hidden-xs text-center">

                            <div class="circ circ-50 brightBlue"> <i class="eloji eloji-check white fs-24 text-vc "></i></div>

                    </div>
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h3 class="brightBlue checklist-margin-md">Easy Paperless Online Claims</h3>
                    </div>
                </div>
                <!-- five -->
                <div class="row np checklist-margin-md">
                    <div class="col-sm-3 hidden-xs text-center">
                            <div class="circ circ-50 brightBlue"> <i class="eloji eloji-check white fs-24 text-vc "></i></div>
                    </div>
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h3 class="brightBlue checklist-margin-md">Underwriting by Lloyd’s of London</h3>
                    </div>
                </div>
            </div><!-- col-7 -->

        </div>
        <br>
    </section>
    @include('parts.20-20-navy')
    @include('parts.why-should-you',array(
    'title'=>'Why Should You Use Lojistic’s Shipping Insurance?',
    'body'=>'Our full coverage shipping insurance solution is offered at a substantial discount to the carrier’s declared value rates. With a quick implementation, integrated reporting, and an expeditious paperless claims process, we have simplified the shipping insurance experience.'
    ))
@stop
