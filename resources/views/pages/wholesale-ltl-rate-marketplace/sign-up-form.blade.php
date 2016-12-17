@extends('layouts.minimal-conversion')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Wholesale LTL Freight Marketplace',
        'description' => 'Stop getting slapped with unnecessary charges and try our Dimensional Weight Calculator. Let’s put some of that money back in your pocket, where it belongs.',
        'keywords'    => 'FedEx and DIM, FedEx and UPS  Ground Rates, Dimensional Weight, DIM Calculator, FedEx and UPS Rate Calculator',
    ])
@overwrite
@section('styles')
    {{--{{ HTML::style('css/prod/pages/wholesale-ltl.css?v='.v()) }}--}}
@stop
@section('scripts')
    {{--{{ HTML::script('js/dim-cal.js') }}--}}
@stop
@section('content')
    <div class="minimal-form-body">
        <div class="container">
            <div class="col-md-7 col-sm-12 col-xs-11 ">
                <h1 class="text-center flatSeafoam">SHOP WHOLESALE LTL RATES<br><small> Great shipping rates.  Lots of LTL carriers. </small></h1>
                <br>
                <br>
                <div class="row np">
                <!--one -->
                <div class="col-sm-3 hidden-xs text-center">
                    <div class="circ circ-75 flatSeafoam">
                        <i class="eloji eloji-check fs-28 text-vc"></i>
                    </div>
                </div>
                <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                    <h2 class="flatSeafoam checklist-margin">Sign up, login & ship.<br><small>It’s that simple.</small></h2>
                </div>
                </div>
                <br>

                <div class="row np">
                <!-- two-->
                <div class="col-sm-3 hidden-xs text-center">
                    <div class="circ circ-75 flatSeafoam">
                        <i class="eloji eloji-check fs-28 text-vc"></i>
                    </div>
                </div>
                <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                    <h2 class="flatSeafoam checklist-margin">Competitive LTL rates...<br><small>compare, ship, and save.</small></h2>
                </div>
                </div>
                <br>
                <!--three -->
                <div class="row np">
                <div class="col-sm-3 hidden-xs text-center">
                    <div class="circ circ-75 flatSeafoam">
                        <i class="eloji eloji-check fs-28 text-vc "></i>
                    </div>
                </div>
                <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                    <h2 class="flatSeafoam checklist-margin">LTL carriers you know and love…<br><small>and then some.</small></h2>
                </div>
                </div>

            </div><!-- col-7 -->
            <div class="col-md-5 col-sm-12 col-xs-12">
                <br>
                <!-- test colors: flatBlue, #6096c3, 45bbf6 -->
                @include(
                     'parts.conversion-form',
                     array(
                         'thankyouPage' => '/thank-you',
                         'title'=>'Yes! I Want Wholesale Rates!',
                         'color'=> '#13828c',
                         'colorname'=>'flatSeafoam',
                         'subcolor'=> '#e8f2f3',
                         'intent' => 'Wholesale LTL Rates',
                         'btnTxt' => 'START SHOPPING',
                         'btnColor'=>'orange',
                         'formID' => '8063c6d0-b148-401c-8b8a-2b29b186737a',
                         'arrowContents'=> 'Quick and easy...<br>sign up and start shopping!',
                         'formID' => '8063c6d0-b148-401c-8b8a-2b29b186737a'
                     )
                 )


            </div>
        </div>
        <br>
        <br>
    </div>
@stop
