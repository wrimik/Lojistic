@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
      'title' => 'About Our Company - Lojistic',
      'description' => 'Lojistic works with businesses to optimize their parcel and freight operations and reduce overall shipping costs',
      'keywords' => 'parcel auditor, freight auditor, lojistic, logistics consultants, reduce shipping costs',
  ])
@overwrite
@section('styles')
    {!! Html::style('css/pages/splash.css?v='.v())  !!}
@stop
@section('scripts')
    {!! Html::script('/js/2016/misc/splash.js')  !!}
@stop

@section('content')
    {{--<div id='video-container' class="silver">--}}
        {{--<video id='video' controls autoplay loop>--}}
            {{--<source src="http://cdn.lojistic.com/videos/box-low.mp4" type="video/mp4">--}}
            {{--<source src="http://cdn.lojistic.com/videos/box-low.ogv" type="video/ogg">--}}
        {{--</video>--}}
        {{--<div id="video-controls">--}}
            {{--<div id="mute" class='muted' title='Toggle Audio'></div>--}}
            {{--<div id="full-screen" title='Full-Screen'></div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <section class="silver">
        <div class="container same-height-parent">

            <h2>What Defines Us</h2>

            @include('parts.snippets.flag', array(
                'flagColor' => 'flatSeafoam', //navy
                'title' => '',
                'text' => 'Super smart team of former carrier employees',
                'eloji' => 'eloji-noggin',
                'sameHeight' => true,
                'elojiColor' => 'flatSeafoam' //green
            ))
            @include('parts.snippets.flag', array(
                'flagColor' => 'flatSeafoam', //navy
                'title' => '',
                'text' => 'Robust software, reporting and analytics',
                'eloji' => 'eloji-analysis',
                'sameHeight' => true,
                'elojiColor' => 'flatSeafoam' //green
            ))
            @include('parts.snippets.flag', array(
                'flagColor' => 'flatSeafoam', //navy
                'title' => '',
                'text' => 'More than a decade of industry success',
                'eloji' => 'eloji-handshake',
                'sameHeight' => true,
                'elojiColor' => 'flatSeafoam' //green
            ))
        </div>
    </section>


    <section class="road">
        <div class="container  text-center">
            <div id="timeline">
                <div>
                    <div class="tldot"></div>
                    <div class="tlline"></div>
                    <div class="tldot"></div>
                </div>
                <span class="fs-12">2005</span>
                <span class="fs-12">{{ date('Y') }} </span>
            </div>

            <h3 class="navy">
                Our Journey Started {{ (date('Y') - 2005) }} Years Ago
            </h3>

            <p class="navy">
                This company was founded in February of 2005 <br/>
                with the idea that we could help companies reduce shipping costs.
            </p>
        </div>
    </section>

    <section class="white">
        <div class="container text-center fw-thin">
            <h3>
                At Lojistic we see the big picture, because <i>logistics</i> is a systems game.
            </h3>

            <p>
                Your indicators of success ­– customer satisfaction, ease of management, cost
                minimization, and profit maximization– all depend on your logistics operations.
            </p>
            <br/>
            <p>
                We aren't the kind of company you just <i>buy</i> a product or service from.
                It's a partnership; a relationship. Our analytics team takes the lessons and
                insights gained from each client and applies it to <i>every</i> client.
            </p>

        </div>
    </section>

    <section class="flatGrey text-center">
        <div class="container">
            <h3>
                And Just In Case You Forgot, <br class="hidden-xs"/>
                Here Are The Kick Ass Services We Are Known For:
            </h3>
        </div>
    </section>

    <section id="services" class="np">
        @include('parts.service-square', [
            'color' => '#00344b',
            'eloji' => 'eloji-audit',
            'product' => 'Parcel &amp;<br/> Freight Audit',
            'quote' => '"Do my shipping invoices contain errors? Am I getting over-charged?"',
            'url' => '/parcel-freight-bill-audit'
        ])
        @include('parts.service-square', [
            'color' => '#767e81',
            'eloji' => 'eloji-negotiation',
            'product' => 'Carrier Rate<br/> Negotiation',
            'quote' => '"Can my shipping rates get better?"',
            'url' => '/carrier-contract-negotiation'
        ])
        @include('parts.service-square', [
            'color' => '#f7901e',
            'eloji' => 'eloji-freight',
            'product' => 'Freight<br/> Management',
            'quote' => '"What tools, resources and services can help better manage my freight?"',
            'url' => '/freight-management/'
        ])
        @include('parts.service-square', [
            'color' => '#00579b',
            'eloji' => 'eloji-insurance',
            'product' => 'Parcel<br/> Shipping Insurance',
            'quote' => '"Is there a better way to insure the <br class="visible-xs-inline"/> contents of my parcel shipments?"',
            'url' => '/shipping-insurance'
        ])
        @include('parts.service-square', [
            'color' => '#41b655',
            'eloji' => 'eloji-intelliship',
            'product' => 'Shipping<br/> Software',
            'quote' => '"I need a solution to automate my shipping processes and save money."',
            'url' => '/shipping-software/'
        ])
        @include('parts.service-square', [
            'color' => '#b8bcbd',
            'eloji' => 'eloji-halo',
            'product' => 'Tracking<br/> Software',
            'quote' => '"I need centralized visibility and a better <br class="visible-xs-inline"/> way to manage my shipments."',
            'url' => '/halo/'
        ])
        @include('parts.service-square', [
            'color' => '#01838f',
            'eloji' => 'eloji-analysis',
            'product' => 'Custom<br/>Analytics',
            'quote' => '"I need analysis help with a <br class="visible-xs-inline"/>specific logistics project."',
            'url' => '/carrier-rate-analysis'
        ])
        @include('parts.service-square', [
            'color' => '#45a5d6',
            'eloji' => 'eloji-ready-pay',
            'product' => 'ReadyPay',
            'quote' => 'I need a service provider to <br class="visible-xs-inline"/> audit and pay my shipping bills.',
            'url' => false
        ])
        @include('parts.service-square', [
            'color' => '#46d3ae',
            'eloji' => 'eloji-boat',
            'product' => 'Shipping<br/> Rates',
            'quote' => '"Eureka! Significantly discounted<br class="visible-xs-inline"/> freight shipping rates ready to go."',
            'url' => '/wholesale-ltl-rate-marketplace'
        ])
    </section>

    <section class="white" id="free-tools">
        <div class="container">
            <h2>
                Our Free Tools &amp; Business Resources
            </h2>

            <div id="toolbelt">
                @include('parts.tool', [
                'eloji' => 'eloji-calc-rates',
                'label' => 'Generate a Custom<br/>FedEx or UPS Rate Sheet',
                'url' => '/shipping-costs-calculators/fedex-ups-rates-calculator/'
                ])
                @include('parts.tool', [
                'eloji' => 'eloji-calc-compare',
                'label' => 'Compare UPS<br/>vs FedEx Costs',
                'url' => '/shipping-costs-calculators/fedex-ups-rate-comparison-tool'
                ])
                @include('parts.tool', [
                'eloji' => 'eloji-dim',
                'label' => 'Dimensional Weight<br/>Pricing (DIM) Calculator',
                'url' => '/shipping-costs-calculators/fedex-ups-ground-dim-calculator'
                ])
                @include('parts.tool', [
                'eloji' => 'eloji-insurance',
                'label' => 'Shipping Insurance<br/>Savings Calculator',
                'url' => '/shipping-insurance/#insurance-calculator'
                ])
                @include('parts.tool', [
                'eloji' => 'eloji-checklist',
                'label' => 'Savings<br/>Checklist',
                'url' => '/savings-checklist'
                ])
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <article>
                <h2>Looking Forward</h2>
                <p>
                    We couldn&rsquo;t be more excited about
                    this new era for Lojistic and our clients. With the combination
                    of services and focus on innovation, we&rsquo;re all poised for another
                    great decade-and beyond.
                </p>

                <p>
                    We&rsquo;ll never forget the journey that brought us this far.
                    Many successes to celebrate; many failures to learn from.
                    So let’s send costs packing. Give us a call today. Or tomorrow. Really, whenever. We’re here.
                </p>
            </article>
        </div>
    </section>
    <section class="brightBlue">
        <div class="container text-center">
            <a class="btn btn-lg inline btn-info" rel="nofollow" href="/">BACK TO HOME PAGE</a>
            <br class="visible-xs-inline"/><br class="visible-xs-inline"/>
            <a class="btn btn-lg inline btn-info" rel="nofollow" href="/contact-lojistic">GET IN TOUCH</a>
        </div>
    </section>
@stop