@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
    'title' => 'Parcel & Freight Bill Audit - Lojistic',
    'description' => 'Use freight audits to save your company money on shipping costs. At Lojistic we provide shipping and transportation audits to help save you money.',
    'keywords' => 'freight audit, freight bill auditing, freight bill audit, parcel audit, freight auditing, shipping audit, transportation audit, freight auditing companies, shipping auditing, freight invoice audit',
    ])
@overwrite
@section('scripts')
    <script>
        setTimeout($(window).resize(),1000);
    </script>
@stop
@section('content')

    <section class="white">
        <div class="container">
            <h2 class="text-center navy">
            Parcel & Freight Audit Pricing<br>
            <small>Simple options for you to choose from</small>
            </h2>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <div class="col-md-6 col-sm-12 hipster-border">
                <div class="tri tri-20 brightBlue" style="margin-top:-100px; border-top-color:#ffffff"></div>
                <div class="widows-peak-text">
                    <h1 class="text-center"> Parcel Audit</h1>
                    <h3 class="pricing-title text-center brightBlue">% Of Audit Savings</h3><br>
                    <div class="comparison-break">
                        <p class="pricing-title text-center comparison-break-text">
                            <span style="background:#f4f4f4; padding: 10px;">or</span>
                        </p>
                    </div>
                    <h3 class="pricing-title text-center brightBlue">ReadyPay ZERO FEES</h3>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="tri tri-20 brightBlue hidden-sm hidden-xs" style="margin-top:-100px; border-top-color:#ffffff"></div>
                <div class="widows-peak-text">
                    <h1 class="text-center">Freight Audit</h1>
                    <h3 class="pricing-title text-center brightBlue"> % Of Audited Freight Spend</h3><br>
                    <div class="comparison-break">
                        <p class="pricing-title text-center comparison-break-text">
                            <span style="background:#f4f4f4; padding: 10px;">or</span>
                        </p>
                    </div>
                    <h3 class="pricing-title text-center brightBlue">¢/Per Bill Of Lading</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <h2 class="text-center navy">Parcel Audit Pricing</h2>
            <br><br>
            <div class="col-md-6 col-xs-12">
                <div class="huge-card">
                    <div class="huge-card-topper navy">
                        <h2 class="text-center white text-vc">% Of Audit Savings</h2>
                    </div>
                    <div class="huge-card-header brightBlue text-center">
                        <h3 class="text-center white">% Of Audit Savings</h3>
                        <a class="btn btn-primary btn-lg uppercase" href="/audisee/instant-parcel-audit" style="position:relative; z-index: 10; width:250px; top:13px; margin: 0 auto -70px auto; border: #f4f4f4 1px solid;">Sign up</a>
                    </div>
                    <div class="huge-card-content silver">
                        <div class="col-xs-12 silver text-center">
                            <div class="huge-card-item uppercase">
                                Comprehensive Multi-Point
                                Parcel Invoice Audit with Premium Services
                            </div>
                        </div>
                        <div class="col-xs-12 silver text-center">
                            <div class="huge-card-item uppercase">
                                Enhanced Online Reporting
                            </div>
                        </div>
                        <div class="col-xs-12 silver text-center">
                            <div class="huge-card-item uppercase">
                                Enhanced GL Coding
                            </div>
                        </div>
                        <div class="col-xs-12 silver text-center">
                            <div class="huge-card-item uppercase">
                                Customized Savings Checklist
                            </div>
                        </div>
                        <div class="col-xs-12 darkSilver text-center">
                            <a href="/audisee" style="text-decoration:none;">
                                <div class="huge-card-item nb">
                                    <span class="white uppercase">CLICK HERE TO Sign up</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="huge-card">
                    <div class="huge-card-topper navy">
                        <h2 class="text-center white text-vc"> <i class="eloji eloji-ready-pay white text-vc"></i>ReadyPay Audit & Pay</h2>
                    </div>
                    <div class="huge-card-header brightBlue text-center">
                        <h3 class="text-center white uppercase">zero fees (Zilch, Nada, 0!)</h3>
                        <a class="btn btn-primary btn-lg uppercase" href="/audisee/instant-parcel-audit" style="position:relative; z-index: 10; width:250px; top:13px; margin: 0 auto -70px auto; border: #f4f4f4 1px solid;">Sign up</a>
                    </div>
                    <div class="huge-card-content silver">
                        <div class="col-xs-12 silver text-center">
                            <div class="huge-card-item uppercase">
                                Comprehensive Multi-Point
                                Parcel Invoice Audit with Premium Services
                            </div>
                        </div>
                        <div class="col-xs-12 silver text-center">
                            <div class="huge-card-item uppercase">
                                Enhanced Online Reporting
                            </div>
                        </div>
                        <div class="col-xs-12 silver text-center">
                            <div class="huge-card-item uppercase">
                                Enhanced GL Coding
                            </div>
                        </div>
                        <div class="col-xs-12 silver text-center">
                            <div class="huge-card-item uppercase">
                                Customized Savings Checklist
                            </div>
                        </div>
                        <div class="col-xs-12 silver text-center">
                            <div class="huge-card-item uppercase">
                                <b>ReadyPay Guarantee*</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="navy" style="position:relative;">
        <span class="tri tri-20 white" style="left: 50%;margin-left: -20px;margin-top: -1px;position: absolute;top: 0; border-top-color:#ffffff;"></span>
        <!-- why you may ask is it required to inline styles related to this particular widdows peak? I literally have no clue -->
        <div class="container same-height-parent">
            <h1 class="american brightBlue text-center"><i class="eloji eloji-ready-pay white text-vc"></i> Ready Pay</h1>
            <h2 class="nm white">Innovative Parcel Audit & Pay With ZERO FEES</h2>
            <div class="col-md-4 col-xs-12">
                @include('parts.impact-check', array(
                'borderColor'=>'white',
                'backgroundColor'=>'brightBlue',
                'itemOne'=>'Comprehensive',
                'itemtwo'=>'FedEx/UPS Parcel',
                'itemthree'=>'Invoice Audit.'
                ))
            </div>
            <div class="col-md-4 col-xs-12">
                @include('parts.impact-check', array(
                'borderColor'=>'white',
                'backgroundColor'=>'brightBlue',
                'itemOne'=>'ZERO Contingency Fee.',
                'itemtwo'=>'You Keep 100% ',
                'itemthree'=>'Of Audit Savings.'
                ))
            </div>
            <div class="col-md-4 col-xs-12">
                @include('parts.impact-check', array(
                'borderColor'=>'white',
                'backgroundColor'=>'brightBlue',
                'itemOne'=>'100% ReadyPay Guaranteee',
                'itemtwo'=>'Credits Are Guaranteed',
                'itemthree'=>'Against Carrier Reversal*'
                ))
            </div>
            <br>&nbsp;
            <br>
            <div class="col-md-4 col-md-offset-4 col-xs-12 ">
                <div class="btn btn-primary btn-thick">Learn More</div>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <h2 class="navy text-center">
                Freight Audit Pricing<br>
                <small>Our Freight Audit Covers TL, LTL, Ocean & Air Cargo:</small>
            </h2>
            <div class="col-md-10 col-md-offset-1 col-xs-12 ">
                <div class="huge-card">
                    <div class="huge-card-topper navy" style="padding:10px;">
                        <h2 class="text-center white text-vc" >Freight Audit</h2>
                    </div>
                    <div class="huge-card-header brightBlue text-center">
                        <h3 class="text-center white uppercase">% Of Annual Freight Spend or ¢/Per Bill Of Lading</h3>
                        <a class="btn btn-primary btn-lg uppercase" href="/audisee/instant-parcel-audit"
                           style="position:relative; z-index: 10; width:250px; top:13px; margin: 0 auto -70px auto; border: #white 1px solid;">
                            Sign up
                        </a>
                    </div>
                    <div class="huge-card-content silver">
                        <div class="col-xs-12 silver text-center">
                            <div class="huge-card-item uppercase"  style="border-bottom: #white 4px solid;">
                                Comprehensive Multi-Point<br>
                                Parcel Invoice Audit with Premium Services
                            </div>
                        </div>
                        <div class="col-xs-12 silver text-center">
                            <div class="huge-card-item uppercase" style="border-bottom: white 4px solid;">
                                Enhanced Online Reporting
                            </div>
                        </div>
                        <div class="col-xs-12 silver text-center">
                            <div class="huge-card-item uppercase" style="border-bottom: white 4px solid;">
                                Enhanced GL Coding
                            </div>
                        </div>
                        <div class="col-xs-12 silver text-center">
                            <div class="huge-card-item uppercase" style="border-bottom: white 4px solid;">
                                Customized Savings Checklist
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-md-offset-1 col-xs-12 np nm">
                <br>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, animi assumenda, at beatae blanditiis corporis dolor est in laborum nemo perspiciatis praesentium quasi quibusdam saepe ut voluptatem voluptatibus! Molestiae, voluptatem?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, animi assumenda, at beatae blanditiis corporis dolor est in laborum nemo perspiciatis praesentium quasi quibusdam saepe ut voluptatem voluptatibus! Molestiae, voluptatem?
                </p>
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container same-height-parent">
            <h2>Parcel & Freight Invoice Audit Combination Pricing<br>
            <small>Combine Both Parcel & Freight Audits To Optimize Transporation Savings:</small></h2>
            <div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1" style="padding-right:25px; padding-left:25px;">
                @include('parts.featurette', array(
               'titleColor'=> 'navy',
               'fontColor'=> 'white',
               'title' => 'Contingency Parcel Audit',
               'bodyColor'=>'white',
               'body'=>'% Of Audit Saving'
               ))
                <br class="hidden-sm hidden-xs">
                <div class="pricing-helper-or" >OR</div>
            </div>
            <div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1" style="padding-right:25px; padding-left:25px;" >
                @include('parts.featurette', array(
               'titleColor'=> 'brightBlue',
               'fontColor'=> 'white',
               'title' => 'ReadyPay Audit & Pay',
               'bodyColor'=>'white',
               'body'=>'ZERO FEES'
               ))
                <div class="pricing-helper-and">+</div>
                <br class="hidden-sm hidden-xs">
            </div>
            <div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1" style="padding-right:25px; padding-left:25px;">
                @include('parts.featurette', array(
               'titleColor'=> 'navy',
               'fontColor'=> 'white',
               'title' => 'Freight Audit',
               'bodyColor'=>'white',
               'body'=>'% Of Audited Freight Spend or ¢/Per Bill Of Lading'
               ))

                <br>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <h2 class="text-center navy">
                Parcel & Freight Audit Feature Benefits<br>
                <small>Standard premium services included in all parcel & freight audits</small>
            </h2>
            <div class="row">
                <div class="col-sm-4">
                    @include('parts.snippets.social-circles', array(
                    'circleSize'=>'circ-150',
                    'elojiSize' => 'fs-72',
                    'eloji' => 'eloji-audit',
                    'color' => 'navy',
                    'title'=>'Comprehensive <br>Invoice Audit',
                    'titlecolor'=>'brightBlue',
                    'text'=>'Multi-point audit reviews and <br>validate every transportation <br>and accessorial charge.' ))
                </div>
                <div class="col-sm-4">
                    @include('parts.snippets.social-circles', array(
                    'circleSize'=>'circ-150',
                    'elojiSize' => 'fs-72',
                    'eloji' => 'eloji-computer-graph',
                    'color' => 'navy',
                    'title'=>'Enhanced <br>Online Reporting',
                    'titlecolor'=>'brightBlue',
                    'text'=>'Online reporting tools allow <br>on-demand visibility to detailed<br>shipping information ' ))
                </div>
                <div class="col-sm-4">
                    @include('parts.snippets.social-circles', array(
                    'circleSize'=>'circ-150',
                    'elojiSize' => 'fs-72',
                    'eloji' => 'eloji-data',
                    'color' => 'navy',
                    'title'=>'Enhanced <br>Automated GL Coding',
                    'titlecolor'=>'brightBlue',
                    'text'=>'Customer specific solutions,<br> such as preparation of complex<br> General Ledger (GL) coding.' ))
                </div>
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <article>
                <h2 class="navy text-center">Not Ready For Our Full Enterprise Audit? <br>
                    <small>Check Out Our (Free) Instant UPS & FedEx Audit Tool.</small></h2>
                <p>
                    You probably already know that your FedEx or UPS parcel invoices can contain errors, but how much is actually recoverable? Before you enroll in a parcel audit, you probably want to know if it is going to be worthwhile. Back in the dark ages (before Audisee), shippers had to pick up the phone and talk to a sales guy for 40 minutes, just to wait another 3 to 4 weeks for the results of their “test" parcel audit. Who’s got time for that?!
                </p>
                <p>
                    Lojistic has decided to put this free UPS and FedEx audit software in your hands, and instantly give you the information you need to recover your refunds.
                </p>
                <p>
                    Audisee’s free parcel audit process begins quite simply with you locating the FedEx or UPS invoices that you want to audit.  Once you pass those file(s) to Audisee, the software instantly starts the FedEx or UPS auditing process of looking for refund opportunities.
                </p>
                <br>
                <br>
            </article>
            <div class="col-lg-10 col-lg-offset-1">
                <div class="huge-card">
                    <div class="huge-card-header brightBlue text-center">
                        <img width="500" src="/images/audisee-full-logo.png" alt="audisee audit logo">
                        <a class="btn btn-primary btn-lg" href="/audisee/instant-parcel-audit"
                           style="position:relative; z-index: 10; width:250px; top:13px; margin: 0 auto -70px auto; border: #f4f4f4 1px solid;">
                            AUDIT NOW
                        </a>
                    </div>
                    <div class="huge-card-content white">
                        <div class="col-xs-12 white text-center">
                            <div class="huge-card-item" style="border-bottom: #f4f4f4 4px solid;">Instantly Identifies Refund Opportunities In UPS/FedEx
                                Invoices
                            </div>
                        </div>
                        <div class="col-xs-12 white text-center">
                            <div class="huge-card-item" style="border-bottom: #f4f4f4 4px solid;">Gives All The Info You Need To Get Your Credits</div>
                        </div>
                        <div class="col-xs-12 white text-center">
                            <div class="huge-card-item" style="border-bottom: #f4f4f4 4px solid;">Won’t Make Your Carriers Cranky</div>
                        </div>
                        <div class="col-xs-12 white text-center">
                            <div class="huge-card-item">Hella Free. Total Price = $0. No Cost. No Catch.</div>
                        </div>
                        <div class="col-xs-12 white text-center">
                            <div class="huge-card-item" style="border-bottom: #f4f4f4 4px solid;">Audisee Delivers Results In About 40 Seconds</div>
                        </div>
                        <div class="col-xs-12 white text-center">
                            <div class="huge-card-item" style="border-bottom: #f4f4f4 4px solid;">Your Results Are Available & Shareable For 30 Days</div>
                        </div>
                        <div class="col-xs-12 brightBlue text-center">
                            <a href="/audisee" style="text-decoration:none;">
                                <div class="huge-card-item nb">
                                    <span class="white">CLICK HERE TO LEARN MORE ABOUT AUDISEE</span>
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
            @include('parts.forms.contact-or-schedule', array(
            'scheduleTitle' => 'SCHEDULE A DEMO',
            'scheduleText'  => 'Our Savings Demo Is Quick And Will Demonstrate How To Significantly Reduce Your Shipping Costs.',
            'scheduleBtnText' => 'SCHEDULE NOW',
            'formVars' => array(
            'thankyouPage' => '/thank-you',
            'intent' => 'Parcel Audit',
            'btnTxt' => 'CONTINUE',
            'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
            )
            ))
        </div>
    </section>
    @include('parts.test-audit.preview')


    {{--<section class="silver np">--}}
    {{--<div class="container">--}}
    {{--<p class="small-padding">--}}
    {{--No-hassle, worry-free freight audit and pay. Freight auditing hasn’t ever been easier thanks to Lojistic’s convenient pricing models. Choose between paying a flat fee per bill of lading audited, or a percentage of total audited freight spend. Whichever you choose, you can rest easy in knowing that you’re receiving a super-awesome audit from a trusted, reputable, rad company. </p>--}}
    {{--</div>--}}
    {{--</section>--}}


    {{--<section class="white np">--}}
    {{--<div class="container">--}}
    {{--<p class="small-padding">--}}
    {{--Trying to decide between a standard contingency-based parcel audit or ReadyPay audit & pay? Lojistic has you covered no matter which option you choose. Our convenient pricing models have been custom tailored to meet the needs of big and small shippers alike.--}}
    {{--Have a big spend but prefer paying the carriers yourself? Contingency audit. Are you a small or big shipper and want to free up AP overhead? ReadyPay. Regardless of your shipping characteristics, Lojistic has a pricing model that will work for you.</p>--}}
    {{--</div>--}}
    {{--</section>--}}



@stop