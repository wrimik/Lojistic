@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title' => 'Parcel & Freight Bill Audit - Lojistic',
        'description' => 'Use freight audits to save your company money on shipping costs. At Lojistic we provide shipping and transportation audits to help save you money.',
        'keywords' => 'freight audit, freight bill auditing, freight bill audit, parcel audit, freight auditing, shipping audit, transportation audit, freight auditing companies, shipping auditing, freight invoice audit',
    ])
@overwrite
@section('content')


    <section class="white">
        <div class="container">
            <h2 class="text-center navy">
                Parcel & Freight Bill Audit<br>
                <small>Why Pay The Carriers More Than You Have To?</small>
            </h2>
            <div class="row">
                <div class="col-sm-4">
                    @include('parts.snippets.social-circles', array(
                    'circleSize'=>'circ-150',
                    'elojiSize' => 'fs-72',
                    'eloji' => 'eloji-paper-sign',
                    'color' => 'navy',
                    'title'=>'Sign Up',
                    'titlecolor'=>'brightBlue',
                    'text'=>'Two page agreement<br class="hidden-xs hidden-sm hidden-md"> No long term contract<br>It’s that simple' ))
                </div>
                <div class="col-sm-4">
                    @include('parts.snippets.social-circles', array(
                   'circleSize'=>'circ-150',
                   'elojiSize' => 'fs-72',
                   'eloji' => 'eloji-audit',
                   'color' => 'navy',
                   'title'=>'Invoices Get Audited',
                   'titlecolor'=>'brightBlue',
                   'text'=>'UPS & FedEx invoices loaded<br class="hidden-xs hidden-sm hidden-md"> Brainiac computers get to work <br class="hidden-xs hidden-sm hidden-md">Refund opportunities found' ))
                </div>
                <div class="col-sm-4">
                    @include('parts.snippets.social-circles', array(
                    'circleSize'=>'circ-150',
                    'elojiSize' => 'fs-72',
                    'eloji' => 'eloji-make-it-rain',
                    'color' => 'navy',
                    'title'=>'We Make It Rain',
                    'titlecolor'=>'brightBlue',
                    'text'=>'Refunds filed and chased<br class="hidden-xs hidden-sm hidden-md">Carriers refund your account<br class="hidden-xs hidden-sm hidden-md">Easy peazy' ))
                </div>
            </div>
            <div class="col-centered col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                <a rel="nofollow" href="/parcel-freight-bill-audit/sign-up-form" class="btn btn-thick orange text-center hover-color-opacity">
                    START SAVING NOW
                </a>
            </div>
        </div>
    </section>

    <section class="navy">
        <div class="container">
            <div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <h3 class="white text-center">WHY SHOULD YOU AUDIT ALL CARRIER CHARGES?</h3>
                <br>
                <p class="center white">
                    Virtually every carrier shipping invoice contains errors. These may include: accessorial
                    charges, rate inaccuracies, duplicate charges, and/or charges for shipments delivered
                    outside the carrier’s service guarantee(s). Carrier errors are challenging to identify
                    and entail a labor intensive recovery process. Consequently, almost all shippers
                    unknowingly overpay their carrier with each payment sent.
                </p>
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <div class="col-sm-3 col-xs-12">
                @include('parts.snippets.badge', array('text' => 'Month-To-Month<br/>Service','elojiColor' => 'brightBlue'))
                <hr class="visible-xs"/>
            </div>
            <div class="col-sm-3 col-xs-12">
                @include('parts.snippets.badge', array('text' => 'Contingency <br/> Based Pricing','elojiColor' => 'brightBlue'))
                <hr class="visible-xs"/>
            </div>
            <div class="col-sm-3 col-xs-12 ">
                @include('parts.snippets.badge', array('text' => 'Free Reporting <br/>& Analytics', 'elojiColor' => 'brightBlue'))
                <hr class="visible-xs"/>
            </div>
            <div class="col-sm-3 col-xs-12">
                @include('parts.snippets.badge', array('text' => 'Turn-Key <br/>Setup Process','elojiColor' => 'brightBlue'))
            </div>
        </div>
        <div class="container tan-spacing-one">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                <a rel="nofollow" href="/parcel-freight-bill-audit/sign-up-form" class="btn btn-thick orange text-center hover-color-opacity">
                    START SAVING NOW
                </a>
            </div>
        </div>
    </section>

    {{--@include('parts.home.test-audit-lead-in', ['pretext' => 'Not Ready For Our Full Enterprise Audit? <br/>Check Out Our (Free) Instant UPS & FedEx Audit Tool'])--}}

    <section class="white">
        <div class="container">
            <article>
                <h2 class="brightBlue text-center">Not Ready For Our Full Enterprise Audit? <br>
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
                        <a class="btn btn-primary btn-lg" rel="nofollow" href="/audisee/instant-parcel-audit"
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
                        <div class="col-xs-12 brightBlue text-center">
                            <a rel="nofollow" href="/audisee" style="text-decoration:none;">
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

    <section class="silver">
        <div class="text-center">
            <div class="container">
                <h3 class="navy">THIS PARCEL FREIGHT BILL AUDIT IS RAD!!!<br>
                    <small>Share it with your best friend, neighbor, coworker...</small>
                </h3>
                <hr class="slim">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-sm-3 col-xs-6 text-center">
                            <div class="social-spacing">
                                <a rel="nofollow" href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//lojistic.com/parcel-freight-bill-audit&title=Parcel%20Freight%20Bill%20Audit%20by%20Lojistic&summary=&source=">
                                    <div class="circ circ-75 white hover-color-flatBlue text-center">
                                        <i class="eloji-linkedin text-vc fs-36 navy"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6 text-center">
                            <div class="social-spacing">
                                <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//lojistic.com/parcel-freight-bill-audit">
                                    <div class="circ circ-75 white hover-color-flatBlue text-center">
                                        <i class="eloji-facebook text-vc fs-36 navy"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6 text-center">
                            <div class="social-spacing">
                                <a rel="nofollow" href="https://twitter.com/home?status=Check%20out%20Lojistic's%20Parcel%20freight%20bill%20audit%3A%20http%3A//lojistic.com/parcel-freight-bill-audit">
                                    <div class="circ circ-75 white hover-color-flatBlue text-center">
                                        <i class="eloji-twitter text-vc fs-36 navy"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6 text-center">
                            <div class="social-spacing">
                                <a rel="nofollow" href="mailto:info@lojistic.com">
                                    <div class="circ circ-75 white hover-color-flatBlue text-center">
                                        <i class="eloji-email text-vc fs-36 navy"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <div class="row">
                <form id="annual-spend-form">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
                        <h3 class="center">How Much Is Potentially Recoverable?</h3>
                        <div class="form-group">
                            <label class="text-center">
                                <b>Enter Your Annual Shipping Spend To Get Started</b>
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input value="1000000" type="text" id="audit-spend" class="form-control"
                                       data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true"
                                       style="text-align: right;"/>
                            </div>
                        </div>
                        <div class="col-xs-10 col-xs-offset-1 form-group">
                            <button type="submit" class="btn btn-primary scrollTo btn-lg"
                                    data-target="#ac-start-scroll-target">CONTINUE
                            </button>
                        </div>
                    </div>
                    <div id="ac-start-scroll-target" class="col-xs-12"></div>
                </form>
            </div>
            <div class="row">
                <div id="audit-calc" class="pending col-xs-12 hidden-xs">
                    <div id="ac-controls" class="col-sm-5">
                        <div class="col-sm-12">
                            <form action="">
                                <h3>Refine Your <br/> Shipping Profile</h3>
                                <div class="form-group">
                                    <label for="">
                                        <input type="checkbox" id="gsr" checked/>
                                        I can file for late delivery refunds
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="pull-left">Ground</span>
                                        <span class="pull-right">Air</span>
                                    </label>
                                    <input class="form-control" type="range" id="ground" min="0" max="100"/>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="pull-left">Domestic</span>
                                        <span class="pull-right">International</span>
                                    </label>
                                    <input class="form-control" type="range" id="domestic" min="0" max="100"/>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="pull-left">Residential</span>
                                        <span class="pull-right">Commercial</span>
                                    </label>
                                    <input class="form-control" type="range" id="resi" min="0" max="100"/>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="pull-left">Freight $</span>
                                        <span class="pull-right">Parcel $</span>
                                    </label>
                                    <input class="form-control" type="range" id="freight" min="0" max="100"/>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="ac-results" class="col-sm-7">
                        <div id="ac-chart">
                            <img src="/images/bellcurve.jpg"/>
                            <table>
                                <tr>
                                    <td id="ac-min-percent">[PENDING]</td>
                                    <td>Ballpark Annual Audit Recovery</td>
                                    <td id="ac-max-percent">[PENDING]</td>
                                </tr>
                                <tr>
                                    <td>{{-- (~1%) --}}</td>
                                    <td><span id="ac-est-recovery">[Pending]</span> ish</td>
                                    <td>{{-- (~7%) --}}</td>
                                </tr>
                            </table>
                        </div>
                        <div id="ac-you">
                            <div>YOU</div>
                            <div></div>
                        </div>
                    </div>
                    <div id="ac-pending">RESULTS PENDING ANNUAL SPEND</div>
                </div>
            </div>
            <div id="ac-start-saving" class="col-sm-4 col-sm-offset-4">
                <br class="visible-xs-inline"/><br class="visible-xs-inline"/>
                <div class="btn btn-primary btn-lg scrollTo" data-target="#convert">START SAVING</div>
            </div>
        </div>
    </section>

    <section class="navy">
        <div class="container">
            <div class="col-sm-6">
                <img src="images/price-tag.png">
            </div>
            <div class="col-sm-6">
                <h2 class="white">
                    What’s All This Gonna Cost Me? <br>
                    <small><span class="white">Learn more about our pricing options</span></small>
                </h2>
               <div class="button-wrap"><a rel="nofollow" href="/lojistic-pricing"><div class="btn btn-ghost-blue btn-thick">LEARN MORE</div></a></div>
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <article>
                <h2>Freight &amp; Parcel Audit</h2>
                <br>
                <p>
                    There are numerous carrier billing mistakes, service delivery failures,
                    and erroneous accessorial charges that occur on each shipping invoice.
                    These can be detected and recovered with a quality shipping audit.
                    Lojistic guarantees to reduce transportation costs with our freight and
                    <a class="brightBlue" rel="nofollow" href="parcel-audit">parcel audit</a> solutions, which include: UPS auditing, FedEx auditing,
                    truck (TL & LTL) auditing, ocean freight auditing, rail freight auditing,
                    and air freight auditing.
                </p>
                <p>
                    Using innovative technology, our team of experienced former UPS, FedEx, and
                    DHL employees will deliver maximum parcel shipping and freight cost savings
                    by ensuring each carrier invoice is correct. Depending upon which shipping
                    carriers you currently use, we will conduct a parcel and freight pre-audit
                    and/or post audit of each shipping invoice.
                </p>
                <p>
                    Our exhaustive parcel and freight bill audit services will identify shipment
                    billing errors and late deliveries. Unlike many other freight and parcel
                    auditing companies, the experienced team at Lojistic will manage the carrier
                    audit refund process to make certain you do not overpay your small parcel
                    carriers, truck freight carriers, ocean freight carriers, rail freight carriers,
                    and/or air freight carriers.
                </p>
                <p>
                    All of our logistics audit solutions are an ongoing trial with no long-term
                    contractual commitments. Lojistic guarantees that our freight and parcel bill
                    audit services will reduce shipping costs, and we stand behind every
                    transportation audit that we conduct.
                </p>
            </article>
            <div class="col-md-4 col-md-offset-4 col-xs-12">
                <br>
                <br>
                <a rel="nofollow" href="/parcel-freight-bill-audit/sign-up-form"><div class="btn btn-primary btn-thick" >SIGN UP NOW</div></a>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <h2>Major Benefits To <br/>
               <small> Our Parcel &amp; Freight Audit Services:</small>
            </h2>
            <br>
            <br>
            <div class="row np">
                <div class=" col-lg-3 col-md-6 col-sm-12">
                    @include('parts.snippets.social-circles', array(
                    'circleSize'=>'circ-150',
                    'elojiSize' => 'fs-72',
                    'elojistyle'=> 'border:#00344b 2px solid;',
                    'elojicolor'=> 'navy',
                    'eloji' => 'eloji-cut-money',
                    'color' => 'silver',
                    'title'=>'Reduce Freight <br> & Parcel Costs',
                    'titlecolor' => 'navy'))
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    @include('parts.snippets.social-circles', array(
                   'circleSize'=>'circ-150',
                   'elojiSize' => 'fs-72',
                   'elojistyle'=> 'border:#00344b 2px solid;',
                   'elojicolor'=> 'navy',
                   'eloji' => 'eloji-operator-alt',
                   'color' => 'silver',
                   'title'=>'Reduce Administrative <br>Expenses',
                   'titlecolor' => 'navy'
                    ))
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    @include('parts.snippets.social-circles', array(
                    'circleSize'=>'circ-150',
                    'elojiSize' => 'fs-72',
                    'elojistyle'=> 'border:#00344b 2px solid;',
                    'elojicolor'=> 'navy',
                    'eloji' => 'eloji-checklist',
                    'color' => 'silver',
                    'title'=>'Customized Carrier <br>Audit Services',
                    'titlecolor' => 'navy',
                     ))
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    @include('parts.snippets.social-circles', array(
                    'circleSize'=>'circ-150',
                    'elojiSize' => 'fs-72',
                    'elojistyle'=> 'border:#00344b 2px solid;',
                    'elojicolor'=> 'navy',
                    'eloji' => 'eloji-book-alt',
                    'color' => 'silver',
                    'title'=>'Freight Management <br>& Carrier Reporting',
                    'titlecolor' => 'navy'
                     ))
                </div>
            </div>
            <br>
                        @include('parts.snippets.featuresection', array(
                            'topcolor'=> 'brightBlue',
                            'flagColor' => 'navy', //navy
                            'title' => 'Reduce Freight & Parcel Costs',
                            'bodycolor'=>'silver',
                            'text' => 'Each carrier invoice we process in a freight bill audit is audited both electronically and by a professional freight auditor. Lojistic consistently recovers 1-7% of total small parcel and freight costs by identifying all refund eligible opportunities.<br><br>
                            Our team of professionals manage the carrier audit refund claims that result from the freight auditing process. Lojistic guarantees to reduce freight costs. Try our shipping audit and we will legitimize our service with our results, providing a quality freight invoice audit that can help you move forward with plans for negotiating better shipping contracts and saving money.'
                            ))
                        @include('parts.snippets.featuresection', array(
                            'topcolor'=> 'brightBlue',
                            'flagColor' => 'navy', //navy
                            'title' => 'Reduced Administrative Expenses Through Freight Auditing:',
                            'bodycolor'=>'silver',
                            'text' => 'Companies conducting their freight payment audit in-house are using
                                    costly employee resources to ensure carrier invoices are correct. Furthermore,
                                    a manual freight audit is not able to uncover the same number of carrier audit
                                    billing errors and shipping service failures that our highly programmed freight
                                    bill audit software is able to identify.<br><br>Our carrier audit services will eliminate
                                    unnecessary man-hours currently allocated to these tasks and generate additional freight
                                    cost reduction as a direct result of our shipping auditing. Save money on labor and
                                    missed refund opportunities when you use our freight bill auditing services to generate
                                    your next freight audit.'))
                        @include('parts.snippets.featuresection', array(
                       'topcolor'=> 'brightBlue',
                       'flagColor' => 'navy', //navy
                       'title' => 'Customized Carrier Audit Services:',
                       'bodycolor'=>'silver',
                       'text' => 'Upon request, Lojistic is able to create customer specific carrier audit services,
                                    including complex and extensive general ledger (GL) coding. We are able to customize
                                    our freight audit services to each customer, ensuring that your unique concerns are
                                    addressed thoroughly in our Lojistic freight bill audit.<br><br>Unlike other freight auditing
                                    companies, we understand that a one-size-fits-all approach will not work with all clients,
                                    so we want to tailor our freight invoice audit specifically to your needs.'))
                        @include('parts.snippets.featuresection', array(
                       'topcolor'=> 'brightBlue',
                       'flagColor' => 'navy', //navy
                       'title' => 'Freight Management & Carrier Reporting After a Shipping Audit:',
                       'bodycolor'=>'silver',
                       'text' => ' As a standard value-add feature to Lojistic\'s weekly parcel auditing and
                                    freight bill audit solutions, online access to our online reporting tool provides
                                    the highest level of shipment visibility and access to all freight and parcel
                                    audit information.'))
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <article>
                <h2>Comprehensive Reporting<br>
                    <small>We Have So Many Reports That We Had To Make A Report About It.</small>
                </h2>
                <br>
                <div class="row np">
                    <div class="col-centered col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                        <a rel="nofollow" href="/pdf/Lojistic-Ad-Hoc-Report-Guide.pdf" class="btn btn-thick brightBlue text-center hover-color-opacity">
                            GIMME MY REPORTS REPORT
                        </a>
                    </div>
                </div>
                <br>
                <br>
                <p>
                    There are dozens of reports on hand that allow customers to monitor detailed
                    shipping information and help reduce logistics costs after the shipping
                    audit process is complete. Our online transportation reporting tool provides
                    comprehensive reporting of all freight and small parcel shipments.
                </p>
                <p>
                    High level shipping cost summary reports and detailed granular reports will
                    help specific company departments better manage logistics audit operations
                    and reduce freight costs as a direct result of our freight invoice audit services.
                    Our transportation software technology will house shipping data, enabling your
                    team to generate any number of historical freight bill audit reports when needed.
                    This is a service that few other freight auditing companies can match.
                </p>
                <p>
                    A better understanding of your freight and small parcel characteristics will
                    facilitate improved internal efficiencies, minimize costly operational mistakes,
                    and help guide toward a better carrier relationship after our freight bill auditing
                    process has begun. All of this and more are clear benefits of the shipping auditing
                    endeavor and our parcel audit process.
                </p>
            </article>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <article>
                <h2>Why Lojistic?</h2>
                <p>
                    Lojistic employs the freight bill audit resources of highly experienced former UPS,
                    FedEx, and DHL employees with innovative logistics audit technology to deliver
                    maximum freight cost savings results in each freight bill audit. Of all freight
                    audit companies, we believe our freight auditing solutions and freight audit
                    services are most effective in reducing shipping costs. As your UPS auditor and
                    FedEx auditor, Lojistic will guarantee freight cost reduction. Our fees are
                    performance-based, meaning our compensation is a contingent share of actual
                    freight cost savings produced by our freight bill audit services. Employing the
                    logistics audit technology and carrier audit pricing expertise of Lojistic will
                    dramatically reduce your shipping costs and increase operational efficiencies.
                </p>

                <p>
                    If your company sends and receives a large number of packages each year, then you
                    know how costly dealing with the major shipping carriers can be. The more
                    shipments, the greater the savings will be when you reduce shipping costs on
                    all of your mailings. While renegotiating your shipping contracts is a great
                    way to reduce your parcel freight charges, you should also monitor your parcel
                    shipping invoices regularly for mistakes and errors. If you want to know how to
                    reduce shipping costs by ensuring carrier billing accuracy, we can help.
                </p>

                <p>
                    Lojistic is a recognized expert in the freight auditing service industry. We work
                    with a large number of companies, helping them with their freight audit needs.
                    We understand that most businesses do not have the labor resources they need
                    to conduct a thorough freight audit on their own, so we help companies get
                    control of their parcel freight costs through our freight auditing services.
                    When companies ask us to help them reduce shipping costs with our freight
                    management services, the savings is immediate and quantifiable.
                </p>

                <p>
                    Our freight audit services are easy to implement, making it simple for you to
                    immediately reduce shipping costs by employing our freight auditing services.
                    To put it simply, our parcel freight experts who have backgrounds working for
                    FedEx, DHL, UPS, and other major delivery service carriers will check your
                    shipping invoices on your behalf, identifying when the carriers have made
                    mistakes or where you have been overcharged. We reduce shipping costs for
                    you by getting the carriers to correct their errors and remit the refund you
                    are owed. Our fees are commission-based and depend on the success of our
                    freight audit recovery process if you do not get a refund, we do not get paid.
                </p>

                <p>
                    We are happy to <a rel="nofollow" href="/parcel-freight-audit-demo">provide a demo</a> that gives complete
                    information on how to reduce
                    shipping costs with our freight management services. Just complete the form on
                    this page to view an online demonstration of Lojistic's advanced services. Your
                    company will save thousands and thousands of dollars (some customers have
                    saved millions of dollars) by employing two simple strategies.
                </p>
            </article>
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
@stop