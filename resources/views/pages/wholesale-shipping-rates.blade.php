@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Wholesale Shipping Rates  - Lojistic',
        'description' => 'Lojistic’s collective shipping volume allows us access to substantial freight rate discounts on nearly every mode.  We pass these heavily discounted rates to our clients through our wholesale shipping platform.',
        'keywords'    => 'freight rates, freight discount, freight brokerage, freight broker',
    ])
@overwrite
@section('styles')
    {!! Html::style('css/pages/insurance.css?v='.v())  !!}
@stop
@section('content')
    <section class="banner flatSeafoam">
        <div class="container">
            <div class="col-sm-3 col-xs-12 text-center">
                <i class="fs-150 white eloji-freight-rates"></i>
            </div>
            <div class="col-sm-9 col-xs-12">
                <h1 class="white">Wholesale Shipping Rates</h1>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <h2 class="text-center">
                Leverage Our Discounts To Find The Best Shipping Rates
            </h2>
            <p>
                As a high volume shipper, we’re sure you’re aware that freight costs can add up quickly. Keeping freight
                costs in check is tough, and renegotiating your freight carrier contracts is a beast in and of itself.
                Lojistic has an easy way to ensure you’re getting the best possible freight rates for your shipments,
                without having to call dozens of freight brokers.
            </p>

            <p>
                Lojistic’s collective shipping volume allows us access to substantial freight rate discounts on nearly
                every mode. We pass these heavily discounted rates to our clients through our wholesale shipping
                platform. There’s no catch in using our discounted freight rates, the savings are yours to keep.
            </p>

            <p>
                Lojistic represents a massive collective shipping volume, which means we’ve been able to achieve
                substantial freight discounts on rates for nearly every mode. With our wholesale shipping rate platform,
                Lojistic is able to pass on our heavily discounted freight rates to you, the shipper. There’s no catch
                in using our discounted freight rates, the savings are yours to keep.
            </p>

            <p>
                Comparing Lojistic’s rates to your current rates is just as easy. Our powerful shipping software,
                Intelliship, will load your rates and compare them to ours. Intelliship gives you the option to choose
                our freight rates when a significant freight discount is present. Not only will you find great freight
                discounts, you’ll be able to rest easy in knowing that your rates are great if your freight discounts
                are better.
            </p>

            <p>
                By utilizing the power of our Intelliship TMS, Lojistic is able to load your freight rates and compare
                them alongside ours, giving you the option to choose our freight rates when a significant freight
                discount is present. Not only will you find great freight discounts, you’ll be able to rest easy in
                knowing that your rates are great if your freight discounts are better.
            </p>

            <p>
                In one intuitive interface, you’ll be able to compare and book shipments, knowing you’ve secured the
                best freight discounts without the hassle of going through a freight broker. Use the Lojistic wholesale
                freight rate platform to easily secure massive freight discounts.
            </p>
        </div>
    </section>
@stop