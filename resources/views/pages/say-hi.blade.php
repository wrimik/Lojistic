@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title' => 'Say Hi - Lojistic',
        'description' => 'Say Hello to Lojistic',
        'keywords' => '',
    ])
@overwrite
@section('content')
    <section class="banner navy">
        <div class="container">
            <div class="col-sm-3 col-xs-12 text-center">
                <i class="fs-150 white eloji-hi"></i>
            </div>
            <div class="col-sm-9 col-xs-12">
                <h1 class="white">Say Hi</h1>
            </div>
        </div>
    </section>
    <section class="white">
        <div class="container">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Tell us about your unique shipping situation. Let us introduce ourselves.</h2>
                @include(
                    'parts.hubspot-form',  
                        array( 
                            'thankyouPage' => '/thank-you', 
                            'intent' => 'Contact', 
                            'btnTxt' => 'Continue', 
                            'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
                        )
                    )
            </div>
        </div>
    </section>
@stop