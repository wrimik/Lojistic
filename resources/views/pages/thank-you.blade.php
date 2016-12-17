@extends('layouts.flat')
@section('content')

    <section class="slim">
        <div class="container text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="circ circ-150 navy" style="border: 4px #EED119 solid">
                    <div class="text-vc" style="position: relative; top: 40px;">
                        <span class="eloji eloji-hangten fs-64"></span>
                    </div>
                </div>
                <br>
                <h1 class="navy  sign y2020 fs-72 np nm">
                   You're Super Rad!
                </h1>
                <p class="navy fs-24 text-center navy">
                    Has anyone ever told you that you’re <i>really good</i> at filling out forms? Well, you are.
                </p>
                <div class="stripe-title-box">
                    <h3 class="stripe-title y2020 sign fs-64"><span style="background:white; padding:10px;">And</span> </h3>
                </div>
                <p class="navy fs-24 text-center navy">
                You're just a conversation away from triggering a $20.00 donation to provide clean water.
                </p>
                <p class="navy fs-24 text-center navy">
                We look forward to chatting with you.
                </p>
            </div>
        </div>
    </section>

    <section id="twentysection" class="navy" style="position:relative;">
        <span class="tri tri-20 navy parcel-audit-specific-widows" style="border-top-color:white; "></span>
        <div class="container">
            <div class="row">
                <img src="/images/20-20-lrg.png" alt="20-20 Campaign Logo"/>
            </div>
            <div class="col-md-6 col-md-offset-3 col-xs-12">
                <br>
                <a href="/20-20">
                    <div class="btn btn-ghost-yellow btn-thick uppercase">
                        Learn More About the 20/20 Campaign
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <p class="fs-28 fw-thin">
                    One of our super smart expert guys
                    <br><span class="flatGrey">(or gals, it's the &rsquo;90's)</span><br>
                    will contact you A.S.A.P.
                </p>
                <hr>
                <p>
                    If that's not quick enough for you, here's our contact info:
                </p>
                <div class="col-xs-12 col-sm-6">
                    <h3>Call Us:</h3>
                    <p><strong>(800) 783-5753</strong>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <h3>Email Us:</h3>
                    <p>
                    <strong>
                        <a href="mailto:info@lojistic.com">info@lojistic.com</a>
                    </strong>
                    </p>
                </div>
            </div>
        </div>
    </section>
    @include('parts.thank-you-related')
@stop