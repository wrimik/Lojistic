@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Contact Us - Lojistic',
        'description' => 'Contact our team today about our shipping cost reduction services and we will get back to you as soon as possible.',
        'keywords'    => 'Reducing Shipping Costs, Freight Auditing Services, Freight Audit Companies, Lojistic',
        ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            <h2>OMGosh, How Have You Been?</h2>
            <h3 class="text-center">(we should totally catch up)</h3>
            <hr class="white"/>
            @include('parts.contact-info')
        </div>
    </section>
    <section class="map">
        <h2 class="text-center navy">Location, Location, Location.</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26558.173694760182!2d-117.88288819999998!3d33.688974899999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcdf26ae6340d5%3A0x1910b75a537926ec!2s3200+Park+Center+Dr+%23500%2C+Costa+Mesa%2C+CA+92626!5e0!3m2!1sen!2sus!4v1429117058363" width="100%" height="500" frameborder="0" style="border:0"></iframe>
    </section>
@stop