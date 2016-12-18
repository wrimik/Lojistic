@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Shipping Software  & Package Tracking Software - Lojistic',
        'description' => 'Intelliship is a multi-carrier, web based shipping software which helps companies of all sizes get their shipping in order.',
        'keywords'    => 'Supply chain software, logistics software, transportation management software, tms software, transportation software, transportation management systems',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            <h2 class="text-center green">
                Intelliship<br>
                <small>Free Enterprise Shipping Software</small>
            </h2>
            <div class="row">
                <div class="col-sm-4">
                    @include('parts.snippets.social-circles', array(
                    'circleSize'=>'circ-150',
                    'elojiSize' => 'fs-72',
                    'eloji' => 'eloji-mouse',
                    'color' => 'green',
                    'title'=>'Click',
                    'text'=>'Free sign up, login & ship.<br> It’s that simple.' ))
                </div>
                <div class="col-sm-4">
                    @include('parts.snippets.social-circles', array(
                   'circleSize'=>'circ-150',
                   'elojiSize' => 'fs-72',
                   'eloji' => 'eloji-box-open-alt',
                   'color' => 'green',
                   'title'=>'Ship',
                   'text'=>'Use your UPS & Fedex rates.<br>Compare, ship, and save.' ))
                </div>
                <div class="col-sm-4">
                    @include('parts.snippets.social-circles', array(
                    'circleSize'=>'circ-150',
                    'elojiSize' => 'fs-72',
                    'eloji' => 'eloji-chillin',
                    'color' => 'green',
                    'title'=>'Done',
                    'text'=>'Bask in the glow of shipping<br>greatness...all for free.' ))
                </div>
            </div>
            <div class="col-centered col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                <a rel="nofollow" href="/shipping-software/sign-up/" class="btn btn-thick green text-center hover-color-opacity uppercase">
                    try it out
                </a>
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <h2 class="text-center green"><i class="fs-150 green eloji-intelliship"></i> <br>Intelliship&trade;<br>
                <small><span class="darkSilver"><em>Intuitive </em>Shipping & Transportation Software</span></small>
            </h2>
            <!--- checklist thingys -->


            <div class="row np">
                <!--one -->
                <div class="col-sm-10 col-sm-offset-2  col-xs-offset-1 col-xs-11 np">
                    <h4 class="green checklist-margin-md">
                        <i class="eloji eloji-check green fs-24 text-vc hidden-xs hidden-sm"></i>
                        &nbsp;&nbsp; Intelliship empowers informed decision making.
                    </h4>
                </div>
            </div>
            <div class="row np">
                <!--one -->
                <div class="col-sm-10 col-sm-offset-2  col-xs-offset-1 col-xs-11 np">
                    <h4 class="green checklist-margin-md">
                        <i class="eloji eloji-check green fs-24 text-vc hidden-xs hidden-sm"></i>
                        &nbsp;&nbsp; Easily connect your own UPS and FedEx rates to your free Intelliship account.
                    </h4>
                </div>
            </div>
            <div class="row np">
                <!--one -->
                <div class="col-sm-10 col-sm-offset-2  col-xs-offset-1 col-xs-11 np">
                    <h4 class="green checklist-margin-md">
                        <i class="eloji eloji-check green fs-24 text-vc hidden-xs hidden-sm"></i>
                        &nbsp;&nbsp; Quickly compare and ship with your best priced carrier rates for each shipment.
                    </h4>
                </div>
            </div>
            <div class="row np">
                <!--one -->
                <div class="col-sm-10 col-sm-offset-2   col-xs-offset-1 col-xs-11 np">
                    <h4 class="green checklist-margin-md">
                        <i class="eloji eloji-check green fs-24 text-vc hidden-xs hidden-sm"></i>
                        &nbsp;&nbsp; Rest easy and enjoy your savings.
                    </h4>
                </div>
            </div>


            <!-- end checklist -->
            <div class="text-center">
                <div class="col-sm-6 col-sm-offset-3"><br>
                    <a rel="nofollow" href="/shipping-software/sign-up" class="btn btn-lg green">
                        <span class="white">CREATE YOUR ACCOUNT</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container same-height-parent">
            <h2 class="green">Cloud Based Enterprise Shipping Software</h2>

            <p class="text-justify">
                Intelliship drives efficiencies in shipment execution by eliminating the need for different shipping
                systems for each mode or carrier. It is a true internet-native SaaS shipping solution that provides
                enterprise-wide multi-carrier shipping and manifesting capability to your dock. With its centralized
                administrative function, you gain a concentric view of all shipping activity across your entire
                enterprise.
            </p>
            <hr/>
            @include('parts.snippets.flag', array(

            'size' => 3,
            'heading' => 'Multi Carrier',
            'flagColor'=> 'green',
            'elojiColor'=> 'green',
            'sameHeight'=> true,
            'text' => 'Ship Using Any Carrier & Any Mode',
            'eloji' => 'eloji-starburst'
            ))
            @include('parts.snippets.flag', array(
            'size' => 3,
            'heading' => 'Rate-Shopping',
            'flagColor'=> 'green',
            'elojiColor'=> 'green',
            'sameHeight'=> true,
            'text' => 'Automatically Ship At The Lowest Rate',
            'eloji' => 'eloji-cart'
        ))
            @include('parts.snippets.flag', array(
            'size' => 3,
            'heading' => 'Easy To Use',
            'flagColor'=> 'green',
            'elojiColor'=> 'green',
            'sameHeight'=> true,
            'text' => 'Intuitive User Interface Quick Start-Up Time',
            'eloji' => 'eloji-happy-mac'
        ))
            @include('parts.snippets.flag', array(
            'size' => 3,
            'heading' => 'Budget Friendly',
            'flagColor'=> 'green',
            'elojiColor'=> 'green',
            'sameHeight'=> true,
            'text' => 'Low Cost, Easy Set-Up Quick ROI, Start Saving',
            'eloji' => 'eloji-piggybank'
        ))
        </div>
    </section>

    <section class="green">
        <div class="col-sm-6 col-sm-offset-3 text-center">
            <h1 class="white"> Ready To Give Intelliship A Try?<br>
                Go Sign Up, It's Free!</h1>
            <br>
            <br>
            <a rel="nofollow" href="/shipping-software/sign-up" class="btn btn-lg white">
                <span class="green">CREATE YOUR ACCOUNT</span>
            </a>
        </div>
    </section>



    <section class="white">
        <div class=" text-center">
            <div class="container">
                <h3 class="green">INTELLISHIP IS AWESOME!!!<br>
                    <small>Share it with your best friend, neighbor, coworker...</small>
                </h3>
                <hr class="slim">
                <div class="col-sm-10 col-sm-offset-1 ">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-sm-3 col-xs-3 text-center">

                            <a rel="nofollow" href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//www.lojistic.com/shipping-software&title=Free%20Online%20Shipping%20Software&summary=&source=Lojistic.com">
                             @include('parts.snippets.social-circles', array(
                               'circleSize'=>'circ-75',
                               'hover'=> 'social-hover',
                               'elojiSize' => 'fs-36',
                               'eloji' => 'eloji-linkedin',
                               'color' => 'green'))
                            </a>
                        </div>
                        <div class="col-sm-3  col-xs-3 text-center">
                            <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.lojistic.com/shipping-software">
                                @include('parts.snippets.social-circles', array(
                                  'circleSize'=>'circ-75',
                                   'hover'=> 'social-hover',
                                  'elojiSize' => 'fs-36',
                                  'eloji' => 'eloji-facebook',
                                  'color' => 'green'))
                            </a>
                        </div>
                        <div class="col-sm-3 col-xs-3 text-center">
                            <a rel="nofollow" href="https://twitter.com/home?status=Check%20out%20an%20awesome%20free%20shipping%20tool!%20https%3A//www.facebook.com/sharer/sharer.php?u=https%253A//www.lojistic.com/shipping-software">
                                @include('parts.snippets.social-circles', array(
                                  'circleSize'=>'circ-75',
                                   'hover'=> 'social-hover',
                                  'elojiSize' => 'fs-36',
                                  'eloji' => 'eloji-twitter',
                                  'color' => 'green'))
                            </a>

                        </div>
                        <div class="col-sm-3  col-xs-3 text-center">
                            <a class="green-hover" rel="nofollow" href="mailto:info@lojistic.com">
                                @include('parts.snippets.social-circles', array(
                                  'circleSize'=>'circ-75',
                                   'hover'=> 'social-hover',
                                  'elojiSize' => 'fs-36',
                                  'eloji' => 'eloji-email',
                                  'color' => 'green',
                                  'hovercolor'=>'green-hover'))
                            </a>

                        </div>
                    </div>
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

    <section class="white">
        <div class="container">
            <div class="col-sm-4 text-center">
                <br/>

                <div class="col-xs-5">
                    <i class="eloji pull-left green fs-100 eloji-boat "></i>
                </div>
                <div class="col-xs-5 col-xs-offset-1">
                    <i class="eloji pull-left green fs-100 eloji-plane"></i>
                </div>
                <div class="col-xs-5">
                    <i class="eloji pull-left green fs-100 eloji-train"></i>
                </div>
                <div class="col-xs-5 col-xs-offset-1">
                    <i class="eloji pull-left green fs-100 eloji-freight"></i>
                </div>
            </div>
            <div class="col-sm-8">
                <h3>Data Management & Reporting</h3>

                <p class="fs-20 ">
                    We collect and manage your transportation data, but it’s not just about the data. It’s about what
                    the data means. Comprehensive and perfect information results in smart decision-making and higher
                    levels of profitability. Lojistic's team of experts and advanced transportation management software
                    transforms supply chain data into understandable, meaningful, and actionable information.
                </p>
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <div class="col-sm-8">
                <h3>Super Fast Rate Shopping</h3>

                <p class="fs-20">
                    With a quick click of your mouse, Intelliship can rate shop the low cost shipping mode, carrier, and
                    service level for every shipment. Based on your company’s unique shipping rules and requirements,
                    our shipping software will automate your company’s routing guide compliance and ensure every
                    shipping decision is a great one. You can easily customize each user’s setup configurations to
                    support high-speed scan automation, batch shipping, and quick one-off shipments.
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <br/>
                <i class="eloji eloji-cart green fs-200"></i>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <div class="col-sm-4 text-center">
                <br/>
                <i class="eloji eloji-happy-mac green fs-200"></i>
            </div>
            <div class="col-sm-8">
                <h3>Easy To Use, Intuitive Interface</h3>

                <p class="fs-20">
                    Changing software systems can be intimidating for many users, but Intelliship makes it easy. Lots of
                    smart people and a countless number of hours were a part of the interface design of Intelliship.
                    Depending upon each user’s setup configuration, our smart shipping software will request and present
                    information as needed, when it needs to be seen, and will handle all the heavy lifting within the
                    backend programming. Your company could have Intelliship up and running within a matter of days.
                    Users will love the shipping system upgrade and your company’s shareholders will love the cost
                    savings!
                </p>
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <div class="col-sm-8">
                <h3>
                    Pricing &amp; ROI</h3>

                <p class="fs-20">
                    Even free software comes with a cost. Time. We understand that
                    large shipping facilities run on muscle memory, and new systems
                    take lots of effort to deploy. Watch as your your initial time investment
                    is repaid as Intelliship picks the best shipping option for
                    every shipment your business makes. With Intelliship, you’ll make
                    smarter decisions, helping you achieve incredible efficiencies.
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <br/>
                <i class="eloji eloji-piggybank green fs-200"></i>
            </div>
        </div>
    </section>
    <section class="white">
        <div class="container">
            <h2>Features</h2>
            <div class="col-sm-6 col-xs-12 np-xs">
                @include('parts.snippets.postit', array(
                'color'=>'flatGrey',
                'eloji'=>'eloji-train',
                'title'=>'Freight Optimization:',
                'content'=>'Intelliship shipping software looks for the shipping mode, carrier and service level that will get your shipment to its destination on the required delivery date at the lowest cost. For example, if the time-in-transit for a Ground package is the same as a Next Day service, Intelliship will intuitively select the lesser-cost service. This is just one way in which Intelliship freight software from Lojistic allows companies to operate more efficiently. ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'red',
                'eloji'=>'eloji-circular',
                'title'=>'Order Consolidation:',
                'content'=>'Intelliship integrates with your ERP to receive order information and automatically consolidates orders for shipping. This fully configurable optimization technology allows you to establish rules for compliance with your fulfillment strategies while optimizing cost saving opportunities with your shipping contracts. ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'flatCoral',
                'eloji'=>'eloji-network',
                'title'=>'Shipment Routing:',
                'content'=>'Intelliship utilizes a powerful rule-based decision matrix to ensure routing-guide compliance. Every shipment is routed to the most cost effective mode, carrier, and service level. For pre-assigned lanes, Intelliship assures compliance with carrier agreements by choosing the right carrier for each move based on your customized business rules and routing guides. ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'green',
                'eloji'=>'eloji-audit',
                'title'=>'Accessorials Included:',
                'content'=>'The Intelliship rate shop functionality is based on Total Charge, accounting for all known accessorials, including: residential surcharge, out of area, fuel surcharge, lift gate fees, etc. Carrier selection methodology ensures carriers are chosen based on landed cost. ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'flatPurple',
                'eloji'=>'eloji-box-open',
                'title'=>'Drop Ship &amp Blind Ship:',
                'content'=>'For fulfillment customers, Intelliship freight software will put the name of your client in the "Ship From" box so the recipient will see the drop shipper\'s name. ',
                ))
            </div>
            <div class="col-sm-6 col-xs-12 np-xs">
                @include('parts.snippets.postit', array(
                'color'=>'orange',
                'eloji'=>'eloji-cart',
                'title'=>'Carrier Rate Shopping:',
                'content'=>'Intelliship will compare rates among all of your carriers and will select the most cost effective option according to the required delivery date, giving you the functionality you would expect from multi carrier shipping software. ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'flatSeafoam',
                'eloji'=>'eloji-check',
                'title'=>'Address Validation:',
                'content'=>'Intelliship shipping software will compare every address for every order with several databases of valid addresses and make corrections if necessary before the shipping label is printed. This feature of the manifest software effectively eliminates "Address Correction Charges". ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'flatYellow',
                'eloji'=>'eloji-calc-rates',
                'title'=>'Manifesting & Document Printing:',
                'content'=>'Intelliship manifest software can produce all of the shipping documentation necessary for domestic shipments (BOLs, shipping labels, pallet tags) as well as commercial invoices for international shipments. Intelliship supports forms and carrier-compliant documentation such as Shipping labels, Manifest reports, DOCTags, Invoices, Commercial Invoices, Pallet Tags, and Hazmat documentation. ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'flatBlue',
                'eloji'=>'eloji-starburst',
                'title'=>'All Modes',
                'content'=>'Intelliship multi carrier shipping software is a single system that can handle all carriers (international and domestic) including small parcel, LTL, full truckload, ocean, air freight and even local carrier or in-house carriers. By managing such a wide variety of carriers, Intelliship functions as a comprehensive solution for those seeking shipping software, manifesting software, LTL software and more. ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'navy',
                'eloji'=>'eloji-cloud-computing',
                'title'=>'Interface:',
                'content'=>'Any computer/smart-device connected to the Internet can become a shipping station for one-off shipping, reviewing the day\'s activity, or printing reports.',
                ))
            </div>
        </div>
    </section>


    <section class="green slim">
        <div class="container">
            <div class="col-sm-7 col-xs-12 text-left text-vc">
                <p class="white" style="margin:0px;">
                    <span class="fs-32">
                        Ready To Give Intelliship A Try?
                    </span><br>
                    <span class="fs-24 fw-thin">
                        Go Sign Up, It's Free!
                    </span>
                </p>
            </div>
            <div class="col-sm-5 col-sm col-xs-12 text-vc">
                <a rel="nofollow" href="/shipping-software/sign-up" class="btn btn-info btn-lg">
                    <span class="green">CREATE YOUR ACCOUNT</span>
                </a>
            </div>
        </div>
    </section>



@stop
