@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Parcel & Freight Shipping Audit Demo - Lojistic',
        'description' => 'Our freight audit services guarantee to reduce shipping costs… and we can prove it.',
        'keywords'    => 'freight audit, freight auditing, reduce shipping costs, how to reduce shipping costs, parcel freight',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">

            <h1 class="text-center">Parcel &amp; Freight<br/> Shipping Audit Demo</h1>

            <p class="text-center">Our freight audit services guarantee to reduce shipping costs&hellip; and we can prove it.</p>
            <br/>
            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                @include(
                    'parts.hubspot-form',
                    array(
                        'thankyouPage' => '/thank-you',
                        'intent' => 'Audit Demo',
                        'btnTxt' => 'Continue',
                        'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
                    )
                )
            </div>
        </div>
    </section>
@stop