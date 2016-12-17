@extends('layouts.flat')
@section('content')
    <section class="white">
        <div class="container">
            <h2>
                Hubspot Developer Form
                <br>
                <small>Sends Hubspot Email To Devs</small>
            </h2>
            <div class="col-sm-6 col-sm-offset-3">
            @include('parts.hubspot-form', array(
                    'thankyouPage' => '/thank-you',
                    'intent' => 'testing',
                    'btnTxt' => 'SEND',
                    'formID' => '5defb69e-5fe6-4034-8a29-3678d8acdf34'
                )
            )
            </div>
        </div>
    </section>
@stop