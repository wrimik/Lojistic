@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'LTL Rates Marketplace: Shop, Compare, Ship with LTL Carriers You Know',
        'description' => 'Compare LTL Rates from carriers you are already working with.',
        'keywords'    => 'FedEx and DIM, FedEx and UPS  Ground Rates, Dimensional Weight, DIM Calculator, FedEx and UPS Rate Calculator',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            <h1 class="text-center flatSeafoam">SHOP WHOLESALE LTL RATES<br><small> Great shipping rates. Lots of LTL carriers. </small></h1>
            <div class="col-md-5 pull-right col-sm-12 col-xs-12">

                @include(
                    'parts.conversion-form',
                    array(
                        'title' => 'Yes, I Want Wholesale Rates!',
                        'thankyouPage' => '/thank-you',
                        'color'=> '#13828c',
                        'colorname'=>'flatSeafoam',
                        'subcolor'=> '#e8f2f3',
                        'intent' => 'Wholesale LTL Signup',
                        'btnColor' => 'orange',
                        'btnTxt' => 'START SHOPPING',
                        'arrowContents'=> 'Quick and easy...<br>sign up and start shopping!',
                        'howCanWeHelp' => false,
                        'formID' => '8063c6d0-b148-401c-8b8a-2b29b186737a'
                    )
                )
                <br>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-11 checklist-container-margin hidden-xs">
                @include('parts.key-point',
                array(
                    'circSize'=>'75',
                    'circleColor' =>'flatSeafoam',
                    'eloji'=>'eloji-check',
                    'elojiSize'=> 'fs-28',
                    'title'=>'Sign up, login & ship.',
                    'subtitle'=> 'It’s that simple.'
                     )
                )
                @include('parts.key-point',
                array(
                   'circSize'=>'75',
                   'circleColor' =>'flatSeafoam',
                   'eloji'=>'eloji-check',
                   'elojiSize'=> 'fs-28',
                   'title'=>'Competitive LTL rates...',
                   'subtitle'=> 'compare, ship, and save.'
                    )
                )
                @include('parts.key-point',
                array(
                   'circSize'=>'75',
                   'circleColor' =>'flatSeafoam',
                   'eloji'=>'eloji-check',
                   'elojiSize'=> 'fs-28',
                   'title'=>'LTL carriers you know and love…',
                   'subtitle'=> 'and then some.'
                    )
                )
            </div>
            <br>
        </div>
    </section>
    @include('parts.20-20-navy')
    @include('parts.why-should-you',array(
    'title'=>'Why Should You Shop The Wholesale LTL Marketplace?',
    'body'=>'Lojistic created an online marketplace for wholesale LTL freight rates that offers an ever-increasing network of carriers. Our wholesale LTL marketplace provides an easy way to connect with lots of carriers for all your shipping needs. In addition to great discounts, you can compare rates, ship, track and save on all your LTL freight service needs. '
    ))
@stop



