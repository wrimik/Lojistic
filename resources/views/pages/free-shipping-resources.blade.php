@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Parcel & Freight Shipping Costs Calculators - Lojistic',
        'description' => 'Shipping cost calculators to determine rates and compare FedEx and UPS shipping costs. At Lojistic we conduct an audit to help you save money. Contact us today.',
        'keywords'    => 'shipping calculator, shipping cost calculator, freight shipping calculator, calculate shipping cost, shipping rate calculator, shipping costs calculator, freight costs calculator',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            <h1 class="text-center navy">Free Shipping Resources</h1>

            @include('parts.post-it-white-paper')
            <!-- end white papers -->
            <hr class="white">
            <!-- calcs-->
            @include('parts.post-it-calc')
            <!-- end calcs-->
        </div>
    </section>

    @include('parts.home.test-audit-lead-in')
    @include('parts.home.intelliship')

    <section class="flatGrey">
        <div class="container">
            <h2>Up Next!</h2>
            <div class="col-xs-6 text-right">
                <a rel="nofollow" href="/videos" class="btn btn-md btn-info">SWEET VIDEOS</a>
            </div>
            <div class="col-xs-6">
                <a rel="nofollow" href="/contact-lojistic" class="btn btn-md  btn-info">CONTACT US</a>
            </div>
        </div>
    </section>
@stop