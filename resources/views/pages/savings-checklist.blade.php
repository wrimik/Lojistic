@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title' => 'Transportation & Shipping Savings Checklist - Lojistic',
        'description' => 'Use our complimentary checklist to find ways to save on shipping and transportation costs.',
        'keywords' => '',
    ])
@overwrite
@section('content')
    <section class="banner navy">
        <div class="container">
            <div class="col-sm-3 col-xs-12 text-center">
                <i class="fs-150 white eloji-checklist"></i>
            </div>
            <div class="col-sm-9 col-xs-12 text-left">
                <div class="text-vc">
                    <h1 class="white">Savings Checklist</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <div class="col-xs-12 text-center">
                <p>
                    <a class="btn flatBlue scrollTo" data-target="#convert">
                        SCHEDULE TO GET YOURS
                    </a>
                    <a id='pdf_link' class="btn flatBlue" download rel="nofollow" href="pdf/savings-checklist.pdf">
                        <i class="eloji eloji-download"></i>
                        View PDF Directly
                    </a>
                </p>
                <br/>
            </div>
            <img class='boximg' src='/images/savings_1.jpg' usemap='#s1'/>
            <map name="s1">
                <area shape="rect" coords="57,201,902,236" alt="Download"
                      rel="nofollow" href="http://www.sourcelogin.com/checklist/Savings_Checklist_Data.xlsx">
            </map>
            <img class='boximg' src='/images/savings_2.jpg'/>
            <img class='boximg' src='/images/savings_3.jpg' usemap='#s3'/>
            <map name="s3">
                <area target='_blank' shape="rect" coords="57,389,902,744" alt="Download"
                      rel="nofollow" href="https://mapsengine.google.com/map/edit?mid=zVb1m3OC9LL4.kAmoWRPJu9_8">
                <area target='_blank' shape="rect" coords="57,790,902,1144" alt="Download"
                      rel="nofollow" href="https://mapsengine.google.com/map/edit?mid=zVb1m3OC9LL4.k0jOImXEBYhM">
            </map>
            <img class='boximg' class='pdfpage' src='/images/savings_4.jpg'/>
        </div>
    </section>
    <section class="flatGrey">
        <div class="container text-center">
            <h3>WANT YOUR OWN SAVINGS CHECKLIST?</h3>
            <div class="btn btn-info scrollTo" data-target="#convert">( IT'S TOTALLY FREE )</div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            @include('parts.forms.contact-or-schedule', array(
                'scheduleTitle' => 'Savings Checklist',
                'scheduleText'  => 'Illuminate savings opportunities and leverage Lojistic’s expertise for your organization.',
                'scheduleBtnText' => 'SCHEDULE',
                'formVars' => array(
                    'thankyouPage' => '/thank-you',
                    'intent' => 'Savings Checklist',
                    'btnTxt' => 'REQUEST YOUR CHECKLIST',
                    'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
                )
            ))
        </div>
    </section>

@stop