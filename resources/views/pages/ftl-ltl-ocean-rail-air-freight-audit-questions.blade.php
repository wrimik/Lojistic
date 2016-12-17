@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Truck, Air, Rail, & Ocean Freight Audit Questions - Lojistic',
        'description' => 'With a truck, rail, air or ocean freight audit by our freight auditors, you are guaranteed to reduce freight costs.',
        'keywords'    => 'Ocean Freight Audit, Freight Audits, Freight Auditors, Reduce Freight Costs',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            @include('parts.freight-faqs-table-of-contents', array('current3' => 'current'))
        </div>
    </section>

    <section class="silver" id="questions">
        <div class="container">
            <h2>General Truck (FTL & LTL), Ocean,<br/> Rail, and Air Freight Audit Questions</h2>

            <div class="col-sm-6">
                <ul class="ul">
                    <li class="scrollTo" data-target="#a3-1">
                        What types of freight shipping services can Lojistic audit?
                    </li>
                    <li class="scrollTo" data-target="#a3-2">
                        What types of freight billing errors do your freight auditing services look for?
                    </li>
                    <li class="scrollTo" data-target="#a3-3">
                        What is the typical freight cost recovery percentage resulting from your freight audit?
                    </li>
                    <li class="scrollTo" data-target="#a3-4">
                        What do I need to do in order to implement your freight bill audit?
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul class="ul">
                    <li class="scrollTo" data-target="#a3-5">
                        How far in the past are you able to look for erroneous freight charges?
                    </li>
                    <li class="scrollTo" data-target="#a3-6">
                        Can Lojistic provide a secondary freight bill audit?
                    </li>
                    <li class="scrollTo" data-target="#a3-7">
                        How much do your freight audit services cost?
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="white">
        <div class="container">
            <article id="a3-1">
                <h2>What types of freight shipping services can Lojistic audit?</h2>

                <p>
                    Lojistic guarantees to reduce freight costs with our freight transportation audit solutions, which
                    include: truck (FTL & LTL) auditing, ocean freight auditing, rail freight auditing, and air freight
                    auditing. Using innovative technology, our team of freight auditors will deliver maximum freight
                    shipping cost savings by ensuring each carrier invoice is correct. We will conduct a thorough
                    freight post audit of each shipping invoice. The experienced freight auditors at Lojistic will also
                    manage the carrier audit refund process to ensure your company recovers all erroneous payments to
                    your truck freight carriers, ocean freight carriers, rail freight carriers, and/or air freight
                    carriers. All of our logistics audit solutions are an ongoing trial with no long-term contractual
                    commitments. Lojistic guarantees that our freight bill audit services will reduce shipping costs.
                </p>
                <hr/>
            </article>
            <article id="a3-2">
                <h2>What types of freight billing errors do your freight auditing services look for?</h2>

                <p>
                    Lojistic's freight bill audit will review forty-four points on each shipping invoice. Several common
                    sources of refund credits include: duplicate billings, incorrectly assessed tariff weight breaks,
                    invalid accessorial charges, alternation of tariff rates, carrier routing compliance, and service
                    level failure. Our freight auditors will verify the accuracy of each freight shipping charge that
                    appears on your company's freight invoices.
                </p>
                <hr/>
            </article>
            <article id="a3-3">
                <h2>What is the typical freight cost recovery percentage resulting from your freight audit?</h2>

                <p>
                    The freight cost recovery percentage can vary greatly with each freight bill audit. Results will
                    vary based upon the mode of transportation, the carrier being used, and the characteristics of the
                    product being shipped. Some freight bill audits will produce a one percent recovered savings, while
                    other freight audits can result in a ten percent freight cost reduction.
                </p>
                <hr/>
            </article>
            <article id="a3-4">
                <h2> What do I need to do in order to implement your freight bill audit?</h2>

                <p>
                    Though our team of freight auditors prefers to audit electronic freight shipping invoices, we can
                    conduct a freight bill audit of paper shipping invoices as well. Once we have been provided
                    electronic or paper copies of each carrier invoice to be audited, our team will work to identify
                    service failures and billing errors. Our freight auditors will also manage the claims process to
                    ensure that your freight carriers issue all warranted refunds.
                </p>
                <hr/>
            </article>
            <article id="a3-5">
                <h2>How far in the past are you able to look for erroneous freight charges?</h2>

                <p>
                    The statute of limitations to file for freight billing error refunds varies depending upon the mode
                    of transportation used to ship the product. Less than truckload (LTL) and air freight shipments
                    typically have a six-month statute of limitations. Erroneous carrier charges relating to shipments
                    sent via full truckload (FTL) have a one to two year statute of limitations. Our freight auditors
                    can often go back up to three years when auditing ocean freight invoices and rail freight invoices.
                </p>
                <hr/>
            </article>
            <article id="a3-6">
                <h2>Can Lojistic provide a secondary freight bill audit?</h2>

                <p>
                    All freight audits are not the same! We contend that of all freight audit companies our team
                    produces superior freight cost reduction. Lojistic is extremely thorough and effective when auditing
                    each carrier invoice. If your company has conducted a freight bill audit of your shipping invoices
                    and would like Lojistic to ensure that nothing was missed, our professional auditors will conduct a
                    secondary freight audit.
                </p>
                <hr/>
            </article>
            <article id="a3-7">
                <h2>How much do your freight audit services cost?</h2>

                <p>
                    Lojistic's freight audit services will produce measurable cost savings. We are very confident that
                    your company is currently overpaying your freight carriers. Our compensation is limited to a
                    contingent share of the actual savings generated by our services. In that way, our motivation is
                    parallel to maximizing freight cost reduction for your company.
                </p>
                <hr/>
            </article>
        </div>
    </section>
@stop