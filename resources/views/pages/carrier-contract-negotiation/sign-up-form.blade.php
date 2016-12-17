@extends('layouts.minimal-conversion')
@section('meta')
@include('layouts.inc.flat-meta', [
'title'       => 'Parcel Freight Bill Audit Sign Up',
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
<div class="minimal-form-body">
    <br>
    <div class="container">
        <div class="col-md-7 col-sm-12 col-xs-11 checklist-container-margin">

            <h1 class="text-center navy">SHOP WHOLESALE LTL RATES<br><small> Great shipping rates.  Lots of LTL carriers. </small></h1>
            <br>
            <div class="row np">
                <!--one -->
                <div class="col-sm-3 hidden-xs text-center">
                    <i class="eloji eloji-check orange fs-40 text-vc"></i>
                </div>
                <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                    <h2 class="navy checklist-margin">Contingency Based Pricing</h2>
                </div>
            </div>
            <div class="row np">
                <!-- two-->
                <div class="col-sm-3 hidden-xs text-center">
                    <i class="eloji eloji-check orange fs-40 text-vc"></i>
                </div>
                <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                    <h2 class="navy checklist-margin">No Contracts</h2>
                </div>
            </div>
            <!--three -->
            <div class="row np">
                <div class="col-sm-3 hidden-xs text-center">
                    <i class="eloji eloji-check orange fs-40 text-vc "></i>
                </div>
                <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                    <h2 class="navy checklist-margin">Detailed Reporting and Analytics</h2>
                </div>
            </div>
            <!-- four-->
            <div class="row np">
                <div class="col-sm-3 hidden-xs text-center">
                    <i class="eloji eloji-check orange fs-40 text-vc "></i>
                </div>
                <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                    <h2 class="navy checklist-margin">Turn-Key Setup Process</h2>
                </div>
            </div>
            <!-- five -->
            <div class="row np">
                <div class="col-sm-3 hidden-xs text-center">
                    <i class="eloji eloji-check orange fs-40 text-vc "></i>
                </div>
                <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                    <h2 class="navy checklist-margin">Save Lots of Money!</h2>
                </div>
            </div>
        </div><!-- col-7 -->
        <div class="col-md-5 col-sm-12 col-xs-12">
            @include(
            'parts.conversion-form',
            array(
            'thankyouPage' => '/thank-you',
            'title'=>'PARCEL & FREIGHT INVOICE AUDIT',
            'color'=> '#00344b',
            'colorname'=>'navy',
            'subcolor'=> '#e8f2f3',
            'intent' => 'Carrier Negotiation',
            'btnTxt' => 'START SHIPPING',
            'formID' => '8063c6d0-b148-401c-8b8a-2b29b186737a'
            )
            )

        </div>
    </div>
</div>
@stop
