@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Audisee - Instant Free Parcel Audit Tool - Lojistic',
        'description' => 'Instantly audit your UPS and FedEx Invoice',
        'keywords'    => '',
    ])
@overwrite
@section('styles')
    {{--{{ HTML::style('css/prod/pages/odometer-theme-minimal.css?v='.v()) }}--}}

@stop
@section('scripts')
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js') !!}
    <script type="text/javascript">
        abTrack('audisee-landing', 'about', false);
        $(document).ready(function(){
            ImageViewer.init();
        });
    </script>
@stop
@section('content')
    <section class="sm-banner brightBlue">
        <div class="container np">
            <div class="audisee-banner-alignment">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                    <div class="row">
                        <div class=" col-lg-5 col-md-5">
                            <img src="/images/audisee-banner-logo.png" alt="audisee audit banner logo">
                        </div>
                        <div class=" col-lg-7 col-md-7 hidden-xs hidden-sm">
                            <div class="banner-title">
                                <h4 class="banner-text">AUTOMATED PARCEL AUDIT ENGINE</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-4 hidden-xs hidden-sm">
                    <div class="banner-button">
                        <a href="/audisee/instant-parcel-audit">
                            <div class="btn btn-white btn-lg pull-right">AUDIT NOW</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <h2>Free Parcel Audit Web Tool<br>
                <small>Instantly Audit FedEx and UPS Invoices</small>
            </h2>
            <div class="row">
                <div class=" col-md-4 col-sm-12 col-xs-12 ">
                    @include('parts.snippets.bottom-loaded-Featurette', array(
                   'eloji'=>'eloji-paper-audit',
                   'color'=>'brightBlue',
                   'blfcontent'=>'Get your UPS & FedEx invoices from each carrier’s online billing center',
                   'blftitle'=> ' Locate UPS <br>& FedEx Invoices',
                   'bottomtitle'=>'LOCATE YOUR INVOICES'
                    ))
                </div>
                <div class=" col-md-4 col-sm-12 col-xs-12 ">
                    @include('parts.snippets.bottom-loaded-Featurette', array(
                  'color'=>'brightBlue',
                  'eloji'=>'eloji-audit',
                  'blftitle'=> ' Instant (free) UPS <br>& FedEx Audit',
                  'blfcontent'=>'Audisee instantly checks your UPS & FedEx invoices for refund opportunities.',
                  'bottomtitle'=>'INSTANTLY AUDIT FEDEX & UPS'
                   ))
                </div>
                <div class=" col-md-4 col-sm-12 col-xs-12 ">
                    <!--todo: correct eloji -->
                    @include('parts.snippets.bottom-loaded-Featurette', array(
                  'color'=>'brightBlue',
                  'eloji'=>'eloji-analysis',
                  'blftitle'=> ' Immediate Parcel <br>Audit Results',
                  'blfcontent'=>'Audisee displays detailed results so that you can recover your refunds.',
                  'bottomtitle'=>'IMMEDIATE RESULTS'
                   ))
                </div>
            </div>

        </div>
    </section>
    <section class="brightBlue">
        <div class="container">
            <div class="col-md-6">
                <div class="video-tour-text">
                    <h2 class="text-center">Take a Tour of Audisee</h2>
                    <p class="text-center">This quick tour will guide you through using Audisee, <br class="hidden-md hidden-sm hidden-xs">our free instant UPS and FedEx parcel audit web tool. </p>
                </div>
           </div>
            <div class="col-md-6">
                <div class="flex-video">
                    <iframe width="400" height="325" src="https://www.youtube.com/embed/5yyeqQ4VAFU" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container text-center">
            <div class="col-sm-4 col-xs-12 col-centered">
                <img src="/images/no-cost.png" alt="no cost icon">

                <h3 class="text-center">No Cost</h3>
            </div>
            <div class="col-sm-4 col-xs-12 col-centered">
                <img src="/images/no-catch.png" alt="no catch icon">

                <h3 class="text-center">No Catch</h3>
            </div>
            <div class="col-sm-4 col-xs-12 col-centered">
                <img src="/images/no-joke.png" alt="no joke icon">

                <h3 class="text-center">No Joke</h3>
            </div>
        </div>
    </section>

    <section class="brightBlue">
        <div class="container">
            <h1 class="text-center">Sound Good? What Do You Want To Do Next?</h1>

            <div class="col-sm-6 col-xs-12 text-center">
                <div class="show-image-viewer" data-anal="Audisee|View Sample">
                    <div class="btn btn-lg btn-lightBlue">VIEW A SAMPLE AUDIT</div>
                </div>
                <hr class="slim visible-xs"/>
            </div>
            <div class="col-sm-6 col-xs-12 text-center">
                <a href="/audisee/instant-parcel-audit">
                    <div class="btn btn-lg btn-white">AUDIT FEDEX & UPS NOW</div>
                </a>
            </div>
        </div>
    </section>

    <section class="silver ">
        <div class=" text-center">
            <div class="container">
                <h3>THIS FREE AUDIT TOOL IS RAD!!! <br>
                    <small>Share it with your best friend, neighbor, coworker...</small>
                </h3>
                <hr class="slim">
                <div class="col-sm-10 col-sm-offset-1 ">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-sm-3 col-xs-3 text-center">
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//lojistic.com/audisee&title=Free%20Parcel%20Audit%20Web%20Tool&summary=Instantly%20audit%20your%20UPS%20and%20FedEx%20Invoice">
                                <div class="social-circle brightBlue">
                                    <i class="eloji-linkedin fs-32 text-vc white"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3  col-xs-3 text-center">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//lojistic.com/audisee">
                                <div class="social-circle brightBlue">
                                    <i class="eloji-facebook fs-32 text-vc white"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-3 text-center">
                            <a href="https://twitter.com/home?status=Check%20out%20our%20free%20audit%20tool%3A%20http%3A//lojistic.com/audisee%20">
                                <div class="social-circle brightBlue">
                                    <i class="eloji-twitter fs-32 text-vc white"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3  col-xs-3 text-center">
                            <a href="mailto:info@lojistic.com">
                                <div class="social-circle brightBlue">
                                    <i class="eloji-email fs-32 text-vc white"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <h2 class="text-center">Get Instant Audit Results</h2>

                    <p>You probably already know that your FedEx or UPS parcel invoices can contain errors, but how much
                        is <em>actually</em>
                        recoverable? Before you enroll in a parcel audit, you probably want to know if it is going to be
                        worthwhile. Back in the
                        dark ages (before Audisee), shippers had to pick up the phone and talk to a sales guy for 40
                        minutes, just to wait
                        another 3 to 4 weeks for the results of their “test" parcel audit. Who’s got time for that?!</p>
                    <br>

                    <p>Lojistic has decided to put this free UPS and FedEx audit software in your hands, and instantly
                        give you the information
                        you need to recover your refunds.</p>
                    <br>

                    <p>Audisee’s free parcel audit process begins quite simply with you locating the FedEx or UPS
                        invoices that you want to
                        audit. Once you pass those file(s) to Audisee, the software instantly starts the FedEx or UPS
                        auditing process of looking
                        for refund opportunities.</p>
                    <br>
                    <br>

                    <div class="huge-card">
                        <div class="huge-card-header brightBlue text-center">
                            <img width="500" src="/images/audisee-full-logo.png" alt="audisee audit logo">
                            <a class="btn btn-primary btn-lg" href="/audisee/instant-parcel-audit"
                               style="position:relative; z-index: 10; width:250px; top:13px; margin: 0 auto -70px auto; border: #f4f4f4 1px solid;">
                                AUDIT NOW
                            </a>
                        </div>
                        <div class="huge-card-content silver">
                            <div class="col-xs-12 silver text-center">
                                <div class="huge-card-item">Instantly Identifies Refund Opportunities In UPS/FedEx
                                    Invoices
                                </div>
                            </div>
                            <div class="col-xs-12 silver text-center">
                                <div class="huge-card-item">Gives All The Info You Need To Get Your Credits</div>
                            </div>
                            <div class="col-xs-12 silver text-center">
                                <div class="huge-card-item">Won’t Make Your Carriers Cranky</div>
                            </div>
                            <div class="col-xs-12 silver text-center">
                                <div class="huge-card-item">Hella Free. Total Price = $0. No Cost. No Catch.</div>
                            </div>
                            <div class="col-xs-12 silver text-center">
                                <div class="huge-card-item">Audisee Delivers Results In About 40 Seconds</div>
                            </div>
                            <div class="col-xs-12 silver text-center">
                                <div class="huge-card-item">Your Results Are Available & Shareable For 30 Days</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="silver">
        <div class="container text-center">
            <div class="container">
                <h2 class="text-center">How To Read Your Audisee Parcel Audit Results<br>
                    <small>Our Free Audit Looks For These Savings Opportunities</small>
                </h2>

                <div class="row">
                    <div class="col-md-6 col-xs-12 np">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="md-social-circle white">
                                <i class="eloji-clock-timer text-vc fs-60 brightBlue"></i>
                            </div>
                            <h4 class="text-center audit-items brightBlue"> Late <br>Deliveries</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="md-social-circle white">
                                <i class="eloji-close text-vc fs-60 brightBlue"></i>
                            </div>
                            <h4 class="text-center  audit-items brightBlue">Never <br/>Delivered </h4>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="md-social-circle white">
                                <i class="eloji-barcode text-vc fs-60 brightBlue"></i>
                            </div>
                            <h4 class="text-center  audit-items brightBlue">Manifested<br/>Not Shipped </h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 np">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="md-social-circle white">
                                <i class="eloji-delivery-cart text-vc fs-60 brightBlue"></i>
                            </div>
                            <h4 class="text-center  audit-items brightBlue">Invalid Saturday<br/>Delivery Fee</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="md-social-circle white">
                                <i class="eloji-pickup text-vc fs-60 brightBlue"></i>
                            </div>
                            <h4 class="text-center audit-items brightBlue "> Invalid Saturday<br/>Pick Up Fee</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="md-social-circle white">
                                <i class="eloji-house text-vc fs-60 brightBlue"></i>
                            </div>
                            <h4 class="text-center audit-items brightBlue ">Invalid <br> Residential Fee </h4>
                        </div>
                    </div>
                </div>

                <article class="text-left">
                    <br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Late Deliveries
                        </div>
                        <div class="panel-body">
                            <div class="media">
                                <div class="col-xs-12">
                                    <p>By looking at the FedEx or UPS service level (FedEx Ground, UPS Next Day Air,
                                        etc) and the date the
                                        package was
                                        shipped, Audisee can figure out when each shipment was guaranteed to be
                                        delivered. If the actual
                                        delivery is later than
                                        it should be, Audisee starts looking through the tracking history of that
                                        shipment for more
                                        information.
                                    </p>

                                    <p>
                                        Sometimes a shipment is delivered late, but the FedEx or UPS refund is not
                                        recoverable. In order to
                                        make sure your free
                                        parcel audit results are really useful, Audisee filters out late shipments that
                                        are obviously due to
                                        the following reasons:
                                    </p>
                                    <ul class="ul">
                                        <li>Weather related delays</li>
                                        <li>Holiday related delays</li>
                                        <li>Delivery changes requested by shipper</li>
                                        <li>Recipient was not available</li>
                                        <li>Shipping address was incorrect</li>
                                        <li>Adult signature required</li>
                                    </ul>
                                    <br>

                                    <p>
                                        The Audisee FedEx or UPS auditing process will isolate late shipments that are
                                        potentially
                                        recoverable and then give
                                        you an actionable list of late delivery refund opportunities.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Never Delivered
                        </div>
                        <div class="panel-body">
                            <div class="media">
                                <div class="col-xs-12">
                                    <p>
                                        Every once in a while, your package just doesn’t show up where it’s supposed to
                                        go. Audisee can help
                                        you identify when
                                        a shipment is lost.
                                    </p>

                                    <p>
                                        To keep your UPS or FedEx audit results accurate, Audisee first checks to see if
                                        a shipment is still
                                        in transit. If the
                                        shipment is more than 10 days past the delivery guarantee and does not have a
                                        delivery date, it will
                                        show up in the
                                        Never Delivered section of your free parcel audit results.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manifested Not Shipped
                        </div>
                        <div class="panel-body">
                            <div class="media">
                                <div class="col-xs-12">
                                    <p>
                                        Every once in a while, your package just doesn’t show up where it’s supposed to
                                        go. Audisee can help
                                        you identify when
                                        a shipment is lost.
                                    </p>

                                    <p>
                                        To keep your UPS or FedEx audit results accurate, Audisee first checks to see if
                                        a shipment is still
                                        in transit. If the
                                        shipment is more than 10 days past the delivery guarantee and does not have a
                                        delivery date, it will
                                        show up in the
                                        Never Delivered section of your free parcel audit results.
                                    </p>

                                    <p>
                                        Since UPS will bill you as soon as a shipping label is created (even if you
                                        don’t use it), this
                                        parcel audit point is specific to
                                        UPS auditing. Audisee will list out the shipments where you incurred a shipping
                                        charge for an unused
                                        UPS shipping
                                        label.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Invalid Saturday Delivery Fee
                        </div>
                        <div class="panel-body">
                            <div class="media">
                                <div class="col-xs-12">
                                    <p>
                                        Was it delivered on a Saturday? No? Then why pay for a FedEx or UPS Saturday
                                        Deliver Fee?!
                                        Audisee verifies every shipment’s delivery date and will give you a list of all
                                        shipments that were
                                        not actually delivered on a Saturday but were in fact assessed a Saturday
                                        Delivery Fee.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Invalid Saturday Pickup Fee
                        </div>
                        <div class="panel-body">
                            <div class="media">
                                <div class="col-xs-12">
                                    <p>
                                        Saturday Pickup Fees are similar to Saturday Delivery Fees. Audisee looks
                                        through all shipments that
                                        have an extra charge for a Saturday pickup by FedEx or UPS and ensures that the
                                        pickup scan actually occurred on a
                                        Saturday. For aslong as we have been providing UPS and FedEx audit services, we
                                        still haven’t figured out exactly
                                        why the carriers make this mistake as often as they do.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Invalid Residential Fee
                        </div>
                        <div class="panel-body">
                            <div class="media">
                                <div class="col-xs-12">
                                    <p>
                                        UPS and FedEx charge extra to deliver a package to a residence. The Audisee
                                        FedEx and UPS auditing
                                        software will
                                        look at clues in the invoice data to figure out if a shipment was actually
                                        delivered to a commercial
                                        address or a personal
                                        residence. If you were charged as though it was a residential shipment, but
                                        Audisee believes there
                                        is a good chance it
                                        was actually delivered to a commercial address, the free parcel audit results
                                        will give you a list
                                        of potential refund
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 text-center">
                            <a href="/audisee/instant-parcel-audit">
                                <div class="btn btn-primary btn-lg">GET YOUR PARCEL AUDIT RESULTS</div>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    @include('parts.test-audit.preview')
@stop