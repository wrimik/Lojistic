@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Carrier Rate Negotiation: Get Better Rates & Save Money',
        'description' => 'Contact Lojistic about reducing shipping costs with our freight auditing services.',
        'keywords'    => 'shipment contract, freight contracts, ups negotiated rates, how to reduce shipping costs, lower shipping costs',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            <h1 class="text-center flatGrey">CARRIER RATE NEGOTIATION
                <br><small> Secure better rates with our team’s expertise.</small>
            </h1>
            <div class="col-md-5 pull-right col-sm-12 col-xs-12">
                <!-- test colors: flatBlue, #6096c3, 45bbf6 -->
                @include(
                     'parts.conversion-form',
                     array(
                         'thankyouPage' => '/thank-you',
                         'title'=> 'Yes, I Want Better Rates!',
                         'color'=> '#898989',
                         'colorname'=>'flatGrey',
                         'subcolor'=> '#f4f4f4',
                         'intent' => 'Carrier Negotiation',
                         'btnTxt' => ' I\'M DOWN FOR A CHAT',
                         'btnColor'=>'brightBlue',
                         'howCanWeHelp'=> false,
                         'arrowContents'=> 'Get the ball rolling...<br>Your great rates are waiting...',
                         'formID' => '8063c6d0-b148-401c-8b8a-2b29b186737a'
                     )
                 )
            </div>
            <div class="col-md-7 col-sm-12 col-xs-11 checklist-container-margin">
                @include('parts.key-point',
                    array(
                        'circSize'=>'75',
                        'circleColor' =>'brightBlue',
                        'eloji'=>'eloji-strategy',
                        'elojiSize'=> 'fs-36',
                        'title'=>'Targeted Research & Analysis',
                        'subtitle'=> 'To better understand you as a shipper.'
                         )
                    )
                @include('parts.key-point',
                   array(
                       'circSize'=>'75',
                       'circleColor' =>'brightBlue',
                       'eloji'=>'eloji-target',
                       'elojiSize'=> 'fs-36',
                       'title'=>'Strategic Game Planning',
                       'subtitle'=> 'Setting your team up for success.'
                        )
                   )
                @include('parts.key-point',
                    array(
                        'circSize'=>'75',
                        'circleColor' =>'brightBlue',
                        'eloji'=>'eloji-check',
                        'elojiSize'=> 'fs-36',
                        'title'=>'Execution and Monitoring',
                        'subtitle'=> 'Achieve the rates you deserve.'
                         )
                    )
            </div><!-- col-7 -->
        </div>
    </section>
    @include('parts.20-20-navy')
    @include('parts.why-should-you',array(
    'title'=>'Why Should You Negotiate Better Rates?',
    'body'=>'You are negotiating against an army of carrier employees that are trained to maximize the carrier’s profits. Your local sales rep is your messenger to the carrier pricing department, area sales manager, district pricing analyst, district pricing manager, accountants, district managers, and regional managers. Our thorough analytics and industry insight will help arm your rep with what’s needed to get the pricing department to make big moves.'
    ))
@stop
