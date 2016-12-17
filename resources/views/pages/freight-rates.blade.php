@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Lojistic - Freight Rates',
        'description' => 'By utilizing our powerful shipping software, Intelliship, Lojistic is able to load your freight rates and compare them alongside ours.',
        'keywords'    => 'freight rates, freight discount, freight broker',
    ])
@overwrite
@section('content')
    <section  class="banner orange">
        <div class="container">
            <div class="col-sm-3 col-xs-12 text-center">
                <i class="fs-150 white eloji-freight"></i>
            </div>
            <div class="col-sm-9 col-xs-12">
                <h1 class="white">Freight Management</h1>
            </div>
        </div>
    </section>
    <section class="white">
        <div class="container">
            <h2>Comprehensive Freight Management Services</h2>
            @include('parts.combos.5badges', array(
                    'vars' => array(
                        'badgeColor' => 'orange',
                        'circSize' => '120',
                        'fontSize' => '16',
                        'elojiSize' => '72',
                    ),
                    'badges' => array(
                        array('eloji' => 'eloji-freight',
                            'text' => 'LESS THAN<br/>TRUCKLOAD (LTL)'),
                        array('eloji' => 'eloji-bigrig',
                            'text' => 'FULL<br/>TRUCKLOAD (TL)'),
                        array('eloji' => 'eloji-boat',
                            'text' => 'OCEAN<br/>FREIGHT'),
                        array('eloji' => 'eloji-plane',
                            'text' => 'AIR<br/>FREIGHT'),
                        array('eloji' => 'eloji-train',
                            'text' => 'RAIL<br/>FREIGHT'
                        )
                    )
                )
            )
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <div class="row">
                @include('parts.combos.5badges', array(
                        'vars' => array(
                            'badgeColor' => 'silver',
                            'circSize' => '0',
                            'fontSize' => '16',
                            'elojiColor' => 'orange',
                            'elojiSize' => '72',
                            'textColor' => 'flatBlue'
                        ),
                        'badges' => array(
                            array('eloji' => 'eloji-freight-rates',
                                'text' => 'FREIGHT<br/>RATES'),
                            array('eloji' => 'eloji-spot-quote',
                                'text' => 'SPOT<br/>QUOTE'),
                            array('eloji' => 'eloji-cloud-computing',
                                'text' => 'TMS<br/>SOFTWARE'),
                            array('eloji' => 'eloji-payment-alt',
                                'text' => 'AUDIT<br/>&amp; PAY'),
                            array('eloji' => 'eloji-checklist',
                                'text' => 'SAVINGS<br/>CHECKLIST')
                        )
                    )
                )
            </div>
            <h3 class="text-center">If your company is working to solve unique transportation objectives and
                challenges.... Lojistic's freight management services can help. </h3>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    RATE NEGOTIATION
                </div>
                <div class="panel-body">
                    <div class="media">
                        <div class="col-xs-8 col-sm-10">
                            Designing and refining an optimal network of carrier
                            partners at market leading low cost shipping rates is always important.
                        </div>
                        <div class="col-xs-4 col-sm-2 text-right">
                            <i class="fs-72 orange eloji eloji-freight-rates"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    SPOT QUOTES
                </div>
                <div class="panel-body">
                    <div class="media">
                        <div class="col-xs-8 col-sm-10">
                            In the case of special one-off freight shipping requirements, it is important that a
                            shipper has an efficient and cost effective means of procuring the best market quote
                            on-demand (spot quote).
                        </div>
                        <div class="col-xs-4 col-sm-2 text-right">
                            <i class="fs-72 orange eloji eloji-spot-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    TRANSPORTATION SOFTWARE
                </div>
                <div class="panel-body">
                    <div class="media">
                        <div class="col-xs-8 col-sm-10">
                            Utilizing transportation management software to ensure routing guide compliance and the
                            optimal use of carrier services and rates will maximize freight rate cost saving
                            opportunities.
                        </div>
                        <div class="col-xs-4 col-sm-2 text-right">
                            <i class="fs-72 orange eloji eloji-cloud-computing"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    AUDIT &amp; PAY
                </div>
                <div class="panel-body">
                    <div class="media">
                        <div class="col-xs-8 col-sm-10">
                            An essential risk management operation is to verify the accuracy of all carrier
                            invoicing, systematize transportation cost allocation (GL coding), and streamline the
                            carrier payment process.
                        </div>
                        <div class="col-xs-4 col-sm-2 text-right">
                            <i class="fs-72 orange eloji eloji-payment-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    SAVINGS CHECKLIST
                </div>
                <div class="panel-body">
                    <div class="media">
                        <div class="col-xs-8 col-sm-10">
                            Transportation data management translated into meaningful and actionable information is
                            also imperative in effective freight management.
                        </div>
                        <div class="col-xs-4 col-sm-2 text-right">
                            <i class="fs-72 orange eloji eloji-checklist"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <div class="col-md-8 col-xs-12">
                <h3 class="orange-txt text-left">Get A FREE In-Depth Freight Study</h3>

                <p>Let us show you how to significantly reduce your freight costs!<br/>
                    Let us identify your cost savings opportunities.</p>
            </div>
            <div class="col-md-4 col-xs-12">
                <br/>

                <div class="btn btn-primary btn-lg scrollTo" data-target="#convert">GET STARTED NOW</a>
                </div>
            </div>
        </div>
    </section>


    <section class="white">
        <div class="container">
            <div class="col-sm-4 text-center">
                <br/>
                <i class="eloji eloji-network orange fs-200"></i>
            </div>
            <div class="col-sm-8">
                <h3 class="text-left">Carrier Network Design & Rate Optimization</h3>

                <p class="fs-20">
                    Having the right carrier relationships and working to enhance those relationships is critical for
                    most shippers. The cost of freight shipping services is also important. Lojistic can help to analyze
                    and evaluate the freight rates and services of carriers currently servicing your supply chain. The
                    team at Lojistic can then help to optimize the opportunities identified.
                </p>
            </div>
        </div>
    </section>


    <section class="silver">
        <div class="container">
            <div class="col-sm-8">
                <h3>On-Demand Market Freight Quotes (Spot Quotes)</h3>

                <p class="fs-20">
                    Sometimes the cheapest shipping option is the "price of the day", otherwise known as a spot quote or
                    volume quote. When your unanticipated volume shipping requirements align with a carrier's excess
                    capacity, it can be a win-win. Lojistic can provide technology and/or dedicated staff (onsite or
                    remote) to help manage these freight shipping needs.
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <br/>
                <i class="eloji eloji-spot-quote orange fs-200"></i>
            </div>
        </div>
    </section>


    <section class="white">
        <div class="container">
            <div class="col-sm-4 text-center">
                <br/>
                <i class="eloji eloji-circular orange fs-200"></i>
            </div>
            <div class="col-sm-8">
                <h3>Transportation Management Software</h3>

                <p class="fs-20">
                    A network of carriers and negotiated rates only becomes "great" when used according to design. With
                    the execution of every shipment, its critical that service requirements be met at the lowest
                    shipping cost possible. It can also be important for transit information be readily available to the
                    intended recipient of a shipment and those responsible for managing the freight. Lojistic's
                    transportation management software automates routing guide compliance and provides a singular
                    visibility hub for all shipments.
                </p>
            </div>
        </div>
    </section>


    <section class="silver">
        <div class="container">
            <div class="col-sm-8">
                <h3>Freight Invoice Auditing, GL Coding <br/>& Carrier Pay Services</h3>

                <p class="fs-20">
                    Shipping invoices often times contain errors. Lojistic will verify that all freight carrier invoices
                    are accurate via our guaranteed freight auditing services. Cost allocation, commonly referred to as
                    GL Coding, and freight pay services are available and significantly alleviate our client's
                    accounting overhead. The result: time saved, overpayment to carriers eliminated and shipping costs
                    properly coded and integrated with your accounting processes.
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <br/>
                <i class="eloji eloji-payment orange fs-200"></i>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <div class="col-sm-4 text-center">
                <br/>
                <i class="eloji eloji-data-management orange fs-200"></i>
            </div>
            <div class="col-sm-8">
                <h3>Data Management & Reporting</h3>

                <p class="fs-20">
                    We collect and manage your transportation data, but it’s not just about the data. It’s about what
                    the data means. Comprehensive and perfect information results in smart decision-making and higher
                    levels of profitability. Lojistic's team of experts and advanced transportation management software
                    transforms supply chain data into understandable, meaningful, and actionable information.
                </p>
            </div>
        </div>
    </section>

    <!--    -->
    <section class="silver">
        <div class="container">
            <h2>Best In-Class Service</h2>
            <!-- traffic admin -->
            <div class="col-sm-6">
                <br/>
                <div class="circ circ-100 orange text-center">
                    <div class="circ circ-90 white  text-vc">
                        <i class="eloji eloji-traffic orange fs-56  text-vc"></i>
                    </div>
                </div>
                <br/>

                <p class="text-center">
                    <b class="navy fs-20">Traffic Administrative Functions</b>
                </p>

                <p class="fs-16 text-center">
                    Bring a new level of ease to your traffic functions. Guaranteed accurate pre-audits, account
                    coding, bill pay, claims processing, shipment tracking and more. We have a dedicated on-site
                    staff with 24/7 customer support and a host of on-demand reports.
                </p>
                <br/>
            </div>
            <!-- end traffic admin -->

            <!-- logistics consulting -->
            <div class="col-sm-6">
                <br/>
                <div class="circ circ-100 orange text-center">
                    <div class="circ circ-90 white  text-vc">
                        <i class="eloji eloji-logistics orange fs-56  text-vc"></i>
                    </div>
                </div>
                <br/>

                <p class="text-center">
                    <b class="navy fs-20">Logistics Consulting</b>
                </p>

                <p class="fs-16 text-center">
                    Extensive analysis of your existing programs to look for strategies such as pool distribution,
                    warehouse relocation, consolidation and zone jumping to optimize your shipping. We also
                    evalutate
                    and source the best carriers.
                </p>
                <br/>
            </div>
            <!-- end logistics consulting -->
            <!-- carrier management -->
            <div class="col-sm-6">
                <br/>
                <div class="circ circ-100 orange text-center">
                    <div class="circ circ-90 white  text-vc">
                        <i class="eloji eloji-freight orange fs-56  text-vc"></i>
                    </div>
                </div>
                <br/>

                <p class="text-center">
                    <b class="navy fs-20">Carrier Management</b>
                </p>

                <p class="fs-16 text-center">
                    We have developed strong relationships with all major carriers and continue to expand our
                    database of over 8,000 carrier sources. We manage all modes of transportation for domestic and
                    international freight, creating critical partnerships that lead to success.
                </p>
            </div>
            <!-- end carrier management -->

            <!-- information management -->
            <div class="col-sm-6">
                <br/>
                <div class="circ circ-100 orange text-center">
                    <div class="circ circ-90 white  text-vc">
                        <i class="eloji eloji-data orange fs-56  text-vc"></i>
                    </div>
                </div>
                <br/>

                <p class="text-center">
                    <b class="navy fs-20">Information Management</b>
                </p>

                <p class="fs-16 text-center">
                    Our systems are 210, 214 and 856 EDI capable and offer limitless reporting functions. Our
                    clients receive confidential web access to our tools. We are constantly investing in new
                    software and tools to maximize your shipping operations.
                </p>
            </div>
            <!-- end information management -->
        </div>
    </section>
    <section class="white">
        <div class="container">
            <h3 class="navy text-center">Let's Chat About How Our Freight Management Services <br/>
                Can Revolutionize Your Shipping</h3>
            <br/>
            @include('parts.forms.contact-or-schedule', array(
                'scheduleTitle' => 'Let\'s Talk Freight',
                'scheduleText'  => 'Want To Discuss Your Needs?<br/>Get A No Cost, No Obligation Analysis Of Your Freight Today!',
                'scheduleBtnText' => 'SCHEDULE NOW',
                'formVars' => array(
                    'thankyouPage' => '/thank-you',
                    'intent' => 'Managed Freight Solutions',
                    'btnTxt' => 'CONTINUE',
                    'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
                )
            ))
        </div>
    </section>
@stop