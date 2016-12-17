@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title' => 'Parcel Audit - UPS & FedEx Auditing',
        'description' => ' Parcel audit implementation is quick and easy, you can be saving money almost instantly. Learn more about parcel auditing with lojistics here today.',
        'keywords' => 'parcel audit, ups audit, fedex audit, reduce transportation costs, parcel auditor, small parcel auditr',
    ])
@overwrite
@section('content')
    <section class="banner navy">
        <div class="container">
            <div class="col-sm-3 col-xs-12 text-center">
                <i class="fs-150 white eloji-paper-audit"></i>
            </div>
            <div class="col-sm-9 col-xs-12">
                <h1 class="white">Parcel Audit</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <article>
                <p>
                    Implementing a parcel audit will help reduce your transportation costs and give you better insight
                    into your overall transportation operations. A parcel audit works by deep scanning your shipping
                    invoices and identifying errors. Our parcel audit team then reaches back out to the carriers and
                    secure credits on your behalf. With a <a href="/parcel-audit/fedex-audit">FedEx audit</a>, your credits will be reflected on the audited
                    invoice. But with a <a href="/parcel-audit/ups-audit">UPS audit</a>, your credits will post on a future invoice.
                </p>

                <p>
                    A parcel audit will normally procure savings in the amount of 1-7% of net transportation spend.
                    Parcel audit implementation is quick and easy, you can be saving money almost instantly. The
                    onboarding procedures are slightly different for a FedEx audit versus a UPS audit, but you can rest
                    easy as both processes are very simple.
                </p>

                <p>
                    Once your parcel audit has been started, you’ll start seeing savings almost immediately. As
                    previously mentioned, with a FedEx audit you will see credits applied to the audited invoice. A UPS
                    audit secures credits that are applied against future invoices. No matter your carrier, a shipping
                    audit will help put money back in your pocket and has the power to identify other saving
                    opportunities in your transportation operations.
                </p>

                <p>
                    As a leading parcel auditor, Lojistic will leverage the data gained from conducting a parcel audit
                    to identify and pursue other (sometimes substantial) saving opportunities.
                </p>
            </article>

        </div>
    </section>

    @include('parts.home.test-audit-lead-in')

    <section class="navy">
        <div class="container text-center">
                <h2 class="white">
                   <i>Related Stuff</i>
                </h2>
            <div class="row">
                <a href="/parcel-freight-bill-audit" class="btn btn-info btn-inline">
                    PARCEL &amp; FREIGHT AUDIT
                </a>
                <a href="/parcel-audit/ups-audit" class="btn btn-info btn-inline">
                    UPS AUDIT
                </a>
                <a href="/parcel-audit/fedex-audit" class="btn btn-info btn-inline">
                    FEDEX AUDIT
                </a>
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
@stop