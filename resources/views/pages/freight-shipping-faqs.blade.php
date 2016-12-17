@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Common Freight Shipping Questions - Lojistic',
        'description' => 'With a truck, rail, air or ocean freight audit by our freight auditors, you are guaranteed to reduce freight costs.',
        'keywords'    => 'what is parcel shipping, small parcel shipping, small parcel delivery, parcel shipments',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            @include('parts.freight-faqs-table-of-contents', array('current1' => 'current'))
        </div>
    </section>
    <section class="silver" id="questions">
        <div class="container">
            <h2 class="text-center">General Parcel Freight Bill Audit Questions</h2>

            <div class="col-sm-6">
                <ul class="ul">
                    <li class="scrollTo" data-target="#a1-1">
                        Which small parcel carriers does Lojistic audit?
                    </li>
                    <li class="scrollTo" data-target="#a1-2">
                        What is your parcel audit service looking for on each carrier invoice?
                    </li>
                    <li class="scrollTo" data-target="#a1-3">
                        How much time and what information is necessary to implement Lojistic's parcel auditing
                        service?
                    </li>
                    <li class="scrollTo" data-target="#a1-4">
                        After implementation, how much of my time will be required to facilitate Lojistic's ongoing
                        carrier audit?
                    </li>
                    <li class="scrollTo" data-target="#a1-5">
                        Does your auditing service guarantee to reduce parcel freight costs?
                    </li>

                    <li class="scrollTo" data-target="#a1-6">
                        My company has a general service refund (GSR) waiver. Can Lojistic still audit our parcel
                        invoices?
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul class="ul">
                    <li class="scrollTo" data-target="#a1-7">
                        How is Lojistic different from other parcel freight audit companies?
                    </li>
                    <li class="scrollTo" data-target="#a1-8">
                        Will implementing a parcel audit negatively affect my company's carrier relationship and
                        level of service?
                    </li>
                    <li class="scrollTo" data-target="#a1-9">
                        My company currently performs certain parcel invoice audit procedures internally. Can
                        Lojistic conduct a limited audit including only points that our internal audit is not
                        covering?
                    </li>
                </ul>
                <ul class="ul">
                    <li class="scrollTo" data-target="#a1-10">
                        How can I track the savings produced by your parcel audit?
                    </li>
                    <li class="scrollTo" data-target="#a1-11">
                        What kind of carrier reporting solutions do you offer?
                    </li>
                    <li class="scrollTo" data-target="#a1-12">
                        How much does your parcel freight auditing service cost?
                    </li>
                    <li class="scrollTo" data-target="#a1-13">
                        Can Lojistic audit both domestic and international shipments?
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="white">
        <div class="container">
            <article id="a1-1">
                <h2> Which small parcel carriers does Lojistic audit?</h2>

                <p>
                    Lojistic is a parcel freight auditing company that audits UPS invoices, FedEx invoices as well as
                    many other carriers. There are billing errors and services failures on each carrier's weekly small
                    parcel delivery invoice. Our parcel auditing solutions will ensure each shipping bill is accurate.
                </p>
                <hr/>
            </article>
            <article id="a1-2">
                <h2>What is your parcel audit service looking for on each carrier invoice?</h2>

                <p>
                    Our software and team of professional parcel freight auditors conduct a 46-point audit of each
                    individual shipment that appears on your carrier invoice. Each audit point is a potential source of
                    carrier billing errors and thus a potential source of carrier refunds. Several of the most common
                    carrier billing errors are related to late deliveries, erroneous address correction charges,
                    erroneous residential delivery charges, packages manifested but not shipped, erroneous dimensional
                    weight charges, duplicate charges, erroneous delivery area surcharges, and packages with no proof of
                    delivery. There are numerous carrier service failures and billing mistakes that occur on virtually
                    every invoice for small parcel shipping. It is an essential part of risk management to monitor each
                    package and every charge that appears on your carrier invoices.
                </p>
                <hr/>
            </article>
            <article id="a1-3">
                <h2> How much time and what information is necessary to implement Lojistic's parcel auditing
                    service?</h2>

                <p>
                    It is very simple, quick, and easy to implement a trial of our parcel audit. We like to compare the
                    implementation of our parcel auditing service to that of turning on a light switch. The process is
                    not invasive to current operations and is very easy for your accounting team to incorporate into
                    their current processes. Once you have authorized us to begin auditing your company's small parcel
                    invoices, a copy of each shipping invoice is all we need to begin generating immediate cost savings
                    on your freight and parcel shipments. The team at Lojistic provides the technology and resources to
                    enable your company to stop overpaying your freight and small parcel carriers.
                </p>
                <hr/>
            </article>
            <article id="a1-4">
                <h2>After implementation, how much of my time will be required to facilitate Lojistic's ongoing carrier
                    audit?</h2>

                <p>
                    Once our team has begun to audit your weekly small parcel invoices, there is literally no time
                    required on your part to facilitate our ongoing parcel audit work. Each week we will provide several
                    reports. One of those reports will detail credits applied to your account that week, which occurred
                    as a direct result of our parcel freight auditing service. Your company can continue to pay your
                    carriers with the assurance that Lojistic is eliminating all invalid freight and small parcel
                    shipping charges.
                </p>
                <hr/>
            </article>
            <article id="a1-5">
                <h2>Does your auditing service guarantee to reduce parcel freight costs?</h2>

                <p>
                    All small parcel carrier service levels, including both air services and ground services, are
                    guaranteed to be delivered by a certain date and time. Some companies agree to waive their right to
                    late delivery refunds. Often times a general service refund waiver or money back guarantee waiver is
                    sold into a shipping contract by the small parcel carrier in "exchange" for an additional incentive
                    or discount somewhere else in the contract.
                </p>

                <p>
                    Lojistic highly discourages waiving your right to late delivery refunds by signing these types of
                    shipping contracts, and contends that virtually any incentive or discount offered by UPS or FedEx
                    with a waiver can also be offered without a waiver. In the event there is a service refund waiver in
                    your contract, we are still able to audit your parcel freight invoices. Late deliveries and service
                    failures are merely one of forty-six things that our freight auditors look for on each carrier
                    invoice.
                </p>
                <hr/>
            </article>
            <article id="a1-6">
                <h2>My company has a general service refund (GSR) waiver. Can Lojistic still audit our parcel
                    invoices?</h2>

                <p>
                    All small parcel carrier service levels, including both air services and ground services, are
                    guaranteed to be delivered by a certain date and time. Some companies agree to waive their right to
                    late delivery refunds. Often times a general service refund waiver or money back guarantee waiver is
                    sold into a shipping contract by the small parcel carrier in "exchange" for an additional incentive
                    or discount somewhere else in the contract. Lojistic highly discourages waiving your right to late
                    delivery refunds, and contends that virtually any incentive or discount offered by UPS or FedEx with
                    a waiver can also be offered without a waiver. In the event there is a service refund waiver in your
                    contract, we are still able to audit your parcel freight invoices. Late deliveries and service
                    failures are merely one of forty-two things that our freight auditors look for on each carrier
                    invoice.
                </p>
                <hr/>
            </article>
            <article id="a1-7">
                <h2> How is Lojistic different from other parcel freight audit companies?</h2>

                <p>
                    Lojistic is extremely thorough and effective when auditing each carrier invoice. All parcel audits
                    are not the same! We contend that of all freight audit companies we produce superior parcel freight
                    cost reduction, the most advanced logistics reporting solutions, and unmatched customer service.
                    Speak to several of our customers who've tried our freight management services, and you will clearly
                    understand why they have decided to utilize our parcel audit services.
                </p>
                <hr/>
            </article>
            <article id="a1-8">
                <h2> Will implementing a parcel audit negatively affect my company's carrier relationship and level of
                    service?</h2>

                <p>
                    This is a very common and frequently asked question. One of the most effective ways to get your
                    small parcel carrier to improve their level of service is to remind them they are not the only
                    carrier for parcel shipments. UPS and FedEx need to work to retain your business. A critical part of
                    superior parcel and freight carrier service is accurately billing for services rendered. Our parcel
                    and freight payment audit services at Lojistic ensure that every charge on your bill is accurate.
                    Your carrier relationship will not be adversely affected. As a result of our services, many of our
                    parcel auditing customers actually receive a higher level of service from their carrier.
                </p>
                <hr/>
            </article>
            <article id="a1-9">
                <h2>My company currently performs certain parcel invoice audit procedures internally. Can Lojistic
                    conduct a limited audit including only points that our internal audit is not covering?</h2>

                <p>
                    Lojistic's team of parcel freight auditors is highly effective and efficient at identifying parcel
                    shipping billing errors. Our goal is to identify UPS and FedEx inaccuracies that would not have been
                    recovered otherwise. Though we strongly believe our parcel freight audit is most effective in
                    reducing freight costs, we are able to customize our parcel freight auditing solution to meet your
                    company's needs.
                </p>
                <hr/>
            </article>
            <article id="a1-10">
                <h2> How can I track the savings produced by your parcel audit?</h2>

                <p>
                    UPS and FedEx refunds generated by our freight auditors are applied directly to your shipping
                    account. We provide a weekly report detailing all carrier credits that have resulted from our
                    transportation audit. Our results are extremely transparent.
                </p>
                <hr/>
            </article>
            <article id="a1-11">
                <h2>What kind of carrier reporting solutions do you offer?</h2>

                <p>
                    Lojistic offers an online logistics reporting tool as a standard part of our freight audit services.
                    Our suite of carrier reports allows customers to monitor detailed shipping information and helps to
                    reduce shipping costs. The online transportation reporting tool provides comprehensive real-time
                    reporting of all freight and small parcel shipments. High level shipping cost summary reports and
                    detailed granular reports will help specific company departments better manage logistics operations
                    and reduce freight costs. Our reporting tool will archive shipping data enabling your team to
                    generate any number of historical freight bill audit reports when needed. A better understanding of
                    your small parcel characteristics will facilitate improved internal efficiencies, minimize costly
                    operational mistakes, and help guide toward a better carrier relationship.
                </p>
                <hr/>
            </article>
            <article id="a1-12">
                <h2>How much does your parcel freight auditing service cost?</h2>

                <p>
                    Our compensation is limited to a contingent share of the actual savings generated by our freight
                    audit services. In that way, our motivation is parallel to maximizing freight cost reduction for
                    your company. Your company is currently overpaying your small parcel carrier. Lojistic's parcel
                    freight audit services will produce measurable cost savings.
                </p>
                <hr/>
            </article>
            <article id="a1-13">
                <h2> Can Lojistic audit both domestic and international shipments?</h2>

                <p>
                    Yes. Lojistic's parcel auditing services are applicable to all UPS, FedEx and other carrier
                    shipments billed to a United States shipping account number. If your company is doing domestic
                    shipping, international shipping, or receiving inbound shipments from overseas, Lojistic will ensure
                    that all carrier charges appearing on your parcel and freight invoices are accurate.
                </p>
                <hr/>
            </article>
        </div>
    </section>
@stop