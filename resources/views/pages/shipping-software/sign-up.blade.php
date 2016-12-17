@extends('layouts.minimal-conversion')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Shipping Insurance: Get Covered, Save 50-92% Off Carrier Rates',
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
        <div class="container">
            <div class="col-md-5 pull-right col-sm-12 col-xs-12">
                <br>
                @include(
                     'parts.conversion-form',
                     array(
                         'thankyouPage' => '/thank-you',
                         'title'=>'Yes I Want Intelliship!',
                         'color'=> '#00c651',
                         'colorname'=>'green',
                         'subcolor'=> '#f4f4f4',
                         'intent' => 'Shipping Software',
                         'btnTxt' => 'START SHIPPING',
                         'btnColor'=>'orange',
                         'arrowContents'=> 'Quick and easy...<br>Let us help you sign up!',
                         'formID' => '8063c6d0-b148-401c-8b8a-2b29b186737a'
                     )
                 )

            </div>
            <div class="col-md-7 col-sm-12 col-xs-11 checklist-container-margin">
                <h1 class="text-center green">INTELLISHIP SHIPPING SOFTWARE<br><small>Click. Ship. Save. It’s That Easy. Find Out More.</small></h1>
                <br>
                <div class="row np">
                    <!--one -->
                    <div class="col-sm-3 hidden-xs text-center">
                        <div class="circ circ-50 green">
                            <i class="eloji eloji-check white fs-28 text-vc"></i>
                        </div>
                    </div>
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h2 class="green checklist-margin">Sign up, login & ship.<br><small>It’s that simple.</small></h2>
                    </div>
                </div>
                <div class="row np">
                    <!-- two-->
                    <div class="col-sm-3 hidden-xs text-center">
                        <div class="circ circ-50 green">
                            <i class="eloji eloji-check white fs-28 text-vc"></i>
                        </div>
                    </div>
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h2 class="green checklist-margin">Load Your UPS & FedEx Rates<br><small>Compare, ship, and save with your rates.</small></h2>
                    </div>
                </div>
                <!--three -->
                <div class="row np">
                    <div class="col-sm-3 hidden-xs text-center">
                        <div class="circ circ-50 green">
                            <i class="eloji eloji-check white fs-28 text-vc"></i>
                        </div>
                    </div>
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h2 class="green checklist-margin">Centralized Enterprise Shipping Hub<br><small>Ship, track & optimize all within one hub.</small></h2>
                    </div>
                </div>
                <!-- four-->
                <div class="row np">
                    <div class="col-sm-3 hidden-xs text-center">
                        <div class="circ circ-50 green">
                            <i class="eloji eloji-check white fs-28 text-vc"></i>
                        </div>
                    </div>
                    <div class="col-sm-9  col-sm-offset-0 col-xs-offset-1 col-xs-11 np">
                        <h2 class="green checklist-margin">Predictive Technology & Reporting<br><small>Get alerts before even the carrier knows.</small></h2>
                    </div>
                </div>

            </div><!-- col-7 -->

        </div>
    </div>
@stop
