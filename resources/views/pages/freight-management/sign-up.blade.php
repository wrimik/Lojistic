@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Freight Management: Stop Worrying About Freight, Start Saving',
        'description' => 'Contact Lojistic about reducing shipping costs with our freight auditing services.',
        'keywords'    => '',
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
            <h1 class="text-center orange">FREIGHT MANAGEMENT<br><small> Get A FREE In-Depth Freight Study. </small></h1>
            <div class="col-md-5 pull-right col-sm-12 col-xs-12">
                <!-- test colors: flatBlue, #6096c3, 45bbf6 -->
                @include(
                     'parts.conversion-form',
                     array(
                         'thankyouPage' => '/thank-you',
                         'title'=> 'I Want A Free Freight Study!',
                         'color'=> '#F6921E',
                         'colorname'=>'orange',
                         'subcolor'=> '#f4f4f4',
                         'intent' => 'Freight Management',
                         'btnTxt' => 'GET A FREIGHT STUDY',
                         'btnColor'=>'navy',
                         'arrowContents'=> 'Manage your freight today...<br>Start a free freight study...',
                         'howCanWeHelp'=>'false',
                         'formID' => '8063c6d0-b148-401c-8b8a-2b29b186737a'
                     )
                 )
                <br>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-11 checklist-container-margin">
                @include('parts.key-point',
                   array(
                       'circSize'=>'75',
                       'circleColor' =>'orange',
                       'eloji'=>'eloji-target',
                       'elojiSize'=> 'fs-40',
                       'title'=>'Targeted Research & Analysis',
                       'subtitle'=> 'To better understand you as a shipper.'
                        )
                   )
                @include('parts.key-point',
                   array(
                       'circSize'=>'75',
                       'circleColor' =>'orange',
                       'eloji'=>'eloji-strategy',
                       'elojiSize'=> 'fs-40',
                       'title'=>'Strategic Optimization',
                       'subtitle'=> 'Best classes, mfc, lanes, accessorials etc.'
                        )
                   )
                @include('parts.key-point',
                   array(
                       'circSize'=>'75',
                       'circleColor' =>'orange',
                       'eloji'=>'eloji-check',
                       'elojiSize'=> 'fs-28',
                       'title'=>'Simple Executable Results',
                       'subtitle'=> 'Achieve the freight rates you deserve.'
                        )
                   )
            </div><!-- col-7 -->
        </div>
    </section>
    @include('parts.20-20-navy')
    @include('parts.why-should-you',array(
    'title'=>'Why Should You Use Lojistic’s Freight Management?',
    'body'=>'If your company is working to solve unique transportation objectives and challenges.... Lojistic\'s freight management services can help. Let us show you how to significantly reduce your freight costs! Let us identify your cost savings opportunities.  Let us design and refine an optimal network of carrier partners at market leading low cost shipping rates for you.'
    ))
@stop
