@extends('layouts.responsive')
@section('scripts')
    <script type="text/javascript">
        $('#lojistic-logo').attr('href', '/lojistic')
    </script>
@stop
@section('content')
    {!! Html::style('css/home.css?v='.v())  !!}
    {!! Html::style('css/slideshow.css?v='.v())  !!}
    {!! Html::style('css/responsive.css?v='.v())  !!}
    {!! Html::script('js/slider.js')  !!}
    <div id="slider">
        <div class="slider_controls" id="slider_left">
            <div class="slider_arrow">
            </div>
        </div>
        <div id="slider_viewport">
            <div id="slides">
                <div class="slide" id="sl_audit" data-color="#15425f">
                    <div class="slide_content">
                        <h3>Parcel &amp; Freight Auditing</h3>
                        <!--<h4>The Steps To Substantial Savings</h4>-->
                        <h4>How many carrier mistakes were on your shipping invoice last week?</h4>

                        <p>Stop over paying your carrier! Lojistic will
                            audit and recover all carrier billing errors,
                            ensuring every freight invoice is correct.</p>
                        <span class="orange_check">MISTAKES AND SERVICE FAILURES ARE ON YOUR INVOICE</span>
                        <span class="orange_check">RECOVER UP TO 6% SAVINGS</span>
                    </div>

                    <a rel="nofollow" href="parcel-freight-bill-audit" class="arrow">
                        <img src="{{ URL::asset('images/orange-arrow.png') }}"/>
                        Start A Trial Audit Now<span class="rightarrow">
</span>
                    </a>

                    <p class="expand">[+] Expand</p>

                    <div class="expand_content">
                        <h4>Advanced Carrier Parcel and Freight Audit Solutions</h4>

                        <p>Does your company have a system and process in place to validate every
                            transportation and accessorial charge that appears on your carrier shipping
                            invoice? Virtually every invoice contains misapplied accessorial charges,
                            rate errors, duplicate charges, and/or charges for shipments delivered
                            outside the carrier's service guarantee(s).</p>

                        <p>Lojistic guarantees to
                            reduce freight costs with our transportation parcel and freight audit
                            solutions, which include: UPS auditing, FedEx auditing, truck (TL &amp; LTL)
                            auditing, ocean freight auditing, rail freight auditing, and air freight
                            auditing. As a standard feature to our parcel audit and freight audit
                            services we offer an extensive suite of logistics reports that are accessible
                            to customers online. We contend that of all freight auditing companies,
                            Lojistic provides the most significant cost saving results and the
                            most useful freight audit reporting solutions in the marketplace.</p>
                    </div>
                </div>

                <div class="slide" id="sl_dim" data-color="#15425f">
                    <div class="slide_content">
                        <h3>Dimensional Weight Cost Tool</h3>
                        <!--<h4>The Steps To Substantial Savings</h4>-->
                        <h4>Effective 2015, FedEx and UPS will impose
                            dimensional weight (DIM) pricing on all Ground packages. </h4>

                        <p>Lojistic's free online Dimensional Weight Cost Comparison Tool will help you
                            assess how this significant rule change will affect your business </p>
                        <span class="orange_check">COMPARE ACTUAL WEIGHT COST VS DIMENSIONAL WEIGHT COST</span>
                        <span class="orange_check">SEE HOW DIM CHARGES WILL IMPACT YOUR BUSINESS</span>
                    </div>

                    <a rel="nofollow" href="{{ URL::route('dim-calculator') }}" class="orange_button">
                        CALCULATE DIM CHARGES NOW<span class="rightarrow">
</span>
                    </a>
                </div>

                <div class="slide" id="sl_nego" data-color="#767d81">
                    <div class="slide_content">
                        <h3>Carrier Rates Negotiation &amp; Analysis</h3>
                        <h4>How much can your shipping rates be improved?</h4>

                        <p>Let Lojistic perform an
                            analysis of your company's small parcel
                            shipping and freight contracts to determine
                            cost saving opportunities.</p>
                    <span class="orange_check">
                        ANALYZE YOUR SHIPPING RATES
                    </span>
                    <span class="orange_check">
                        REDUCE SHIPPING COSTS 7%-40%
                    </span>
                    </div>
                    <a rel="nofollow" href="carrier-contract-negotiation" class="orange_button">
                        Sign Up For A Custom Analysis<span class="rightarrow">
</span>
                    </a>

                    <p class="expand">[+] Expand</p>

                    <div class="expand_content">
                        <h4>Advanced Freight Shipping Contract Solutions</h4>

                        <p>Parcel and freight carriers sell shipping contracts that attempt to maximize
                            carrier profit. One of the most effective ways to reduce shipping costs and
                            increase your company's profitability is to renegotiate and improve freight
                            contracts. UPS contracts and FedEx freight contracts include numerous variables
                            that determine the final shipping costs and profitability of each package. </p>

                        <p>A small change in an accessorial charge, carrier tariff schedule, service
                            incentive, deferred incentive, minimum net charge, or carrier surcharge can
                            substantially reduce shipping costs and make freight contracts more favorable.
                            The carrier contract pricing experts at Lojistic use highly developed
                            analytic software and industry knowledge to benchmark and compare current FedEx
                            contracts and UPS contracts versus what is available in the marketplace. Lojistic's
                            freight contract negotiation and shipping audit teams will help
                            your company improve your shipping rates and significantly reduce freight
                            costs in ways other freight auditing companies cannot.</p>

                    </div>
                </div>


                <div class="slide" id="sl_demo" data-color="#cfcc52">
                    <div class="slide_content">
                        <h3>Parcel &amp; Freight Savings Demo</h3>
                        <h4>Our freight and parcel services reduce shipping costs... and we can prove it.</h4>

                        <p>View an online demonstration of how Lojistic can
                            significantly reduce your shipping costs with our best-in-class
                            parcel and freight audit services.</p>
                        <span class="orange_check">YOU PAY A LOT FOR SHIPPING </span>
                        <span class="orange_check">FIND OUT HOW MUCH YOU CAN SAVE</span>
                    </div>

                    <a rel="nofollow" href="parcel-freight-audit-demo" class="orange_button">
                        View The Demo <span class="rightarrow">
</span>
                    </a>

                    <p class="expand">[+] Expand</p>

                    <div class="expand_content">
                        <h4>Transportation Technology &amp; Logistics Solutions</h4>

                        <p>Lojistic's team of experienced former UPS, FedEx, DHL, and freight
                            carrier employees combined with innovative shipping rate analytics and
                            freight audit technology deliver maximum small parcel shipping and freight
                            cost savings. Rising freight shipping costs are a challenge for most
                            companies. Our freight auditing team thoroughly understands today's complex
                            carrier environment and has helped hundreds of companies reduce shipping costs.
                            We provide robust parcel audit and freight audit services. Additionally, our
                            carrier contract experts perform a complimentary analysis of your parcel and
                            freight contracts to identify additional freight cost reduction opportunities
                            that can be achieved through modification of your shipping contracts. </p>

                        <p>Service
                            fees are performance-based, meaning our compensation is a contingent share of
                            actual savings produced by our carrier contract negotiation and freight audit
                            services. Employing the freight auditing technology and expertise of Lojistic,
                            as an unbiased third-party, will dramatically reduce freight
                            costs and increase operational efficiencies.</p>

                    </div>
                </div>


                <div class="slide" id="sl_calc" data-color="#437c9f">
                    <div class="slide_content">
                        <h3>Shipping Calculators</h3>
                        <h4>FedEx &amp; UPS Rates Calculator and Rate Comparison Tools</h4>

                        <p>Lojistic's free online calculators can help you
                            reduce shipping costs. Use these tools to generate your own FedEx and UPS tariffs and
                            compare UPS and FedEx shipping rates.</p>
                    <span class="orange_check">
                        FREE FEDEX &amp; UPS RATES TOOLS
                    </span>
                    <span class="orange_check">
                        COMPARE UPS &amp; FEDEX RATES
                    </span>
                    </div>

                    <a rel="nofollow" href="shipping-costs-calculators" class="orange_button">
                        Calculate Rates <span class="rightarrow">
</span>
                    </a>

                    <p class="expand">[+] Expand</p>

                    <div class="expand_content">
                        <h4>Free Shipping Cost Calculators</h4>

                        <p>Our free calculators can help to reduce shipping costs by enabling you to
                            better analyze and compare UPS and FedEx shipping rates. The easy-to-use
                            FedEx &amp; UPS Rates Calculator from Lojistic generates a rate schedule
                            based on the carrier, service type and applicable discounts of your choosing.
                            The simple FedEx &UPS Rate Comparison Tool places two rate schedules
                            back-to-back so you can compare how carriers, service types and discounts
                            affect your costs.</p>

                        <p>Understand, manage and reduce shipping costs by using the
                            FedEx &amp; UPS Rates Calculator and the FedEx &amp; UPS Rate Comparison Tool. If you
                            would like to reduce your freight costs even further, trial Lojistic's
                            transportation cost cutting services today. We are confident that once you
                            experience our freight audit services firsthand you will see how we stand
                            apart from other freight audit companies in the industry.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="slider_controls" id="slider_right">
            <div class="slider_arrow">
            </div>
        </div>
        <div id="slider_dots">
        <span class="selected">
</span>
        <span>
</span>
        <span>
</span>
        <span>
</span>
        <span>
</span>

            <div id="slider_pause">
            </div>
        </div>
    </div>
    <div id="slider_expand">

    </div>

    <div class="container" id="service-icons">
        <h2>Explore a few strategies to reduce
            transportation costs
        </h2>

        <div class="row">
            <div class="col-sm-4 col-xs-12 icon">
                <div class="col-xs-12">
                    <a rel="nofollow" href="/parcel-freight-bill-audit">
                        <img src="{{ URL::asset('images/grey-products-audit.png') }}"/>
                    </a>
                </div>
                <div class="col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <b>
                        <a rel="nofollow" href="/parcel-freight-bill-audit">
                            Parcel &amp; Freight Audit
                        </a>
                    </b>
                    <br/>

                    <p>
                        &quot;My shipping invoices contain errors and I&rsquo;m getting over-charged.&quot;
                    </p>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12 icon">
                <div class="col-xs-12">
                    <a rel="nofollow" href="/carrier-contract-negotiation">
                        <img src="{{ URL::asset('images/grey-products-neg.png') }}"/>
                    </a>
                </div>
                <div class="col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <b>
                        <a rel="nofollow" href="/carrier-contract-negotiation">
                            Carrier Negotiation</b>
                    </a>
                    <br/>

                    <p>
                        &quot;My shipping rates are good but I wish they were better.&quot;
                    </p>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12 icon">
                <div class="col-xs-12">
                    <a rel="nofollow" href="/freight-management/">
                        <img src="{{ URL::asset('images/grey-products-freight.png') }}"/>
                    </a>
                </div>
                <div class="col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <b>
                        <a rel="nofollow" href="/freight-management/">
                            Freight Management</b>
                    </a>
                    <br/>

                    <p>
                        &quot;My company moves product via various modes of shipping.&quot;
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 col-xs-12 icon">
                <div class="col-xs-12">
                    <a rel="nofollow" href="/shipping-insurance">
                        <img src="{{ URL::asset('images/grey-products-ins.png') }}"/>
                    </a>
                </div>
                <div class="col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <b>
                        <a rel="nofollow" href="/shipping-insurance">
                            Shipping Insurance
                        </a>
                    </b>
                    <br/>

                    <p>
                        &quot;Is there a better way to insure the contents of my parcel shipments?&quot;
                    </p>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12 icon">
                <div class="col-xs-12">
                    <a rel="nofollow" href="/shipping-software/">
                        <img src="{{ URL::asset('images/grey-products-intelliship.png') }}"/>
                    </a>
                </div>
                <div class="col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <b>
                        <a rel="nofollow" href="/shipping-software/">
                            Shipping Software
                        </a>
                    </b>
                    <br/>

                    <p>
                        &quot;I want to automate my shipping processes and save money.&quot;
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 icon">
                <div class="col-xs-12">
                    <a rel="nofollow" href="/halo/">
                        <img src="{{ URL::asset('images/grey-products-halo.png') }}"/>
                    </a>
                </div>
                <div class="col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                    <b>
                        <a rel="nofollow" href="/halo/">
                            Tracking Software
                        </a>
                    </b>
                    <br/>

                    <p>
                        &quot;I need centralized visibility and a better way to manage my shipments.&quot;
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="call-to-action navy">
        <div class="row">
            <div class="col-md-9 col-sm-12 sm-text-center">
                <b>Feature Packed Solutions Just a Click Away</b>
                <br/>

                <p>Let us show you how to significantly reduce your shipping costs</p>
            </div>
            <div class="col-md-3 col-sm-8 col-sm-offset-2 col-md-offset-0">
                <a rel="nofollow" href="/say-hi/" class="btn btn-primary">SEE US IN ACTION</a>
            </div>
        </div>
    </div>


    <div id="sc2020">
        <div class="container split-img">
            <div class="col-sm-4 col-xs-12">
                <img src="{{ URL::asset('images/lg-2020.png') }}"/>
            </div>
            <div class="col-sm-7 col-md-offset-1 col-xs-12">
                <table>
                    <thead>
                    <tr>
                        <th>$</th>
                        <th>1</th>
                        <th>0</th>
                        <th>0</th>
                        <th>,</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="8">
                            <span>OF OUR MONEY</span>
                            TO BRING CLEAN WATER TO DEVELOPING COUNTRIES
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <span>THIS IS NOT A FUNDRAISER</span>
                        </td>
                        <td colspan="4">
                            THIS IS OUR GIVING PLAN
                        </td>
                    </tr>
                    </tbody>
                </table>
                <a rel="nofollow" href="/20-20/" class="btn btn-primary btn-2020">
                    LEARN MORE
                </a>
            </div>
        </div>
    </div>


    <div class="white" id="custom-exp">
        <div class="container">
            <h2>
                Let Us Customize Your Lojistic Experience
            </h2>

            <div class="row">
                <div class="col-sm-4 col-xs-12 flag flag-link">
                    <div class="flag-heading">
                        EDUCATION RESOURCES
                    </div>
                    <div class="flag-content">
                        <b>
                            <a rel="nofollow" href="/about-lojistic">
                                Just Browsing and<br/>
                                More Information?
                            </a>
                        </b>

                        <p>
                            You know that tools exist that can make your logistics
                            better, but are figuring out where to start.
                        </p>

                        <div class="flag-emblum brain-meter">
                            <div class="brain-needle">
                            </div>
                            <div class="brain-brain">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 flag flag-link">
                    <div class="flag-heading">
                        HOW WE CAN HELP
                    </div>
                    <div class="flag-content">
                        <b>
                            <a rel="nofollow" href="/reduce-shipping-costs">
                                Looking For<br/>
                                Something Specific?
                            </a>
                        </b>

                        <p>
                            What do companies come
                            to Lojistic
                            looking for?
                            <br/>
                        </p>

                        <div class="flag-emblum brain-meter">
                            <div class="brain-needle">
                            </div>
                            <div class="brain-brain">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 flag flag-link">
                    <div class="flag-heading">
                        LETS DO THIS!
                    </div>
                    <div class="flag-content">
                        <b>
                            <a rel="nofollow" href="/say-hi">
                                I&rsquo;m a lookin&rsquo;, <br/>
                                and I&rsquo;m a likin&rsquo;!
                            </a>
                        </b>

                        <p>
                            If you see what you need,
                            get started now.
                            <br/>
                            <br/>
                        </p>

                        <div class="flag-emblum brain-meter">
                            <div class="brain-needle">
                            </div>
                            <div class="brain-brain">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="silver" id="calcs">
        <div class="container flags">
            <h2>Useful Shipping Calculators and Other Tools</h2>

            <div class="row">
                <div class="col-sm-5 col-sm-offset-1 col-xs-12 flag flag-link">
                    <div class="flag-heading">
                    </div>
                    <div class="flag-content">
                        <div class="flag-emblum">
                            <a rel="nofollow" href="/shipping-costs-calculators/fedex-ups-rates-calculator/">
                                <img src="{{ URL::asset('images/calc-rate-sheet.jpg') }}"/>
                            </a>
                        </div>
                        <b>
                            <a rel="nofollow" href="/shipping-costs-calculators/fedex-ups-rates-calculator/">
                                Generate a Custom<br/>
                                FedEx or UPS Rate Sheet
                            </a>
                        </b>
                    </div>
                </div>
                <div class="col-sm-5 col-xs-12 flag flag-link">
                    <div class="flag-heading">
                    </div>
                    <div class="flag-content">
                        <div class="flag-emblum">
                            <a rel="nofollow" href="/shipping-costs-calculators/fedex-ups-rate-comparison-tool">
                                <img src="{{ URL::asset('images/calc-compare.jpg') }}"/>
                            </a>
                        </div>
                        <b>
                            <a rel="nofollow" href="/shipping-costs-calculators/fedex-ups-rate-comparison-tool">
                                Compare UPS<br/>
                                vs FedEx Costs
                            </a>
                        </b>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 col-sm-offset-1 col-xs-12 flag flag-link">
                    <div class="flag-heading">
                    </div>
                    <div class="flag-content">
                        <div class="flag-emblum">
                            <a rel="nofollow" href="{{ URL::route('dim-calculator') }}">
                                <img src="{{ URL::asset('images/calc-dim.jpg') }}"/>
                            </a>
                        </div>
                        <b>
                            <a rel="nofollow" href="{{ URL::route('dim-calculator') }}">
                                Dimensional Weight<br/>
                                Pricing (DIM) Calculator</a>
                        </b>
                    </div>
                </div>
                <div class="col-sm-5 col-xs-12 flag flag-link">
                    <div class="flag-heading">
                    </div>
                    <div class="flag-content">
                        <div class="flag-emblum">
                            <a rel="nofollow" href="/shipping-insurance/">
                                <img src="{{ URL::asset('images/calc-insurance.jpg') }}"/>
                            </a>
                        </div>
                        <b>
                            <a rel="nofollow" href="/shipping-insurance/">
                                Shipping Insurance<br/>
                                Savings Calculator
                            </a>
                        </b>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="white" id="whitepaper-flags">
        <div class="container">
            <h2>
                White Papers and Resource Library
            </h2>

            <div class="row">
                <div class="col-sm-4 col-xs-12 flag flag-link">
                    <div class="flag-heading">
                    </div>
                    <div class="flag-content">
                        <b>
                            <a rel="nofollow" href="/5-secrets-ups-and-fedex-dont-want-you-to-know/">
                                5 Secrets UPS & FedEx<br/>
                                Don&rsquo;t Want You to Know
                            </a>
                        </b>

                        <p>
                            Eliminate these five
                            hidden UPS and FedEx shipping costs!
                        </p>

                        <div class="flag-emblum">
                            <a rel="nofollow" href="/5-secrets-ups-and-fedex-dont-want-you-to-know/">
                                <img src="{{ URL::asset('images/library-5secrets.jpg') }}"/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 flag flag-link">
                    <div class="flag-heading">
                    </div>
                    <div class="flag-content">
                        <b>
                            <a rel="nofollow" href="/general-price-increase/">
                                UPS &amp; FedEx<br/>
                                Price Increase History
                            </a>
                        </b>

                        <p>
                            Historical comparison of the annual UPS &amp; FedEx
                            price increases.
                        </p>

                        <div class="flag-emblum">
                            <a rel="nofollow" href="/general-price-increase/">
                                <img src="{{ URL::asset('images/library-gpi.jpg') }}"/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 flag flag-link">
                    <div class="flag-heading">
                    </div>
                    <div class="flag-content">
                        <b>
                            <a rel="nofollow" href="/fuel-surcharge/">
                                UPS and FedEx<br/>
                                Fuel Surcharge History
                            </a>
                        </b>

                        <p>
                            Historical comparison of
                            the UPS and FedEx
                            fuel surcharge.
                        </p>

                        <div class="flag-emblum">
                            <a rel="nofollow" href="/fuel-surcharge/">
                                <img src="{{ URL::asset('images/library-fuel.jpg') }}"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="silver">
        <div class="call-to-action">
            <div class="row">
                <div class="col-md-8 col-sm-12 sm-text-center">
                    <b>
                        Valuable Logistics Information Awaits</b>
                    <br/>

                    <p>Learn more with these valuable white paper downloads</p>
                </div>
                <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0">
                    <a rel="nofollow" href="/white-papers" class="btn btn-primary">VIEW MORE PAPERS</a>
                </div>
            </div>
        </div>
    </div>


    <div class="white">
        <div class="container split-img">
            <h2 class="light-blue">
                <a rel="nofollow" href="/parcel-freight-bill-audit">
                    Parcel Audit &amp; Freight Bill Audit
                </a>
            </h2>

            <div class="col-sm-3 col-xs-12">
                <img src="{{ URL::asset('') }}images/audit-lrg.png"/>
            </div>
            <div class="col-sm-8 col-sm-offset-1 col-xs-12">
                <p>
                    Lojistic's carrier freight audit services will ensure
                    each UPS, FedEx, LTL, Ocean, and Air freight invoice is correct.
                    Our team will conduct a forty-six point freight audit to catch-all
                    parcel and freight billing errors.
                </p>

                <p>
                    Your carrier shipping invoices contain errors
                    Parcel audit services can produce as much as 6% savings
                </p>
                <a rel="nofollow" href="parcel-freight-bill-audit" class="arrow">
                    <img src="images/orange-arrow.png"/>
                    SAVE NOW
                </a>
            </div>
        </div>
    </div>
    <div class="silver">
        <div class="container split-img">
            <h2 class="light-blue">
                <a rel="nofollow" href="/carrier-contract-negotiation">
                    Shipping Contract Negotiation &amp; Analysis
                </a>
            </h2>

            <div class="col-sm-3 col-sm-offset-1 col-xs-12 pull-right">
                <img src="images/negotiation-lrg.png"/>
            </div>
            <div class="col-sm-8 col-xs-12">
                <p>
                    Lojistic will perform an analysis of current and/or
                    proposed freight and small parcel rates to ensure that shipping
                    contracts are optimized. Our efforts reduce shipping costs of
                    customer&rsquo;s small parcel expenditures by 7% to 40%. Such
                    cost savings are just another reason why clients choose Lojistic
                    over other freight audit companies
                </p>

                <p>
                    How much can your carrier rates be improved? Our free analysis
                    will identify potential savings.
                </p>
                <a rel="nofollow" href="carrier-contract-negotiation" class="arrow">
                    <img src="images/orange-arrow.png"/>
                    IMPROVE CARRIER RATES
                </a>
            </div>
        </div>
    </div>


    <div class="white">
        <div class="container split-img">
            <h2 class="light-blue">
                <a rel="nofollow" href="/freight-management/">
                    Comprehensive Freight Management
                </a>
            </h2>

            <div class="col-sm-3 col-xs-12">
                <img src="images/lg-freight.png"/>
            </div>
            <div class="col-sm-8 col-sm-offset-1 col-xs-12">
                <p>
                    Our full coverage shipping insurance solution is offered at a
                    substantial discount to the carrier’s Declared Value rates. We
                    have simplified the shipping insurance experience to offer you
                    tremendous value and savings.
                </p>

                <p>
                    UPS &amp; FedEx declared value insurance is limited and expensive. Our
                    shipping insurance is easy to use and offers huge savings.
                </p>
                <a rel="nofollow" href="/freight-management/" class="arrow">
                    <img src="images/orange-arrow.png"/>
                    REDUCE FREIGHT COSTS
                </a>
            </div>
        </div>
    </div>

    <div class="silver">
        <div class="container split-img">
            <h2 class="light-blue">
                <a rel="nofollow" href="/shipping-insurance">
                    Discount Parcel Shipping Insurance Coverage
                </a>
            </h2>

            <div class="col-sm-3 col-sm-offset-1 col-xs-12 pull-right">
                <img src="images/insurance-lrg.png"/>
            </div>
            <div class="col-sm-8 col-xs-12">
                <p>
                    Our full coverage shipping insurance solution is offered at a substantial
                    discount to the carrier&rsquo;s Declared Value rates. We have simplified the
                    shipping insurance experience to offer you tremendous value and savings.
                </p>

                <p>
                    UPS &amp; FedEx declared value insurance is limited and expensive. Our
                    shipping insurance is easy to use and offers huge savings.
                </p>
                <a rel="nofollow" href="/shipping-insurance" class="arrow">
                    <img src="images/orange-arrow.png"/>
                    REDUCE INSURANCE COSTS
                </a>
            </div>
        </div>
    </div>


    <div class="white">
        <div class="container split-img">
            <h2 class="light-blue">
                <a rel="nofollow" href="/shipping-software">
                    Affordable &amp; Integrated TMS Shipping Software
                </a>
            </h2>

            <div class="col-sm-3 col-xs-12">
                <img src="{{ URL::asset('images/intelliship-lrg.png') }}"/>
            </div>
            <div class="col-sm-8 col-sm-offset-1 col-xs-12">
                <p>
                    Intelliship&reg; shipping software utilizes a powerful rule-based
                    decision matrix to ensure routing-guide compliance. Due to this
                    manifesting software's routing guide capabilities, every shipment
                    is routed to the most cost effective service mode and carrier.
                    For pre-assigned lanes, Intelliship assures routing guide
                    compliance with carrier agreements by choosing the right carrier
                    for each move based on your customized business rules and routing
                    guide.
                </p>

                <p>
                    Your shipping processes needs smart TMS technology. One system.
                    All shipments. Complete control. Reduced cost.
                </p>
                <a rel="nofollow" href="/shipping-software" class="arrow">
                    <img src="{{ URL::asset('images/orange-arrow.png') }}"/>
                    OPTIMIZE YOUR SHIPPING
                </a>
            </div>
        </div>
    </div>

    <div class="silver">
        <div class="container split-img">
            <h2 class="light-blue">
                <a rel="nofollow" href="/halo/">
                    Package Tracking &amp; Visibility Software
                </a>
            </h2>

            <div class="col-sm-3 col-sm-offset-1 col-xs-12 pull-right">
                <img src="{{ URL::asset('images/halo-lrg.png') }}" id="icon_halo">
            </div>
            <div class="col-sm-8 col-xs-12">
                <p>
                    We offer SaaS transportation freight management software
                    technologies that deliver immediate value. Our innovative
                    transportation software comes equipped with an impressive list
                    of features such as efficient carrier rate shopping, low-cost
                    shipment routing, and real-time multi-carrier transportation
                    visibility.
                </p>

                <p>
                    It&rsquo;s tough to actively manage freight without real&minus;time visibility.
                    View all shipments moving with all carriers via a single interface.
                </p>
                <a rel="nofollow" href="/halo/" class="arrow">
                    <img src="{{ URL::asset('images/orange-arrow.png') }}"/>
                    GET VISIBILITY
                </a>
            </div>
        </div>
    </div>
@stop